@extends('Layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="m-1 p-1">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold"><i class="fas fa-box pr-2"></i> SWOT Analysis</h3>
                </div>

                <table class="table d-flex justify-content-center align-items-center px-5">
                    <tbody>
                        <tr>
                            <th scope="row" style="background-color: #a2c7ff; width: 120px;color: #0D7FD3"
                                class="justify-content-center text-center">What</th>
                            <td class="text-center">Alat perencanaan strategis yang membantu bisnis mengidentifikasi
                                kekuatan dan
                                kelemahan
                                internal, serta peluang dan ancaman eksternal yang dapat memengaruhi inisiatif pertumbuhan
                                dan pencapaian tujuannya.</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 120px; background-color: #FBE2D5;color: #0D7FD3"
                                class="justify-content-center text-center">How</th>
                            <td class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nulla
                                tempora
                                autem? Aliquam odit
                                nihil facilis eligendi,
                                doloremque magni ut reprehenderit libero maxime molestiae, delectus, deserunt quis aperiam
                                veniam non!</td>
                        </tr>
                        <tr>
                            <th scope="row" style="width: 120px; background-color: #C0F1C8;color: #0D7FD3"
                                class="justify-content-center text-center">Why</th>
                            <td class="text-center"> Memberikan pandangan seimbang tentang kondisi internal organisasi
                                dengan
                                lingkungan bisnis
                                beroperasi</td>
                        </tr>
                    </tbody>
                </table>

                <!-- Display SWOT tables (Strength, Weakness, Opportunity, Threat) -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" id="strenght-card">
                            <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
                                <span>Strength</span>
                                <button class="btn btn-light btn-sm tambah" id="add-strenght">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="strenght-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Apa keunggulan bisnis dibandingkan kompetitor lain? Aspek apa
                                            yang
                                            paling
                                            dihargai oleh
                                            pelanggan tentang merk?</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card" id="weakness-card">
                            <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
                                <span>Weakness</span>
                                <button class="btn btn-light btn-sm tambah" id="add-weakness">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="weakness-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Bagian apa yang bisa ditingkatkan? Hambatan apa yang menghalangi
                                            untuk
                                            mencapai tujuan?
                                        </th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <!-- Opportunity -->
                    <div class="col-md-6">
                        <div class="card" id="opportinity-card">
                            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center"
                                id="opportinity-header">
                                <span id="opportinity-title">opportinity</span>
                                <button class="btn btn-light btn-sm tambah" id="add-opportinity">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="opportinity-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Faktor-faktor eksternal yang berpotensi memberikan keunggulan
                                            kompetitif
                                            bagi
                                            perusahaan.</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Threat -->
                    <div class="col-md-6">
                        <div class="card" id="threat-card">
                            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center"
                                id="threat-header">
                                <span id="threat-title">Threat</span>
                                <button class="btn btn-light btn-sm tambah" id="add-threat">+</button>
                            </div>
                            <table class="table table-bordered text-center" id="threat-table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>#</th>
                                        <th colspan="2">Kekhawatiran apa yang dimiliki perusahaan saat ini? Apakah ada
                                            tantangan
                                            yang dapat
                                            berisiko membahayakan rencana?</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
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
                    url: 'v1/swot/' + category,
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
            getAllDataByCategory('strenght', 'strenght-table');
            getAllDataByCategory('weakness', 'weakness-table');
            getAllDataByCategory('opportinity', 'opportinity-table');
            getAllDataByCategory('threat', 'threat-table');

            // Show modal when adding a new SWOT item
            $('#add-strenght, #add-weakness, #add-opportinity, #add-threat').click(function() {
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

                let url = id ? `/v1/swot/update/${id}` : '/v1/swot/create';

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
                    url: `/v1/swot/get/${id}`,
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
                            url: `/v1/swot/delete/${id}`,
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
