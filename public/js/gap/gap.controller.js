import gapService from "./gap.service.js";

$(document).ready(function () {
    const gap = new gapService();

    gap.getAllData('strenght', 'gapTable').then(() =>
        gap.getAllData('weakness', 'gapTable')
    ).then(() =>
        gap.getAllData('opportinity', 'gapTable')
    ).then(() =>
        gap.getAllData('threat', 'gapTable')
    ).catch(error => console.error("Error loading data:", error));


    // Validasi input
    function validation() {
        $('#upsertData').validate({
            ignore: ':disabled',  // Abaikan elemen yang disabled
            rules: {
                current_state: {
                    required: true,
                }
            },
            messages: {
                current_state: {
                    required: "Form tidak boleh kosong",
                },
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

    $(document).on('click', '.create-modal', function () {
        let idSwot = $(this).data('id');
        $('#gapModal').modal('show');
        $('#id').val('');
        $('#id_swot').val(idSwot);
        $('#current_state').val('');
        $('#gap').val('');
        $('#hidden_gap').val('');
        $('#planing').val('');
        $('#gap').prop('disabled', true);
        $('.form-control').removeClass('is-invalid').removeClass('is-valid');
        $('.error').remove();
    });


    $('#current_state').on('keypress', function (event) {
        let charCode = event.which ? event.which : event.keyCode;
        if (charCode < 48 || charCode > 57) {
            event.preventDefault();
        }
    });

    $('#current_state').on('input', function () {
        let currentState = $(this).val();
        currentState = currentState.replace(/[^0-9]/g, '');

        if (!isNaN(currentState) && currentState >= 1 && currentState <= 100) {
            let gapValue = (100 - currentState).toFixed(0);
            $('#gap').val(gapValue);
            $('#hidden_gap').val(gapValue);
            $('#gap').prop('disabled', true);
        } else {
            $('#gap').val('');
            $('#hidden_gap').val('');
            $('#gap').prop('disabled', true);
        }

        $(this).valid();
    });

    $('#summernote').summernote({
        tabsize: 2,
        height: 180,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ],
        callbacks: {
            onInit: function () {
                const initialContent = $('#planing').val().trim();
                $('#summernote').summernote('code', initialContent);
            },
            onChange: function (contents) {
                $('#planing').val(contents);
            }
        }
    });

    $('#upsertData').on('submit', async function (e) {
        e.preventDefault();
        const isEditMode = () => !!$('#id').val();
        await gap.upsertData(e, isEditMode);
    });
    function checkingEdit() {
        return $('#id').val() ? true : false;
    }

    $(document).on('click', '.edit-modal', function () {
        const id = $(this).data('id');
        gap.getDataById(id, checkingEdit);
    });

    $(document).on('click', '.delete-confirm', function () {
        const id = $(this).data('id');
        gap.deleteData(id);
    })
});
