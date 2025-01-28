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
                    let tableRow = `<tr class="text-center">`;
                    tableRow += `<td>${item.description}</td>`;

                    const gapData = responseGap.data.filter(gapItem => gapItem.id_swot === item.id);
                    if (gapData.length > 0) {
                        gapData.forEach((gap) => {
                            tableRow += `
                                <td>${gap.current_state}</td>
                                <td>${gap.gap}</td>
                                <td>${gap.planing}</td>
                            `;
                        });
                    } else {
                        tableRow += `
                            <td colspan="3">No gap data available</td>
                            <td class="text-center">
                                <button class="btn btn-outline-primary btn-sm edit-modal mr-1" data-id="${item.id}" style="font-size: 12px; padding: 2px 6px;">
                                    Jawab
                                </button>
                                <button type="button" class="delete-confirm btn btn-outline-danger btn-sm" data-id="${item.id}" style="font-size: 12px; padding: 2px 6px;">
                                    <i class="fas fa-trash-alt"></i>
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
}
export default gapService;
