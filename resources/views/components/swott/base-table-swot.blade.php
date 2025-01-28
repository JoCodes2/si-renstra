@props(['baseTitle', 'baseStyle', 'baseDeskripsi', 'initIdTable'])
<div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th colspan="3" class="{{ $baseStyle }}">{{ $baseTitle }}</th>
            </tr>
            <tr>
                <th scope="col" style="background-color: #010150;">#</th>
                <th scope="col" class="text-center fw-bold py-2 bg-dark text-white">{{ $baseDeskripsi }}

                </th>
            </tr>
        </thead>
        <tbody id="{{ $initIdTable }}">

        </tbody>
    </table>
</div>
