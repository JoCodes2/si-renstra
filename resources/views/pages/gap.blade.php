@extends('Layouts.master')
@section('content')
   <div>
        <x-base-header headerTitle="GAP" headerIcon="fas fa-box">
        </x-base-header>
        <x-base-body>
            <table class="table d-flex justify-content-center align-items-center">
                <tbody>
                    <tr>
                        <th scope="row" style="background-color: #a2c7ff; width: 120px;color: #0D7FD3"
                            class="justify-content-center text-center">What</th>
                        <td class="text-center">Metode yang digunakan untuk <b>membandingkan keadaan saat ini dengan keadaan masa depan  yang diinginkan,</b> sehingga, dapat membantu mengindentifikasi area yang perlu diperaiki melalui suatu perkembangan</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 120px; background-color: #FBE2D5;color: #0D7FD3"
                            class="justify-content-center text-center">How</th>
                        <td class="text-center">(1) Tentukan Fokus Area -> (2) Tentukan Keadaan Future State yang diinginkan -> (3) Evaluasi Current State -> (4) Buat Rencana next Action Sebagai Perbaikan -> Selesai</td>
                    </tr>
                    <tr>
                        <th scope="row" style="width: 120px; background-color: #C0F1C8;color: #0D7FD3"
                            class="justify-content-center text-center">Why</th>
                        <td class="text-center"><strong>Memfasilitasi perencanaan strategis </strong> dengan mengindentifikasi peluang, meningkatkan pemahaman kinerja, dan mengalokasikan sumber daya secara efektif.</td>
                    </tr>
                </tbody>
            </table>
            <x-gap.base-table tableId="gapTable"></x-gap.base-table>
        </x-base-body>
    </div>
    <x-gap.form-data></x-gap.form-data>
     <script type="module" src="{{ asset('js/gap/gap.controller.js') }}"></script>

@endsection

