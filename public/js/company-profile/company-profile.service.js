class companyProfileService {
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
            const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/${category}`, 'GET');
            console.log(responseData);

            let tableBody = '';

            if (responseData.code === 200 && responseData.data.length > 0) {
                responseData.data.forEach((item) => {
                    const answerText = item.answer ? item.answer : 'Berikan jawaban Anda...';
                    tableBody += `
                <tr data-id="${item.id}">
                    <td>${item.question}</td>
                    <td>${answerText}</td>
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
                <td colspan="3" class="text-center">Tidak ada data tersedia.</td>
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

            if (checkingEdit()) {
                const id = $('#id').val();
                const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/update/${id}`, 'POST', formData);

                if (responseData.code === 200) {
                    successAlert().then(() => {
                        realoadBrowser();
                        $('#companyProfileModal').modal('hide');
                    });
                } else if (responseData.code === 422) {
                    warningAlert();
                } else {
                    errorAlert();
                }
            } else {
                submitButton.attr('disabled', true);
                const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/create`, 'POST', formData);
                console.log(responseData);

                if (responseData.code === 200) {
                    successAlert().then(() => {
                        realoadBrowser();
                        $('#companyProfileModal').modal('hide');
                    });
                } else if (responseData.code === 422) {
                    warningAlert();
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

    async getDataById(id, checkingEdit) {
        try {
            const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/get/${id}`, 'GET');
            $('#id').val(responseData.data.id);
            $('#category').val(responseData.data.category);
            $('#question').val(responseData.data.question);
            $('#questionShow').val(responseData.data.question);
            $('#answer').val(responseData.data.answer || '').prop('disabled', false);

            $('#upsertData').validate().resetForm();
            $('#questionForm').hide(true);
            $('#questionText').show(true);
            $('#companyProfileModal').modal('show');
            checkingEdit();
        } catch (error) {
            console.log(error);
        }
    }



    async deleteData(id) {
        try {
            const result = await confirmDeleteAlert();
            if (result.isConfirmed) {
                const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/delete/${id}`, 'DELETE');
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

    async createResult(e) {
        let submitButton = $(e.target).find(':submit');
        try {
            const formData = new FormData(e.target);


            submitButton.attr('disabled', true);
            const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/result`, 'POST', formData);
            console.log(responseData);

            if (responseData.code === 200) {
                successAlert().then(() => {
                    realoadBrowser();
                    $('#resultModal').modal('hide');
                });
            } else if (responseData.code === 422) {
                warningAlert();
            } else {
                errorAlert();
            }
            submitButton.attr('disabled', false);

        } catch (error) {
            submitButton.attr('disabled', false);
            console.error('Error:', error);
            errorAlert();
        }
    }

    async getBrainstormingResult(category, targetElement, buttonId) {
        try {
            const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/result/${category}`, "GET");
            console.log(responseData);

            if (responseData.code === 200 && responseData.data.length > 0) {
                let description = responseData.data[0].description;
                let id = responseData.data[0].id; // Ambil ID dari API

                // Masukkan data ke dalam tabel
                $(`#${targetElement}`).html(description);

                // Masukkan ID ke dalam tombol delete yang sudah ada
                $(`.delete-result-btn[data-category="${category}"]`).data("id", id);

                // ✅ Jika sudah ada data, disable tombol "Tulis Hasil"
                $(`#${buttonId}`).prop("disabled", true);
            } else {
                $(`#${targetElement}`).html('<p class="text-center">Tidak ada hasil tersedia.</p>');

                // Kosongkan data-id tombol delete
                $(`.delete-result-btn[data-category="${category}"]`).removeData("id");

                // ✅ Jika tidak ada data, enable tombol "Tulis Hasil"
                $(`#${buttonId}`).prop("disabled", false);
            }
        } catch (error) {
            console.error("Error fetching brainstorming result:", error);
            $(`#${targetElement}`).html('<p class="text-center text-danger">Gagal mengambil data.</p>');
        }
    }


    async deleteDataResult(id) {
        try {
            const result = await confirmDeleteAlert();
            if (result.isConfirmed) {
                const responseData = await this.ajaxRequest(`${appUrl}/v1/company-profile/delete/result/${id}`, 'DELETE');
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

export default companyProfileService;
