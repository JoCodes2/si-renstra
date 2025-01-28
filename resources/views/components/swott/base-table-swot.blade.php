@props(['baseTitle', 'baseStyle', 'baseDeskripsi', 'initIdTable', 'buttonId'])
<div>
    <button class="btn btn-sm btn-outline-primary ml-auto" id="{{ $buttonId }}" data-toggle="modal"
        data-target="#swotModal">
        <i class="fas fa fa-plus"></i></button>
    <table class="table table-bordered" id="{{ $initIdTable }}">
        <thead>
            <tr>
                <th colspan="3" class="{{ $baseStyle }}">{{ $baseTitle }}</th>
            </tr>
            <tr>
                <th scope="col" style="background-color: #010150;">#</th>
                <th scope="col" colspan="2" class="text-center fw-bold py-2 bg-dark text-white">
                    {{ $baseDeskripsi }}
                </th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
