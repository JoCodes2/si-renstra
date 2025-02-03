@extends('Layouts.master')
@section('content')
   <div>
        <x-base-header headerTitle="Aktifitas" headerIcon="fas fa-box">
        </x-base-header>
        <x-base-body>
            <div class="card">
                <div class="card-body">
                    <x-activity.base-table tableId="activityCompany" buttonId="createActivity"></x-activity.base-table>
                </div>
            </div>
        </x-base-body>
        <x-activity.form-data></x-activity.form-data>
    </div>
     <script type="module" src="{{ asset('js/activity/activity.controller.js') }}"></script>

@endsection

