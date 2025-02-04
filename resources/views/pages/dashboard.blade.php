@extends('Layouts.master')
@section('content')
   <div>
        <x-base-header headerTitle="Profil Organisasi" headerIcon="fas fa-box">
        </x-base-header>
        <x-base-body>
            <div>
                <h1 class="text-center fw-bold pb-2 bg-info text-white">VISI ORGANISASI</h1>
                <div class="card p-3">
                    <x-company-profile.base-table tableId="visionCompany" buttonId="vision"></x-company-profile.base-table>
                   <div class="d-flex">
                        <button class="btn btn-sm btn-outline-primary mr-2" id="visionBtn" data-toggle="modal" data-target="#resultModal">
                            <i class="fas fa-plus"></i> Tulis Hasil
                        </button>
                         <button class="btn btn-sm btn-outline-danger delete-result-btn" data-category="vision">
                            <i class="fas fa-trash-alt"></i> Hapus Hasil
                        </button>
                    </div>

                    <table class="table table-bordered">
                        <tbody>
                            <tr class="table-info">
                                <th class="text-center" style="height: 10px">Tulis Hasil Brainstorming</th>
                                <th class="text-center" style="height: 10px">Catatan</th>
                            </tr>
                            <tr>
                                <td id="visionResultTable">

                                </td>
                                <td>
                                    <ul style="list-style-type: none;">
                                        <li >1. Baiknya ditulis dalam 1 kalimat</li>
                                        <li >2. Menunjukkan ranah organisasi</li>
                                        <li >3. Fleksibel sehingga memungkinkan adanya perkembangan</li>
                                        <li >4. Detail (misal: menggunakan jangka waktu harapan di masa depan “5 Tahun Ke Depan”)</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <h1 class="text-center fw-bold py-2 bg-info text-white">MISI ORGANISASI</h1>
                <div class="card p-3">
                     <x-company-profile.base-table tableId="misionCompany" buttonId="mision"></x-company-profile.base-table>
                    <div class="d-flex">
                        <button class="btn btn-sm btn-outline-primary mr-2" id="misionBtn" data-toggle="modal" data-target="#resultModal">
                            <i class="fas fa fa-plus"></i>Tulis Hasil
                        </button>
                        <button class="btn btn-sm btn-outline-danger delete-result-btn"  data-category="mision">
                            <i class="fas fa-trash-alt"></i> Hapus Hasil
                        </button>
                    </div>

                    <table class="table table-bordered">
                        <tbody>
                            <tr class="table-info ">
                                <th class="text-center" style="height: 10px;">Tulis Hasil Brainstorming</th>
                                <th class="text-center" style="height: 10px;">Catatan</th>
                            </tr>
                            <tr>
                                <td id="misionResultTable">

                                </td>
                                <td>
                                    <ul style="list-style-type: none; padding-left: 0;">
                                        <li>1. Cepat dipahami dalam waktu 30 detik</li>
                                        <li>2. Disarankan memiliki tagline 2 sampai 6 kata</li>
                                        <li>3. Pernyataan kalimat tiap misi tidak lebih dari 15 kata</li>
                                        <li>4. Sudah memasukkan seluruh komponen pertanyaan di atas</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </x-base-body>
    </div>
    <x-company-profile.form-data></x-company-profile.form-data>
    <x-company-profile.form-result></x-company-profile.form-result>
  <script type="module" src="{{ asset('js/company-profile/company-profile.controller.js') }}"></script>
@endsection

