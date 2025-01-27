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
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="table-info">
                                <th class="text-center" style="height: 10px">Tulis Hasil Brainstorming</th>
                                <th class="text-center" style="height: 10px">Catatan</th>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    "Menjadi organisasi terdepan dalam pemberdayaan perempuan di Indonesia yang menciptakan perubahan sosial, budaya, dan politik secara inklusif dan berkelanjutan, dengan target meningkatkan kepemimpinan perempuan di berbagai sektor strategis dalam lima tahun ke depan."
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
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="table-info ">
                                <th class="text-center" style="height: 10px;">Tulis Hasil Brainstorming</th>
                                <th class="text-center" style="height: 10px;">Catatan</th>
                            </tr>
                            <tr>
                                <td>
                                    <ul style="list-style-type: none; padding-left: 0;">
                                        <li>1. Meningkatkan kapasitas perempuan melalui pendidikan dan pelatihan kepemimpinan</li>
                                        <li>2. Mengadvokasi keadilan gender dan kesetaraan hak perempuan di semua sektor</li>
                                        <li>3. Membantu perempuan menghadapi tantangan marginalisasi budaya dan struktural</li>
                                        <li>4. Membangun kemitraan strategis untuk mendukung pemberdayaan perempuan secara berkelanjutan</li>
                                        <li>5. Menciptakan program inklusif berbasis kebutuhan masyarakat lokal</li>
                                    </ul>
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
  <script type="module" src="{{ asset('js/company-profile/company-profile.controller.js') }}"></script>
@endsection

