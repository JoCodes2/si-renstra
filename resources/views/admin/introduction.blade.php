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
@endsection

@section('scripts')
@endsection
