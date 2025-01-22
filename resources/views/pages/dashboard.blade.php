@extends('Layouts.master')
@section('content')
   <div>
        <x-base-header headerTitle="Profil Perusahaan" headerIcon="fas fa-box">
        </x-base-header>
        <x-base-body>
            <x-company-profile.vision-table></x-company-profile.vision-table>
            <x-company-profile.mision-profile></x-company-profile.mision-profile>
        </x-base-body>
    </div>
@endsection
