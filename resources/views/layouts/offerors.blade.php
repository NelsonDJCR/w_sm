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
    <link rel="stylesheet" href="{{ asset('css/flag-icon.css') }}">
    {{-- <script    src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ asset('/css/themes/amethyst.css') }}"> -->
    @yield('css_after')
    @stack('css')
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
    <script>
        window.baseURL = "{{ url('/') }}";
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T5DEKYZRSN"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-T5DEKYZRSN');
        
    </script>
</head>
@yield('header')



<body style="background-image:url({{ asset('images/background.jpg') }})">
    <div id="app">
        <div id="page-container"
            class="sidebar-o enable-page-overlay sidebar-r side-scroll page-header-fixed side-trans-enabled page-header-dark sidebar-dark ">
            @include('layouts.partials.offeror.sidebar')
            @include('layouts.partials.offeror.header')
            <main id="main-container">
                @include('error')

                @yield('content')

                @yield('modals')
            </main>
            @include('layouts.partials.modal_apps')
        </div>
        <script src="{{ asset('js/oneui.app.js') }}"></script>
        <script src="{{ asset('js/laravel.app.js') }}"></script>
        <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
        <script>
            jQuery(function() {
                One.helpers('select2');
                $('.panic-button').click(function() {

                    var phone = $(this).data('phone')

                    Swal.fire({
                        title: '¿Activar el Botón del Pánico?',
                        text: 'Activa la ubicación y la enviaremos a tu contacto de emergencia para que esté informado y se comunique contigo o las autoridades',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Aceptar',
                        confirmButtonColor: '#E61879',
                        cancelButtonText: 'Cancelar',
                        cancelButtonColor: '#000000',
                    }).then((result) => {

                        if (result.value) {
                           

                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(function(position) {
                                    var location =`https://www.google.com/maps/place/${position.coords.latitude}%20${position.coords.longitude}`
                                    $.post('/send-panic',{
                                        msg: `${location}`,
                                        phone: phone,
                                        _token: "{{ csrf_token() }}"
                                    }).done(function(e){
                                        Swal.fire({
                                            title:'Estaremos al tanto del caso', 
                                            text:'Hemos enviado tus datos al teléfono de emergencia ingresado', 
                                            icon:'success',
                                            confirmButtonText: 'Aceptar',
                                            confirmButtonColor: '#E61879',
                                        }).then(function(){ window.location = 'tel:123'; });;
                                    });      
                                });
                            }
                        }
                    });
                });
            });
        </script>
        @include('flashy::message')
        @yield('js_after')
        @stack('scripts')
    </div>
</body>

</html>
