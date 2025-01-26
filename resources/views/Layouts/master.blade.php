<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- API Url -->
    <script>
        let appUrl = '{{ env('APP_URL') }}';
    </script>
    <title>sps</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    @include('Layouts.style')
</head>

<body>
    <div class="wrapper">
        {{-- navbar --}}
        @include('Layouts.navbar')
        {{-- end navbar --}}
        <!-- Sidebar -->
        @include('Layouts.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @yield('content')
            </div>
            @include('Layouts.footer')
        </div>
    </div>
    @include('Layouts.script')
    @yield('scripts')
</body>

</html>
