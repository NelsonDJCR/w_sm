<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ config('app.name') }} @yield('title')</title>

    <meta name="description" content="Speeho">
    <meta name="author" content="pixelcave">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/oneui.css') }}">
    <link rel="stylesheet" id="css-theme" href="{{ asset('/css/themes/city.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/flag-icon.css')}}">


    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="{{ asset('/css/themes/amethyst.css') }}"> -->
@yield('css_after')
@stack('css')
<!-- Scripts -->
    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
    <script>window.baseURL = "{{ url('/') }}";</script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5DEKYZRSN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T5DEKYZRSN');
    </script>
</head>

<style>
    body{
        background-image: url(https://images.pexels.com/photos/206369/pexels-photo-206369.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }

    .img-copy{
            height: 500px !important;
    }
    @media only screen and (max-width: 600px){
        .img-copy{
            height: 200px !important;
        }
    }

</style>

<body >
<div id="app">

    <div id="page-container" class="sidebar-o enable-page-overlay sidebar-r side-scroll page-header-fixed side-trans-enabled page-header-dark sidebar-dark">

        <!-- Side Overlay-->
    @include('layouts.partials.customer.aside')
    <!-- END Side Overlay -->

    @include('layouts.partials.customer.sidebar')

        <!-- Header -->
    @include('layouts.partials.customer.header')
    <!-- END Header -->

        <!-- Main Container -->

        <main id="main-container">
            @include('error')

            @yield('content')

            @yield('modals')
        </main>
        <!-- END Main Container -->


        <!-- Apps Modal -->
    @include('layouts.partials.modal_apps')
    @include('layouts.partials.modal_apps_customer')
    <!-- END Apps Modal -->
    </div>
    <!-- END Page Container -->
    <!-- OneUI Core JS -->
    <script src="{{ asset('js/oneui.app.js') }}"></script>

    <!-- Laravel Scaffolding JS -->
    <script src="{{ asset('js/laravel.app.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>jQuery(function () {
            One.helpers('select2');
        });
    </script>

    @include('flashy::message')
    @yield('js_after')
    @stack('scripts')
</div>
</body>
</html>
