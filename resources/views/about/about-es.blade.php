@extends('layouts.simple')
@yield('css_before')
@section('js_after')
    <script>
        $('.item-one').click(function() {
            $('.item-one').addClass('smirrow-active')
            $('.item-three, .item-two').removeClass('smirrow-active')
            $('.acordion_one').removeClass('d-none')
            $('.acordion_two,.acordion_three').addClass('d-none')
        });
        $('.item-two').click(function() {
            $('.item-one, .item-three').removeClass('smirrow-active')
            $('.item-two').addClass('smirrow-active')

            $('.acordion_two').removeClass('d-none')
            $('.acordion_one,.acordion_three').addClass('d-none')

        });
        $('.item-three').click(function() {
            $('.item-one,.item-two').removeClass('smirrow-active')
            $('.item-three').addClass('smirrow-active')
            $('.acordion_three').removeClass('d-none')
            $('.acordion_one,.acordion_two').addClass('d-none')
        });

        var getBrowserInfo = function() {
            var ua = navigator.userAgent,
                tem,
                M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
            if (/trident/i.test(M[1])) {
                tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
                return 'IE ' + (tem[1] || '');
            }
            if (M[1] === 'Chrome') {
                tem = ua.match(/\b(OPR|Edge)\/(\d+)/);
                if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
            }
            M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
            if ((tem = ua.match(/version\/(\d+)/i)) != null) M.splice(1, 1, tem[1]);
            return M.join(' ');
        };

        console.log("Navegator is: " + getBrowserInfo());
    </script>
@endsection

@section('meta_description')@lang('messages.meta_description')@endsection
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/flag-icon.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
@endsection
@section('css_before')

@endsection
@section('content')

    <div class="language" style="z-index: 900;
                                position: absolute;
                                right: 0;
                                padding: 20px;
                                cursor: pointer;
                                ">
        <div class="btn-group">
            <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="row">
                    <b style="color: white; font-size: 20px;" class="d-md-block d-none">
                        {{ strtoupper(substr(config('app.locale'), 0, 2)) }}
                    </b>
                    </b> &nbsp;<i style="color: white; font-size: 20px; margin-top: 5px;"
                        class="fas fa-globe-asia">&nbsp;&nbsp;&nbsp;</i>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('setlocale', 'es_CO') }}" class="dropdown-item" href="#"><img width="25px"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/200px-Flag_of_Colombia.svg.png"
                        alt=""> @lang('messages.spanish')</a></li>
                <a href="{{ route('setlocale', 'en') }}" class="dropdown-item" href="#"><img width="25px"
                        src="https://i.postimg.cc/zf3XKxbC/1200px-Flag-of-the-United-States-svg.png"
                        alt=""> @lang('messages.english')</a>
            </div>
        </div>
    </div>

    <div class="btn-float btn-smirrow btn-back c-pointer " onclick="location.href = 'https://smirrow.com/';"><i
            class="fa fa-times" aria-hidden="true"></i></div>

    <section id="section_about" class="animate__animated " style="overflow: hidden">
        <nav class="navbar  navbar-dark bg-black">
            <a class="navbar-brand" href="#">
                <div class="row">
                    <div class="container">
                        <div class="row ">
                            <a href="/"><img class="rounded max-height-25" style="padding: 15px; width: 110px;height: 110px;"
                                src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="Logo Smirrow"
                                title="Logo de Smirrow"></a>
                            <h2 class="text-light mt-4 ">Sobre nosotros</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container mt-5">

            <div class="row">
                <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                    <h2>Misión</h2>
                    <p>
                        Smirrow es la plataforma que está cambiando la forma de conectar las personas prestadoras de
                        servicios de entretenimiento para adultos con sus usuarios. El sitio se perfila brindando seguridad
                        en el pago y manejo de dinero, seguridad a prestadores de servicios y usuarios en sus
                        desplazamientos. Incluye creación de contenido de todos los géneros y para todos los gustos.
                    </p>
                </div>
                <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                    <h2>Visión</h2>
                    <p>
                        Smirrow es la plataforma que está creada para convertirse en el primer sitio internacional en donde
                        el tabú, la estigmatización y la doble moral sobre servicios de entretenimiento para adultos sea
                        eliminado e ingrese a ser parte común, reconocida y universalmente aceptado.
                    </p>
                </div>


            </div>


            <h2>HISTORIA</h2>
            <p>
                Fue fundada en el año 2020 por un grupo de jóvenes empresarios, la visión de estos jóvenes empresarios era
                desarrollar una plataforma digital en donde las personas prestadoras de servicios de entretenimiento para
                adultos pudieran monetizar sin ningún tipo de intermediarios y obteniendo de parte de la plataforma
                prerrogativas como seguridad en los pagos, seguridad en el manejo de dinero, seguridad en desplazamientos,
                seguridad en el manejo de sus datos personales, tener la libertad de trabajar manejando sus propios
                horarios, libertad para cobrar de forma libre lo que crean justo por sus servicios, reflejar la
                biodiversidad cultural aceptando personas prestadoras de servicios de entretenimiento para adultos de todos
                los géneros. Estos jóvenes empresarios desde entonces con su equipo técnico y creativo dieron vida a esta
                visión. Smirrow llegó consolidando su importancia como una plataforma superior con glamur y elegancia.
            </p>
            <div class="row">
                <div class='col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'>
                    <img src="https://images.pexels.com/photos/3194519/pexels-photo-3194519.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260"
                        class="mt-1 img-about" alt="PROYECCIÓN">
                </div>
                <div class='col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-5'>
                    <h2>PROYECCIÓN </h2>
                    <p>
                        Smirrow es una plataforma creada para convertirse en plataforma más grande de América, en donde las
                        personas prestadoras de servicios de entretenimiento para adultos podrán generar ingresos de forma
                        constante y con seguridad. Sitio que se convertirá en la plataforma más solidad, segura y con
                        garantías para los usuarios. Smirrow obtendrá miles de personas prestadoras de servicios y millones
                        de usuarios alrededor del mundo y lograr ser un sitio de referencia internacional.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class='col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8'>
                    <h2>INTERACTIVIDAD Y PARTICIPACIÓN </h2>
                    <p>
                        A diferencia de los sitios en donde encuentras personas que prestan servicios de entretenimiento para adultos en donde no reciben a todos los géneros y solo venden espacios, Smirrow recibe con agrado la biodiversidad cultural, es un sitio donde puedes encontrar personas que prestan servicios de entretenimiento para adultos de todos los géneros. La plataforma está diseñada segura y muy fácil de usar, en donde puedes crear una cuenta gratis, crear historial de tus servicios preferidos, generar una lista de las personas prestadoras de servicios de entretenimiento para adultos preferidas, calificar el servicio de 1 a 5 estrellas entre los usuarios, dejar comentarios entre los usuarios, verificación de perfil para seguridad, chat interno por seguridad entre las partes y mucho más que podrás descubrir al crear un perfil. Entre más completo tenga el perfil de usuario, más apariciones y posicionamiento tendrá la persona prestadora de servicios de entretenimiento para adultos dentro de la plataforma, entre mejor calificaciones y buenos comentarios reciba la persona prestadora de servicios de entretenimiento para adultos, la plataforma lo posicionará en los resultados de búsqueda o en mejores servicios recomendados.
                    </p>
                </div>
                <div class='col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'>
                    <img src="https://images.pexels.com/photos/6853468/pexels-photo-6853468.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        class="mt-1 img-about-2" alt="INTERACTIVIDAD Y PARTICIPACIÓN">
                </div>
            </div>
        </div>

        <div class="footer">
            Smirrow
        </div>

    </section>


@endsection
