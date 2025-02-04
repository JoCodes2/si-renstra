import activityService from "./activity.service.js";


$(document).ready(function () {
    const activity = new activityService();
    activity.getAllData('partnership', 'activityCompany').then(() =>
        activity.getAllData('internal', 'activityCompany'),
    ).then(() =>
        activity.getAllData('economic-empowerment', 'activityCompany')
    ).catch(error => console.error("Error loading data:", error));

    // validate
    function validation() {
        $('#upsertData').validate({
            rules: {
                id_company_profile: {
                    required: true,
                },
                activity_name: {
                    required: true,
                },
                supervisor_name: {
                    required: true,
                },
                devisi: {
                    required: true,
                },
                pic: {
                    required: true,
                },
                deadline: {
                    required: true,
                },
                category_activity: {
                    required: true,
                },
            },
            messages: {
                id_company_profile: {
                    required: "Form tidak boleh kosong",
                },
                activity_name: {
                    required: "Form tidak boleh kosong",
                },
                supervisor_name: {
                    required: "Form tidak boleh kosong",
                },
                devisi: {
                    required: "Form tidak boleh kosong",
                },
                pic: {
                    required: "Form tidak boleh kosong",
                },
                deadline: {
                    required: "Form tidak boleh kosong",
                },
                category_activity: {
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
    $('#id_company_profile, #devisi, #activity_name, #supervisor_name, #pic, #deadline, #category_activity').on('input', function () {
        $(this).valid();
    });
    function calculateAchievement() {
        let target = parseFloat($("#target").val()) || 0;
        let realization = parseFloat($("#realization").val()) || 0;

        if (target > 0) {
            let achievement = (realization / target) * 100;
            $("#hidden_achievement").val(achievement);
            $("#achievement").val(achievement.toFixed(0) + "%");
        } else {
            $("#hidden_achievement").val();
        }
    }

    $("#target, #realization").on("input", function () {
        calculateAchievement();
    });
    $("#target, #realization").on('keypress', function (event) {
        let charCode = event.which ? event.which : event.keyCode;
        if (charCode < 48 || charCode > 57) {
            event.preventDefault();
        }
    });

    calculateAchievement();
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
                const initialContent = $('#description').val().trim();
                $('#summernote').summernote('code', initialContent);
            },
            onChange: function (contents) {
                $('#description').val(contents);
            }
        }
    });
    $('#upsertData').on('submit', async function (e) {
        e.preventDefault();
        const isEditMode = () => !!$('#id').val();
        await activity.upsertData(e, isEditMode);
    });
    function checkingEdit() {
        return $('#id').val() ? true : false;
    }

    $(document).on('click', '.edit-modal', function () {
        const id = $(this).data('id');
        activity.getDataById(id, checkingEdit);
    });
    $(document).on('click', '.delete-confirm', function () {
        const id = $(this).data('id');
        console.log(id);

        activity.deleteData(id);
    });
    // Event handler untuk tombol "Completed"
    $(document).on('click', '.btn-completed', function () {
        const id = $(this).data('id');
        activity.updateActivityStatus(id, 'completed');
    });

    // Event handler untuk tombol "On Progress"
    $(document).on('click', '.btn-on-progress', function () {
        const id = $(this).data('id');
        activity.updateActivityStatus(id, 'on-progress');
    });


    $(document).on('click', '#createActivity', function () {
        $('#activityModal').modal('show');

        $('#id').val('');
        $('#id_company_profile').val('').trigger('change');
        $('#category_activity').val('').trigger('change');
        $('#activity_name').val('');
        $('#supervisor_name').val('');
        $('#devisi').val('');
        $('#pic').val('');
        $('#target').val('');
        $('#realization').val('');
        $('#hidden_achievement').val('');
        $('#achievement').val('');
        $('#deadline').val('');
        $('#description').val('');

        // Reset Summernote
        $('#summernote').summernote('reset');

        // Bersihkan validasi sebelumnya
        $('.form-control').removeClass('is-invalid').removeClass('is-valid');
        $('.error').remove();
    });

});

