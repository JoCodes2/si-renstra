@props(['tableId'])
<div>
    <table class="table table-bordered" id="{{ $tableId }}">
        <thead>
            <tr class="text-center">
                <th style="background-color: #a2c7ff; color: #0D7FD3;">DESIRED FUTURE STATE</th>
                <th style="background-color: #a2c7ff; color: #0D7FD3;">CURRENT STATE</th>
                <th style="background-color: #FBE2D5; color: #0D7FD3;">IDENTIFIED GAP</th>
                <th style="background-color: #a2c7ff; color: #0D7FD3;">ACTION PLAN</th>
                <th style="background-color: #12100f; color: #0D7FD3;" rowspan="2">Aksi</th>
            </tr>
            <tr class="text-center">
                <td class="bg-dark text-light" style="height: 30px;">Dimana posisi bisnis yang diinginkan dimasa depan?</td>
                <td class="bg-dark text-light" style="height: 30px;">Dimana dan bagaimana posisi saat ini?</td>
                <td class="bg-dark text-light" style="height: 30px;">Apa ketidaksesuaian antara keinginan masa depan dan kondisi saat ini?</td>
                <td class="bg-dark text-light" style="height: 30px;">Rencana apa yang disusun untuk mengatasi masalah tersebut</td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
