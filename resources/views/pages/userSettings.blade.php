@extends('Layouts.master')
@section('content')
    <div class="page-inner">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold"><i class="fas fa-box pr-2"></i>Profil Pengguna</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="avatar avatar-xxl">
                                <div class="avatar-img rounded-circle " id="avatarUsers" >
                                </div>
                            </div>
                            <h2 class="fw-bold pt-3" id="nameUser"></h2>
                        </div>
                        <div class="d-flex justify-content-center pb-3">
                            <div class="">
                                <form id="updateProfile">
                                    <div class="form-group pb-0">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" style="width: 400px;" name="name" id="name"  placeholder="Nama">
                                    </div>
                                    <div class="form-group pb-0">
                                        <label for="position">Jabatan</label>
                                        <input type="text" class="form-control" style="width: 400px;" name="position" id="position"  placeholder="Jabatan">
                                    </div>
                                    <div class="form-group pb-0">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" style="width: 400px;" name="username" id="username"  placeholder="username">
                                    </div>
                                    <div class="form-group pb-0">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" style="width: 400px;" name="password" id="password"  placeholder="**********">
                                    </div>
                                     <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-outline-danger" >Batal</button>
                                        <button type="submit" class="btn btn-sm btn-outline-primary">Perbaharui Profile</button>
                                    </div>
                                </form>
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
        $(document).ready(function () {
            // hendle csrf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // set avatar profil
            function setAvatar(name) {
                let avatarElement = $('#avatarUsers');
                let initials = getInitials(name);

                avatarElement.css({
                    'background-color': '#F0AB48',
                    'color': '#ffffff',
                    'font-size': '65px',
                    'line-height': '65px',
                    'text-align': 'center',
                    'display': 'flex',
                    'align-items': 'center',
                    'justify-content': 'center',
                });

                avatarElement.text(initials);
            }
            // set avartar for sidebar
            function setAvatarSidebar(name) {
                let avatarElement = $('#avatarUsersSidebar');
                let initials = getInitials(name);

                avatarElement.css({
                    'background-color': '#F0AB48',
                    'color': '#ffffff',
                    'font-size': '21.6px',
                    'line-height': '25.92px',
                    'text-align': 'center',
                    'display': 'flex',
                    'align-items': 'center',
                    'justify-content': 'center',
                });

                avatarElement.text(initials);
            }
            // set initials name users
            function getInitials(name) {
                return name.charAt(0).toUpperCase();
            }
            // get data
           // Ambil data pengguna
            function fetchDataAndUpdate() {
                $.ajax({
                    url: `${appUrl}/v1/users/`,
                    method: 'GET',
                    success: function (response) {
                        let userId = response.data.id;
                        let nameUser = response.data.name;

                        // Simpan data awal
                        originalData = {
                            id: userId,
                            name: response.data.name,
                            position: response.data.position,
                            username: response.data.username
                        };

                        // Tampilkan data di form
                        $('#nameUser').text(response.data.name);
                        $('#name').val(response.data.name);
                        $('#position').val(response.data.position);
                        $('#username').val(response.data.username);

                        setAvatar(nameUser);
                        setAvatarSidebar(nameUser);
                    },
                    error: function (error) {
                        console.error('Error fetching user data:', error);
                    }
                });
            }

            fetchDataAndUpdate();

            // Fungsi alert error
            function showErrorAlert(message) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: message,
                });
            }

            // Fungsi alert sukses
            function alertSuccess(message) {
                Swal.fire({
                    title: 'Berhasil!',
                    text: message,
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1000,
                });
            }

            $('#updateProfile').submit(function (e) {
                e.preventDefault();

                let formData = {
                    name: $('#name').val(),
                    position: $('#position').val(),
                    username: $('#username').val(),
                    password: $('#password').val(),
                };

                $.ajax({
                    url: `${appUrl}/v1/users/update/${originalData.id}`,
                    method: 'POST',
                    data: formData,
                    success: function (response) {
                        alertSuccess();
                        setTimeout(function () {
                            location.reload();
                        }, 1000);

                    },
                    error: function (xhr) {
                        showErrorAlert('Gagal memperbarui profil!');
                        console.error(xhr.responseText);
                    }
                });
            });

            // Event klik tombol "Batal"
            $('.btn-outline-danger').click(function () {
                $('#name').val(originalData.name);
                $('#position').val(originalData.position);
                $('#username').val(originalData.username);
                $('#password').val('');

                Swal.fire({
                    title: 'Dibatalkan',
                    icon: 'info',
                    showConfirmButton: false,
                    timer: 1000,
                });
            });
        });
    </script>

@endsection
