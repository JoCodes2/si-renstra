import companyProfileService from "./company-profile.service.js";
$(document).ready(function () {
    const companyProfile = new companyProfileService();
    companyProfile.getAllDataByCategory('vision', 'visionCompany');
    companyProfile.getAllDataByCategory('mision', 'misionCompany');

    // Validasi input
    function validation() {
        $('#upsertData').validate({
            ignore: ':disabled',  // Abaikan elemen yang disabled
            rules: {
                question: {
                    required: function () {
                        // Validasi hanya berlaku jika form dalam mode create (tidak ada ID)
                        return !$('#id').val();
                    },
                },
                answer: {
                    required: true,
                }
            },
            messages: {
                question: {
                    required: "Form tidak boleh kosong",
                },
                answer: {
                    required: "Form tidak boleh kosong",
                }
            },
            highlight: function (element) {
                $(element).closest('.form-control').removeClass('is-valid').addClass('is-invalid');
            },
            success: function (label, element) {
                $(label).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
                $(element).removeClass('is-invalid').addClass('is-valid');
            },
            errorPlacement: function (error, element) {
                error.addClass('text-danger');
                error.addClass('text-sm');
                error.insertAfter(element);
            }
        });
    }

    validation();

    $('#question, #answer').on('input', function () {
        $(this).valid();
    });

    // Handler event form
    $(document).on('click', 'button[data-target="#companyProfileModal"]', function () {
        const buttonId = $(this).attr('id');
        const modal = $('#companyProfileModal');

        modal.find('form')[0].reset();
        $('#category').val(buttonId);
        if (buttonId === 'vision') {
            $('#answer').closest('.form-group').hide();
            $('#questionText').closest('.form-group').hide();
            $('#question').closest('.form-group').show();
        } else if (buttonId === 'mision') {
            $('#answer').closest('.form-group').hide();
            $('#questionText').closest('.form-group').hide();
            $('#question').closest('.form-group').show();
        }
        $('#modal-title').text(`Buat Pertanyaan ${buttonId === 'vision' ? 'Visi' : 'Misi'}`);
    });

    // Handler submit data
    $('#upsertData').on('submit', async function (e) {
        e.preventDefault();
        const isEditMode = () => !!$('#id').val();
        await companyProfile.upsertData(e, isEditMode);
    });

    $(document).on('click', '.delete-confirm', function () {
        const id = $(this).data('id');
        companyProfile.deleteData(id);
    });

    // Cek apakah ini edit mode atau tidak
    function checkingEdit() {
        return $('#id').val() ? true : false;
    }

    $(document).on('click', '.edit-modal', function () {
        const id = $(this).data('id');
        companyProfile.getDataById(id, checkingEdit);
    });

    // resetModal
    $('#companyProfileModal').on('hidden.bs.modal', function () {
        $('#id').val('');
        $('#category').val('');
        $('#question').val('');
        $('#answer').val('');
        $('.form-control').removeClass('is-invalid').removeClass('is-valid');
        $('.error').remove();
    });
});
