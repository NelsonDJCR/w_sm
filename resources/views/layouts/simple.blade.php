<!doctype html>
<html lang="{{ substr(config('app.locale'),0,-3) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name=”keywords” content= "Prepagos en Bogotá Prepagos en Cali Prepagos en Medellín Prepagos en Barranquilla Prepagos en Cartagena, Escorts, casa de citas, adultos, catadores">
    <title>@yield('title')</title>    
    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="Smirrow">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="stylesheet" id="css-theme" href="{{ asset('/css/themes/city.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/oneui.css') }}">
    <link rel="manifest" href="./manifest.json">
    @yield('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5DEKYZRSN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T5DEKYZRSN');
    </script>
</head>
<body>

<div id="page-container">
    <main id="main-container">
        @include('error')
        <div id="app">
            @yield('content')
        </div>
    </main>
</div>

<script src="{{ asset('js/oneui.app.js') }}"></script>

<script src="{{ asset('js/laravel.app.js') }}"></script>
@yield('css_before')
@yield('css_after')
@yield('js_after')
@stack('scripts')
@include('flashy::message')
<script>
    if('serviceWorker' in navigator){navigator.serviceWorker.register('./sw.js')}
</script>
</body>
</html>
