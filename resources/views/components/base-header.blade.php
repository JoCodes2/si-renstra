@props(['headerTitle', 'headerIcon'])
<div class="px-3 pt-2">
    <div class="card-header d-flex justify-content-between align-items-center">
        {{-- Title Page --}}
        <h1 class="m-0 font-weight-bold"> <i class="{{ $headerIcon }}"></i> {{ $headerTitle }} </h1>
    </div>
</div>
