<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('Futsal Bo oking', 'Futsal Booking') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
        <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/theme.js') }}" defer></script>
        <script src="{{ asset('js/bs-init.js') }}" defer></script>
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" style="background: #ccd5ae;">
            
            <!-- Page Heading -->
            <header class="bg-white shadow" style="font-family: Zefani;">
                <div class="p-6" style="background: #205375; text-align: center;">
                    {{ $header }}
                </div>
            </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 justify-items-center min-h-screen p-6" style="background-color:#7F8487;">
                    @include('layouts.navigation')
                </div>
                <div class="d-flex justify-content-center col-sm-10 min-h-screen p-6" style="background-color:gray;">

                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
            <div class="d-flex flex-column" id="content-wrapper">
            <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a><footer class="bg-white sticky-footer ">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Book Online Futsal 2022</span></div>
                </div>
            </footer>
        </div>
</body>
</html>
