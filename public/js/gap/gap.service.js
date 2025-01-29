class gapService {
    // Fungsi untuk mengirim request AJAX
    ajaxRequest(url, method, data = null) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url,
                method,
                data,
                processData: false,
                contentType: false,
                success: (response) => resolve(response),
                error: (error) => reject(error),
            });
        });
    }

    async getAllData(category, tableId) {
        try {
            const responseData = await this.ajaxRequest(`${appUrl}/v1/swot/${category}`, 'GET');
            const responseGap = await this.ajaxRequest(`${appUrl}/v1/gap/`, 'GET');

            let tableBody = '';

            if (responseData.code === 200 && responseData.data.length > 0) {

                let categoryColor;
                switch (category) {
                    case 'strenght':
                        categoryColor = '#a2e9ff';
                        break;
                    case 'weakness':
                        categoryColor = '#77acf1';
                        break;
                    case 'opportinity':
                        categoryColor = '#7cc083';
                        break;
                    case 'threat':
                        categoryColor = '#50565f';
                        break;
                    default:
                        categoryColor = '#ffffff';
                }

                tableBody += `<tr><th colspan="5" style="text-align: center; background-color: ${categoryColor}; color: white; height: 40px;">${category.toUpperCase()}</th></tr>`;

                responseData.data.forEach((item) => {
                    let tableRow = `<tr >`;
                    tableRow += `<td class="text-center fw-bold fs-5">${item.description}</td>`;

                    const gapData = responseGap.data.filter(gapItem => gapItem.id_swot === item.id);
                    if (gapData.length > 0) {
                        gapData.forEach((gap) => {
                            const currentState = parseFloat(gap.current_state);
                            const gapValue = parseFloat(gap.gap);

                            const currentStateFormatted = isNaN(currentState) ? 0 : currentState.toFixed(0);
                            const gapFormatted = isNaN(gapValue) ? 0 : gapValue.toFixed(0);
                            const planingText = gap.planing ? gap.planing : 'please create your planing...';

                            tableRow += `
                                <td class="text-center">${currentStateFormatted}%</td>
                                <td class="text-center">${gapFormatted}%</td>
                                <td>${planingText}</td>
                                <td class="text-center" style ="width:200px;">
                                    <button class="btn btn-outline-primary btn-sm edit-modal mr-1 " data-id="${gap.id}" style="font-size: 12px; padding: 2px 6px;">
                                         <i class="fas fa-edit"></i>
                                    </button>
                                    <button type="button" class="delete-confirm btn btn-outline-danger btn-sm" data-id="${gap.id}" style="font-size: 12px; padding: 2px 6px;">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            `;
                        });
                    } else {
                        tableRow += `
                            <td>please writing...</td>
                            <td>please writing...</td>
                            <td>please writing...</td>
                            <td class="text-center" style ="width:200px;">
                                <button class="btn btn-outline-primary btn-sm create-modal mr-1 " data-id="${item.id}" style="font-size: 12px; padding: 2px 6px;">
                                    Writing Now
                                </button>
                            </td>
                        `;
                    }

                    tableRow += `</tr>`;
                    tableBody += tableRow;
                });
            }

            const $table = $(`#${tableId}`);
            const $tbody = $table.find('tbody');
            $tbody.append(tableBody);
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    async upsertData(e) {
        e.preventDefault();
        let submitButton = $(e.target).find(':submit');

        try {
            const formData = new FormData(e.target);
            submitButton.attr('disabled', true);

            const responseData = await this.ajaxRequest(`${appUrl}/v1/gap/create`, 'POST', formData);
            console.log(responseData);

            if (responseData.code === 200) {
                successAlert().then(() => {
                    $('#gapModal').modal('hide');
                    realoadBrowser();
                });
            } else if (responseData.code === 422) {
                warningAlert();
            } else {
                errorAlert();
            }
        } catch (error) {
            console.error('Error:', error);
            errorAlert();
        } finally {
            submitButton.attr('disabled', false);
        }
    }

    async deleteData(id) {
        try {
            const result = await confirmDeleteAlert();
            if (result.isConfirmed) {
                const responseData = await this.ajaxRequest(`${appUrl}/v1/gap/delete/${id}`, 'DELETE');
                console.log(responseData);
                if (responseData.code === 200) {
                    await successAlert().then(() => {
                        realoadBrowser();
                    });
                } else {
                    errorAlert();
                }
            }
        } catch (error) {
            errorAlert();
        }
    }
}
export default gapService;
