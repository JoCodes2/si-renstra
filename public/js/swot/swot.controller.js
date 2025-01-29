import swotService from "./swot.service.js";

$(document).ready(function () {
    const swot = new swotService();

    // Memuat data berdasarkan kategori ke tabel masing-masing
    swot.getAllDataByCategory('strength', 'strengthTable');
    swot.getAllDataByCategory('weakness', 'weaknessesTable');
    swot.getAllDataByCategory('opportunity', 'opportunityTable');
    swot.getAllDataByCategory('threat', 'threatTable');

    // Validasi form input
    function validation() {
        $('#upsertData').validate({
            ignore: ':disabled',
            rules: {
                description: {
                    required: true,
                },
            },
            messages: {
                description: {
                    required: "Deskripsi tidak boleh kosong",
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
                error.addClass('text-danger text-sm');
                error.insertAfter(element);
            },
        });
    }

    validation();

    // Validasi saat input diubah
    $('#description').on('input', function () {
        $(this).valid();
    });

    // Tambahkan handler untuk membuka modal tambah/edit
    $('#swotModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget); // Tombol yang membuka modal
        const category = button.data('category'); // Ambil kategori dari tombol
        $('#category').val(category); // Isi otomatis field category
    });

    // Handler submit data
    $('#upsertData').on('submit', async function (e) {
        e.preventDefault();

        const formData = {
            id: $('#id').val(), // Jika ID ada, berarti edit mode
            category: $('#category').val(), // Kategori otomatis diisi
            description: $('#description').val(),
        };

        const isEditMode = !!$('#id').val();
        await swot.upsertData(formData, isEditMode);
    });

    // Handler untuk delete data
    $(document).on('click', '.delete-confirm', function () {
        const id = $(this).data('id');
        swot.deleteData(id);
    });

    // Reset modal setelah ditutup
    $('#swotModal').on('hidden.bs.modal', function () {
        $('#id').val('');
        $('#category').val('');
        $('#description').val('');
        $('.form-control').removeClass('is-invalid is-valid');
        $('.error').remove();
    });
});
