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
        <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}">

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

        @stack('banner')

        {{ $slot }}


        @include('includes.footer')

        @stack('modals')

        <!-- Back to top -->
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        @livewireScripts
        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('frontend/js/scrollspy.min.js') }}"></script>
        <!-- custom js -->
        <script src="{{ asset('frontend/js/app.js') }}"></script>
        <script src="{{ mix('/js/app.js') }}"></script>

    </body>
</html>
