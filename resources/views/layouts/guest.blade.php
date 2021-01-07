<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sertifikasi Manajemen ISO 9001, ISO 14001, OHSAS 18001, ISO 27001:2013, ISO 22000:2005</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('1492097807-logo.png') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/materialdesignicons.min.css') }}" />

    <!-- Custom  sCss -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    @livewireStyles
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
</head>

<body class="font-sans antialiased">
    @include('includes.navbar')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-110469.jpeg') }}"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-30342.jpg') }}"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/frontend/images/slider/pexels-photo-187041(1).jpeg') }}"
                    alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{ $slot }}


    @include('includes.footer')

    @stack('modals')

    <!-- Back to top -->
    <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

    <!-- javascript -->
    @livewireScripts
    <x-livewire-alert::scripts />
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollspy.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('frontend/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @stack('js')

</body>

</html>
