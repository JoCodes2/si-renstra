@props(['tableId','buttonId'])
<div class="table-responsive">
   <div class="py-3 d-flex justify-content-between align-items-center">
        <h4 class="m-0 font-weight-bold">Monitoring Program Kerja</h4>
        <button class="btn btn-outline-primary" id="{{ $buttonId }}" >
            <i class="fas fa-plus pr-2 text-center"></i>Buat Program Kerja
        </button>
    </div>
    <table class="table table-bordered" id="{{ $tableId }}">
        <thead>
            <tr class="text-center text-light">
                <th style="background-color: rgb(59, 92, 126)">No</th>
                <th style="background-color: rgb(59, 92, 126)">Misi</th>
                <th style="background-color: rgb(59, 92, 126)">Kegiatan</th>
                <th style="background-color: rgb(59, 92, 126)">Supervisor</th>
                <th  style="background-color: rgb(59, 92, 126)">Devisi</th>
                <th style="background-color: rgb(59, 92, 126)">PIC</th>
                <th style="background-color: rgb(59, 92, 126)">Target</th>
                <th style="background-color: rgb(59, 92, 126)">Realisasi</th>
                <th style="background-color: rgb(59, 92, 126)">Capaian</th>
                <th style="background-color: rgb(59, 92, 126)">Deadline</th>
                <th  style="background-color: rgb(254, 175, 84)">CountDown</th>
                <th style="background-color: rgb(59, 92, 126)">Supervisor Ceklist</th>
                <th style="background-color: rgb(59, 92, 126)">Keterangan</th>
                <th style="background-color: rgb(59, 92, 126)">Aksi</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
