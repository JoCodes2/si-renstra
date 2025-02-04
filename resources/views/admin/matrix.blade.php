@extends('Layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="m-1 p-1">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold"><i class="fas fa-box pr-2"></i> TOWS</h3>
                </div>
                <h1 class="text-center fw-bold pb-2 bg-info text-white">TOWS INTRODUCTION</h1>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="m-1 p-1">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><b><span style="font-size: 1.5em;">Input</span></b></th>
                            <th scope="col">SWOT Matrix</th>

                        </tr>
                        <tr>
                            <th scope="col"><b><span style="font-size: 1.5em;">Definisi</span></b></th>
                            <th scope="col">TOWS Matrix adalah alat analisis strategi yang mirip dengan SWOT Matrix,
                                namun lebih
                                berfokus pada pencocokan antara ancaman, peluang, kelemahan, dan kekuatan untuk menghasilkan
                                strategi
                                alternatif.</th>

                        </tr>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">TOWS merupakan singkatan dari Threats, Opportunities, Weaknesses, Strengths.
                            </th>

                        </tr>
                        <tr>
                            <th scope="col"><b><span style="font-size: 1.5em;">Tujuan utama</span></b></th>
                            <th scope="col">Mengidentifikasi hubungan antara faktor eksternal (peluang dan ancaman) dan
                                faktor
                                internal (kekuatan dan kelemahan) guna menyusun strategi yang efektif.</th>

                        </tr>

                    </thead>

                </table>
                <br>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <table class="table table-bordered table-striped mx-auto" style="background-color: #dbdbdb;">
                            <thead>
                                <tr class="bg-secondary text-white">
                                    <th colspan="3" class="text-center"><b><span style="font-size: 1.8em;">Cara
                                                Pengisian</span></b></th>
                                </tr>
                                <tr class="bg-light">
                                    <th scope="col"></th>
                                    <th scope="col"><b><span style="font-size: 1.5em;">Strength</span></b></th>
                                    <th scope="col"><b><span style="font-size: 1.5em;">Weakness</span></b></th>
                                </tr>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Kekuatan Perusahaan</th>
                                    <th scope="col">Kelemahan Perusahaan</th>
                                </tr>
                                <tr class="bg-light">
                                    <th scope="col"><b><span style="font-size: 1.5em;">Opportunities</span></b></th>
                                    <th scope="col" class="text-danger"><b>SO Strategies</b></th>
                                    <th scope="col" class="text-danger"><b>WO Strategies</b></th>
                                </tr>
                                <tr>
                                    <th scope="col">Peluang Perusahaan</th>
                                    <th scope="col" style="background-color: rgb(255, 208, 182);">Memanfaatkan kekuatan
                                        internal
                                        perusahaan untuk mengambil peluang eksternal.</th>
                                    <th scope="col" style="background-color: rgb(168, 246, 203);">Menggunakan peluang
                                        eksternal
                                        untuk mengatasi kelemahan internal.</th>
                                </tr>
                                <tr class="bg-light">
                                    <th scope="col"><b><span style="font-size: 1.5em;">Threats</span></b></th>
                                    <th scope="col" class="text-danger"><b>ST Strategies</b></th>
                                    <th scope="col" class="text-danger"><b>WT Strategies</b></th>
                                </tr>
                                <tr>
                                    <th scope="col">Tantangan Perusahaan</th>
                                    <th scope="col" style="background-color: rgb(255, 208, 182);">Memanfaatkan kekuatan
                                        internal
                                        perusahaan untuk mengurangi dampak atau menghindari ancaman eksternal.</th>
                                    <th scope="col" style="background-color: rgb(168, 246, 203);">Mengembangkan strategi
                                        defensif
                                        untuk meminimalkan kelemahan internal dan menghindari ancaman eksternal.</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>


                <br><br><br>
                <table class="table 2">
                    <thead>

                        <tr>
                            <th scope="col"><b><span style="font-size: 1.5em;">Fokus</span></b></th>
                            <th scope="col">TOWS Matrix lebih berfokus pada tindakan dan rekomendasi strategis
                                berdasarkan pencocokan
                                faktor internal dan eksternal daripada hanya sekadar identifikasi faktor seperti pada SWOT.
                            </th>

                        </tr>
                        <tr>
                            <th scope="col"><b><span style="font-size: 1.5em;">Keunggulan</span></b></th>
                            <th scope="col">Membantu organisasi mengembangkan strategi yang lebih spesifik dan actionable
                                dengan
                                mempertimbangkan dinamika eksternal dan internal secara lebih mendetail.</th>

                        </tr>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Memungkinkan perencanaan strategi yang lebih proaktif dengan menghadapi
                                ancaman serta
                                memanfaatkan peluang secara optimal.</th>

                        </tr>
                        <tr>
                            <th scope="col"><b><span style="font-size: 1.5em;">Aplikasi</span></b></th>
                            <th scope="col">Dapat diterapkan di berbagai jenis organisasi, baik dalam sektor bisnis,
                                non-profit,
                                maupun pemerintahan, untuk meningkatkan efektivitas strategi dalam berbagai situasi pasar.
                            </th>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
<br><br><br><br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="m-1 p-1">
                <h1 class="text-center fw-bold pb-2 bg-info text-white">TOWNS MATRIX</h1>

                <div class="row justify-content-center">
                    <!-- First Row: SO and WO Strategies -->
                    <div class="col-md-6">
                        <div class="card" id="so-card">
                            <div class="card-header" style="background-color: #FBE2D5; color: rgb(0, 0, 0);"
                                class="d-flex justify-content-between align-items-center">
                                <span>SO Strategies</span>
                                <button class="btn btn-light btn-sm tambah" id="add-so">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="so-table"
                                style="background-color: #FBE2D5;">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Strength + Opportunities</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card" id="wo-card">
                            <div class="card-header" style="background-color: #C0F1C8; color:rgb(0, 0, 0);"
                                class="d-flex justify-content-between align-items-center">
                                <span>WO Strategies</span>
                                <button class="btn btn-light btn-sm tambah" id="add-wo">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="wo-table"
                                style="background-color: #C0F1C8;">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Weaknesses + Opportunities</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Second Row: ST and WT Strategies -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card" id="st-card">
                            <div class="card-header" style="background-color: #FBE2D5; color:rgb(0, 0, 0);"
                                class="d-flex justify-content-between align-items-center">
                                <span id="st-title">ST Strategies</span>
                                <button class="btn btn-light btn-sm tambah" id="add-st">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="st-table"
                                style="background-color: #FBE2D5;">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Strength + Threats</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card" id="wt-card">
                            <div class="card-header" style="background-color: #C0F1C8; color: rgb(0, 0, 0);"
                                class="d-flex justify-content-between align-items-center">
                                <span id="wt-title">WT Strategies</span>
                                <button class="btn btn-light btn-sm tambah" id="add-wt">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="wt-table"
                                style="background-color: #C0F1C8;">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Weaknesses + Threats</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Modal Form to Add SWOT Data -->
                <div class="modal fade" id="formDataModal" tabindex="-1" aria-labelledby="formDataModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="formDataModalLabel">Tambah Data SWOT</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="formData" method="POST">
                                    @csrf
                                    <input type="hidden" id="id" name="id">
                                    <input type="hidden" id="category" name="category">
                                    <div class="form-group">
                                        <label for="description">Deskripsi</label>
                                        <input type="text" class="form-control" id="description" name="description"
                                            placeholder="Masukkan deskripsi">
                                        <small id="description-error" class="text-danger"></small>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" id="simpanData" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            // CSRF Token setup for AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Function to get data for a specific SWOT category
            function getAllDataByCategory(category, tableId) {
                $.ajax({
                    url: 'v1/matrix/' + category,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        let tableBody = '';
                        $.each(response.data, function(index, item) {
                            tableBody += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.description}</td>
                        <td>
                            <button class="btn btn-outline-primary btn-sm edit-btn"  data-id="${item.id}" >
                                <i class="fa fa-pencil-alt"></i>
                            </button>
                            <button class="btn btn-outline-danger btn-sm delete-confirm"  data-id="${item.id}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>`;
                        });
                        $(`#${tableId} tbody`).html(tableBody);
                    },
                    error: function() {
                        errorAlert('Gagal mengambil data dari server');
                    }
                });
            }

            // Load data for each category
            getAllDataByCategory('so', 'so-table');
            getAllDataByCategory('wo', 'wo-table');
            getAllDataByCategory('st', 'st-table');
            getAllDataByCategory('wt', 'wt-table');

            // Show modal when adding a new SWOT item
            $('#add-so, #add-wo, #add-st, #add-wt').click(function() {
                let category = $(this).attr('id').split('-')[1];
                $('#formDataModalLabel').text('Tambah ' + category.charAt(0).toUpperCase() + category.slice(
                    1));
                $('#category').val(category);
                $('#description').val('');
                $('#simpanData').show();
                $('.text-danger').text('');
                $('#id').val('');
                $('#formDataModal').modal('show');
            });


            // Save new SWOT data
            $('#simpanData').click(function(e) {
                e.preventDefault();
                let id = $('#id').val();

                let formData = new FormData($('#formData')[0]);

                let url = id ? `/v1/matrix/update/${id}` : '/v1/matrix/create';

                let method = 'POST';

                Swal.fire({
                    title: 'Loading...',
                    text: 'Please wait...',
                    allowOutsideClick: false,
                    didOpen: () => Swal.showLoading()
                });
                $.ajax({
                    type: method,
                    url: url,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);

                        Swal.close();
                        if (response.code === 422) {
                            let errors = response.errors;
                            $.each(errors, function(key, value) {
                                $('#' + key + '-error').text(value[0]);
                            });
                        } else if (response.code === 200) {
                            successAlert();
                            $('#formDataModal').modal(
                                'hide');
                            window.location.reload();
                        } else {
                            errorAlert();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        Swal.close();
                    }
                });

            });

            // 📝 EDIT DATA SWOT
            $(document).on('click', '.edit-btn', function() {
                let id = $(this).data('id');
                $.ajax({
                    url: `/v1/matrix/get/${id}`,
                    method: "GET",
                    dataType: "json",
                    success: function(response) {
                        $('#id').val(id);
                        $('#category').val(response.data.category);
                        $('#description').val(response.data.description);
                        $('#formDataModal').modal('show');
                        $('.text-danger').text('');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data for edit:', error);
                    }
                });

            });

            // 🗑️ DELETE DATA SWOT
            $(document).on('click', '.delete-confirm', function() {
                let id = $(this).data('id');
                let category = $(this).data('category');

                Swal.fire({
                    title: '<span style="font-size: 22px"> Konfirmasi</span>',
                    text: "Apakah anda yakin?",
                    showCancelButton: true,
                    showConfirmButton: true,
                    cancelButtonText: 'Tidak',
                    confirmButtonText: 'Ya',
                    reverseButtons: true,
                    confirmButtonColor: '#48ABF7',
                    cancelButtonColor: '#EFEFEF',
                    customClass: {
                        cancelButton: 'text-dark'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'DELETE',
                            url: `/v1/matrix/delete/${id}`,
                            success: function(response) {
                                if (response.code === 200) {
                                    successAlert('Data berhasil dihapus!');
                                    window.location.reload();
                                } else {
                                    errorAlert('Gagal menghapus data!');
                                }
                            },
                            error: function() {
                                errorAlert('Terjadi kesalahan saat menghapus data!');
                            }
                        });
                    }
                });
            });






            // SUCCESS & ERROR ALERT FUNCTIONS
            function successAlert(message) {
                Swal.fire({
                    title: 'Berhasil!',
                    text: message,
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                });
            }

            function errorAlert(message) {
                Swal.fire({
                    title: 'Error',
                    text: message || 'Terjadi kesalahan!',
                    icon: 'error',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
        });
    </script>
@endsection
