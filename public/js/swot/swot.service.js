class swotService {
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

    async getAllDataByCategory(category, targetTable) {
        try {
            const responseData = await this.ajaxRequest(`${appUrl}/v1/swot/${category}`, 'GET');
            console.log(responseData);

            let tableBody = '';

            if (responseData.code === 200 && responseData.data.length > 0) {
                responseData.data.forEach((item, index) => {
                    tableBody += `
                <tr data-id="${item.id}">
                    <td>${index + 1}</td>
                    <td>${item.description}</td>
                    <td class="text-center">
                        <button class="btn btn-outline-primary btn-sm edit-modal mr-1" data-id="${item.id}" style="font-size: 12px; padding: 2px 6px;">
                            Jawab
                        </button>
                        <button type="button" class="delete-confirm btn btn-outline-danger btn-sm" data-id="${item.id}" style="font-size: 12px; padding: 2px 6px;">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>`;
                });
            } else {
                tableBody = `
            <tr>
                <td colspan="3" class="text-center">No Data Found!</td>
            </tr>`;
            }

            const $table = $(`#${targetTable}`);
            const $tableBody = $table.find('tbody');

            $tableBody.html(tableBody);
        } catch (error) {
            console.error("Error fetching data:", error);
        }
    }

    async upsertData(e, checkingEdit) {
        let submitButton = $(e.target).find(':submit');
        try {
            const formData = new FormData(e.target);

            // Validasi manual untuk memastikan field `category` ada
            if (!formData.has('category') || !formData.get('category')) {
                warningAlert('Category is required!');
                return;
            }

            if (checkingEdit()) {
                const id = $('#id').val();
                const responseData = await this.ajaxRequest(`${appUrl}/v1/swot/update/${id}`, 'POST', formData);

                if (responseData.code === 200) {
                    successAlert().then(() => {
                        realoadBrowser();
                        $('#swotModal').modal('hide');
                    });
                } else if (responseData.code === 422) {
                    warningAlert('Validation error: Please check your inputs.');
                } else {
                    errorAlert();
                }
            } else {
                submitButton.attr('disabled', true);
                const responseData = await this.ajaxRequest(`${appUrl}/v1/swot/create`, 'POST', formData);
                console.log(responseData);

                if (responseData.code === 200) {
                    successAlert().then(() => {
                        realoadBrowser();
                        $('#swotModal').modal('hide');
                    });
                } else if (responseData.code === 422) {
                    warningAlert('Validation error: Please check your inputs.');
                } else {
                    errorAlert();
                }
                submitButton.attr('disabled', false);
            }
        } catch (error) {
            submitButton.attr('disabled', false);
            console.error('Error:', error);
            errorAlert();
        }
    }
}

export default swotService;
