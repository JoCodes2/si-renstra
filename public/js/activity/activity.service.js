class activityService {
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
    async getAllData(category_activity, tableId) {
        try {
            const responseMisi = await this.ajaxRequest(`${appUrl}/v1/company-profile/mision`, 'GET');
            const mision = responseMisi.data;
            this.misionDropdown(mision);

            const responseData = await this.ajaxRequest(`${appUrl}/v1/activity/${category_activity}`, 'GET');


            let tableBody = '';

            if (responseData.code === 200 && responseData.data.length > 0) {
                let categoryText;
                switch (category_activity) {
                    case 'internal':
                        categoryText = 'Internal';
                        break;
                    case 'economic-empowerment':
                        categoryText = 'Pemberdayaan & Perekonomian';
                        break;
                    case 'partnership':
                        categoryText = 'Program Dan Kemitraan';
                        break;
                    default:
                        categoryText = 'Not Found';
                }

                tableBody += `<tr><th colspan="15" style="text-align: center; background-color: black; color: white; height: 40px;">${categoryText}</th></tr>`;

                responseData.data.forEach((item, index) => {
                    const misi = item.company_profile?.category === "mision" ? item.company_profile.answer : "Tidak ada misi";
                    const achievement = parseFloat(item.achievement);
                    const achievementFormat = isNaN(achievement) ? 0 : achievement.toFixed(0);

                    // Menghitung selisih hari dari deadline
                    const deadlineDate = new Date(item.deadline);
                    const today = new Date();
                    const timeDiff = Math.ceil((deadlineDate - today) / (1000 * 60 * 60 * 24));
                    const deadlineClass = "color: black; font-weight: bold;background-color: orange";

                    const formattedDeadline = deadlineDate.toLocaleDateString('id-ID', { day: '2-digit', month: '2-digit', year: 'numeric' });

                    let statusText, statusStyle;
                    switch (item.status_activity) {
                        case 'on-progress':
                            statusText = 'In Progress';
                            statusStyle = 'btn btn-sm btn-warning';
                            break;
                        case 'not-completed':
                            statusText = 'Not Completed';
                            statusStyle = 'btn btn-sm btn-danger';
                            break;
                        case 'completed':
                            statusText = 'Completed';
                            statusStyle = 'btn btn-sm btn-success';
                            break;
                        default:
                            statusText = 'Unknown';
                            statusStyle = 'btn btn-sm btn-secondary';
                    }

                    let tableRow = `
                <tr>
                    <td class="text-center">${index + 1}</td>
                    <td>${misi}</td>
                    <td>${item.activity_name}</td>
                    <td class="text-center">${item.supervisor_name}</td>
                    <td>${item.devisi}</td>
                    <td>${item.pic}</td>
                    <td class="text-center">${item.target}</td>
                    <td class="text-center">${item.realization}</td>
                    <td class="text-center">${achievementFormat}%</td>
                    <td class="text-center">${formattedDeadline}</td>
                    <td class="text-center" style="${deadlineClass}">${timeDiff}</td>
                    <td class="text-center">
                        <span class="${statusStyle}" style="pointer-events: none;">${statusText}</span>
                    </td>
                    <td>${item.description}</td>
                    <td class="text-center">
                        <button class="btn btn-outline-success btn-xs btn-completed" data-id="${item.id}" >
                            <i class="fas fa-check"></i>
                        </button>
                        <button type="button" class="btn-on-progress btn btn-outline-warning btn-xs" data-id="${item.id}" >
                          <i class="fas fa-play-circle"></i>
                        </button>
                    </td>
                    <td class="text-center">
                        <button class="btn btn-outline-primary btn-xs edit-modal" data-id="${item.id}" >
                            <i class="fas fa-edit"></i>
                        </button>
                        <button type="button" class="delete-confirm btn btn-outline-danger btn-xs" data-id="${item.id}" >
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                `;

                    tableBody += tableRow;
                });
            } else {
                console.warn(`No data found for ${category_activity}`);
            }

            const $table = $(`#${tableId}`);
            const $tbody = $table.find('tbody');
            $tbody.append(tableBody);

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
                const responseData = await this.ajaxRequest(`${appUrl}/v1/activity/update/${id}`, 'POST', formData);

                if (responseData.code === 200) {
                    successAlert().then(() => {
                        realoadBrowser();
                        $('#activityModal').modal('hide');
                    });
                } else if (responseData.code === 422) {
                    warningAlert();
                } else {
                    errorAlert();
                }
            } else {
                submitButton.attr('disabled', true);
                const responseData = await this.ajaxRequest(`${appUrl}/v1/activity/create`, 'POST', formData);
                console.log(responseData);

                if (responseData.code === 200) {
                    successAlert().then(() => {
                        realoadBrowser();
                        $('#activityModal').modal('hide');
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

    misionDropdown(mision) {
        const categorySelect = $('#id_company_profile');
        categorySelect.empty();
        categorySelect.append('<option value="" selected disabled hidden>- Pilih -</option>');

        $.each(mision, function (index, item) {
            categorySelect.append(`<option value="${item.id}">${item.answer}</option>`);
        });
    }

    async getDataById(id, checkingEdit) {
        try {
            const responseData = await this.ajaxRequest(`${appUrl}/v1/activity/get/${id}`, 'GET');
            console.log(responseData);
            const achievement = parseFloat(responseData.data.achievement);

            const achievementFormat = isNaN(achievement) ? 0 : achievement.toFixed(0);
            // Isi data ke dalam modal form
            $('#id').val(responseData.data.id);
            $('#id_company_profile').val(responseData.data.id_company_profile);
            $('#category_activity').val(responseData.data.category_activity);
            $('#activity_name').val(responseData.data.activity_name);
            $('#supervisor_name').val(responseData.data.supervisor_name);
            $('#devisi').val(responseData.data.devisi);
            $('#pic').val(responseData.data.pic);
            $('#target').val(responseData.data.target);
            $('#realization').val(responseData.data.realization);
            $('#hidden_achievement').val(responseData.data.achievement);
            $('#achievement').val(achievementFormat + '%');
            $('#deadline').val(responseData.data.deadline);

            // Isi Summernote
            $('#description').val(responseData.data.description);
            $('#summernote').summernote('code', responseData.data.description);

            $('#upsertData').validate().resetForm();

            $('#activityModal').modal('show');

            checkingEdit();
        } catch (error) {
            console.log(error);
        }
    }

    async ajaxRequestStatus(url, method, data = null) {
        return $.ajax({
            url: url,
            type: method,
            data: data ? JSON.stringify(data) : null,
            contentType: 'application/json',
            dataType: 'json'
        });
    }

    async updateActivityStatus(id, status_activity) {
        try {
            const result = await confirmDeleteAlert();
            if (result.isConfirmed) {
                const responseData = await this.ajaxRequestStatus(`${appUrl}/v1/activity/change-status/${id}`, 'POST', {
                    status_activity: status_activity
                });

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
            console.error("Error updating status:", error);
            errorAlert();
        }
    }

    async deleteData(id) {
        try {
            const result = await confirmDeleteAlert();
            if (result.isConfirmed) {
                const responseData = await this.ajaxRequest(`${appUrl}/v1/activity/delete/${id}`, 'DELETE');
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

export default activityService;
