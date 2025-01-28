@props(['tableId','buttonId'])
<div>
    <button class="btn btn-sm btn-outline-primary ml-auto" id="{{ $buttonId }}" data-toggle="modal" data-target="#companyProfileModal">
        <i class="fas fa fa-plus"></i>Buat Pertanyaan</button>
    <table class="table table-bordered"  id="{{ $tableId }}">
        <thead class="table-info ">
            <tr>
                <th colspan="3" class="text-center" style="height: 10px;">Jawab Pertanyaan di Bawah Ini</th>
            </tr>
        </thead>
        <tbody>

        </tbody>

    </table>
</div>
