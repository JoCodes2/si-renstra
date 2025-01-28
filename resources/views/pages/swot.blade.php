@extends('Layouts.master')
@section('content')
    <div>
        <x-base-header headerTitle="SWOT" headerIcon="fas fa-box">
        </x-base-header>
        <x-base-body>
            <table class="table d-flex justify-content-center align-items-center px-5">
                <tbody>
                    <tr>
                        <th scope="row" style="background-color: #a2c7ff; width: 120px;color: #0D7FD3"
                            class="justify-content-center text-center">What</th>
                        <td class="text-center">Alat perencanaan strategis yang membantu bisnis mengidentifikasi kekuatan dan
                            kelemahan
                            internal, serta peluang dan ancaman eksternal yang dapat memengaruhi inisiatif pertumbuhan
                            dan pencapaian tujuannya.</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 120px; background-color: #FBE2D5;color: #0D7FD3"
                            class="justify-content-center text-center">How</th>
                        <td class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia nulla tempora
                            autem? Aliquam odit
                            nihil facilis eligendi,
                            doloremque magni ut reprehenderit libero maxime molestiae, delectus, deserunt quis aperiam
                            veniam non!</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 120px; background-color: #C0F1C8;color: #0D7FD3"
                            class="justify-content-center text-center">Why</th>
                        <td class="text-center"> Memberikan pandangan seimbang tentang kondisi internal organisasi dengan
                            lingkungan bisnis
                            beroperasi</td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <x-swott.base-table-swot baseTitle="Srength" baseStyle="text-center fw-bold py-2 bg-danger text-white"
                        baseDeskripsiStyle="text-center fw-bold py-2 bg-dark text-white"
                        baseDeskripsi="Apa keunggulan
                                    bisnis dibandingkan kompetitor lain? Aspek apa yang paling dihargai oleh pelanggan
                                    tentang merek?"
                        initIdTable="srengthTable"></x-swott.base-table-swot>
                </div>
                <div class="col-md-6">
                    <x-swott.base-table-swot baseTitle="Weaknesses"
                        baseStyle="text-center fw-bold py-2 bg-warning text-white"
                        baseDeskripsi="Faktor-faktor
                                    eksternal yang berpotensi memberikan keunggulan kompetitif bagi perusahaan."
                        initIdTable="weaknessesTable"></x-swott.base-table-swot>
                </div>
                <div class="col-md-6">
                    <x-swott.base-table-swot baseTitle="Opportunity" baseStyle="text-center fw-bold py-2 bg-info text-white"
                        baseDeskripsi="Faktor-faktor
                                    eksternal yang berpotensi memberikan keunggulan kompetitif bagi perusahaan."
                        initIdTable="opportunityTable"></x-swott.base-table-swot>
                </div>
                <div class="col-md-6">
                    <x-swott.base-table-swot baseTitle="Threat" baseStyle="text-center fw-bold py-2 bg-success text-white"
                        baseDeskripsi="Kekhawatiran apa
                                    yang dimiliki perusahaan saat ini? Apakah ada tantangan yang dapat berisiko
                                    membahayakan rencana?"
                        initIdTable="theatTable"></x-swott.base-table-swot>
                </div>
            </div>
        </x-base-body>
    </div>
@endsection
