@extends('Layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="m-1 p-1">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold"><i class="fas fa-box pr-2"></i> SWOT Analysis</h3>
                </div>
                <h1 class="text-center fw-bold pb-2 bg-info text-white">VISI ORGANISASI</h1>

                <table class="table d-flex justify-content-center align-items-center px-5">
                    <tbody>
                        <tr>
                            <th scope="row" style="background-color: #a2c7ff; width: 120px;color: #0D7FD3"
                                class="text-center">What</th>
                            <td class="text-center">Kerangka ini membantu dalam menulis tujuan yang lebih berdampak,
                                sekaligus memudahkan dalam melacak perkembangan dari titik awal hingga tujuan yang ingin
                                dicapai.</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 120px; background-color: #FBE2D5;color: #0D7FD3"
                                class="text-center">How</th>
                            <td class="text-center">(1)Pahami Bisnis -> (2)Assessment Kondisi Internal dan Eksternal ->
                                (3)Identifikasi Kelemahan -> (4)Susun Rencana Perbaikan -> (5)Perinci Rencana Perbaikan
                                dengan konsep SMART -> Selesai.</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 120px; background-color: #C0F1C8;color: #0D7FD3"
                                class="text-center">Why</th>
                            <td class="text-center">Memudahkan memastikan proyek berjalan dan mempertahankan fokus
                                perusahaan.</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Display SWOT tables (Strength, Weakness, Opportunity, Threat) in two rows -->
                <div class="row">
                    <!-- Strength -->
                    <div class="col-md-4">
                        <!-- Menambahkan gambar di atas card -->
                        <div class="text-center mb-3">
                            <img src="../assets/img/kacamata.png" alt="specific Image" class="img-fluid"
                                style="max-height: 200px; object-fit: cover;">
                        </div>

                        <div class="card" id="specific-card">
                            <div
                                class="card-header fw-bold pb-2 bg-info text-dark d-flex justify-content-between align-items-center">
                                <span>SPECIFIC</span>
                                <button class="btn btn-light btn-sm tambah" id="add-specific">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="specific-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Apa keunggulan bisnis dibandingkan kompetitor lain? Aspek apa
                                            yang paling dihargai oleh pelanggan tentang merk?</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>


                    <!-- Weakness -->
                    <div class="col-md-4">
                        <div class="text-center mb-3">
                            <img src="../assets/img/kalkulator.png" alt="measurable Image" class="img-fluid"
                                style="max-height: 200px; object-fit: cover;">
                        </div>
                        <div class="card" id="measurable-card">
                            <div
                                class="card-header fw-bold pb-2 bg-info text-dark d-flex justify-content-between align-items-center">
                                <span>MEASUREABLE</span>
                                <button class="btn btn-light btn-sm tambah" id="add-measurable">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="measurable-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Bagian apa yang bisa ditingkatkan? Hambatan apa yang menghalangi
                                            untuk mencapai tujuan?</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Opportunity -->
                    <div class="col-md-4">
                        <div class="text-center mb-3">
                            <img src="../assets/img/love.png" alt="achievable Image" class="img-fluid"
                                style="max-height: 200px; object-fit: cover;">
                        </div>
                        <div class="card" id="achievable-card">
                            <div
                                class="card-header fw-bold pb-2 bg-info text-dark d-flex justify-content-between align-items-center">
                                <span>ACHIEVABLE</span>
                                <button class="btn btn-light btn-sm tambah" id="add-achievable">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="achievable-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Faktor-faktor eksternal yang berpotensi memberikan keunggulan
                                            kompetitif bagi perusahaan.</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Threat -->
                    <div class="col-md-6">
                        <div class="text-center mb-3">
                            <img src="../assets/img/circle.png" alt="relevant Image" class="img-fluid"
                                style="max-height: 200px; object-fit: cover;">
                        </div>
                        <div class="card" id="relevant-card">
                            <div
                                class="card-header fw-bold pb-2 bg-info text-dark d-flex justify-content-between align-items-center">
                                <span>RELEVANT</span>
                                <button class="btn btn-light btn-sm tambah" id="add-relevant">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="relevant-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Kekhawatiran apa yang dimiliki perusahaan saat ini? Apakah ada
                                            tantangan yang dapat berisiko membahayakan rencana?</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Extra Table - Positioned in Center -->
                    <div class="col-md-6">
                        <div class="text-center mb-3">
                            <img src="../assets/img/jam.png" alt="time-bound Image" class="img-fluid"
                                style="max-height: 200px; object-fit: cover;">
                        </div>
                        <div class="card text-center" id="time-bound-card">
                            <div
                                class="card-header fw-bold pb-2 bg-info text-dark d-flex justify-content-between align-items-center">
                                <span>TIME BOUND</span>
                                <button class="btn btn-light btn-sm tambah" id="add-time-bound">+</button>
                            </div>
                            <table class="table table-boundered text-center" id="time-bound-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Tambahan faktor lain yang bisa mempengaruhi strategi perusahaan.
                                        </th>
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
                                <h5 class="modal-title" id="formDataModalLabel">Tambah Data Smart</h5>
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
                    url: 'v1/smart/' + category,
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);

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
            getAllDataByCategory('specific', 'specific-table');
            getAllDataByCategory('measurable', 'measurable-table');
            getAllDataByCategory('achievable', 'achievable-table');
            getAllDataByCategory('relevant', 'relevant-table');
            getAllDataByCategory('time-bound', 'time-bound-table');


            // Show modal when adding a new SWOT item
            $('#add-specific, #add-measurable, #add-achievable, #add-relevant, #add-time-bound').click(function() {
                let category = $(this).attr('id').split('-').slice(1).join('-');
                $('#formDataModalLabel').text('Tambah ' + category.charAt(0).toUpperCase() + category.slice(
                    1));
                $('#category').val(category);
                console.log(category); // Sekarang akan tampil "time-bound"

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

                let url = id ? `/v1/smart/update/${id}` : '/v1/smart/create';

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
                    url: `/v1/smart/get/${id}`,
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
                            url: `/v1/smart/delete/${id}`,
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
