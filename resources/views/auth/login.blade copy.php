@extends('layouts.simple')
@yield('css_before')
@section('js_after')
    <script>
        $('.open-modal-frecuency').click(function() {
            $('#modal-frecuency').modal('show')

        });
        $(document).ready(function() {
            $('#one-signup-terms').modal('show')
        });
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
        $('.open-frecuency_questions').click(function() {
            $('#one-signup-terms').modal('hide')
            $('.btn-back').removeClass('d-none')
            $('#section_login').addClass('d-none')
            $('#section_freciency_question').removeClass('d-none').addClass('animate__bounceInUp')

        });
        $('.open-obout').click(function() {
            $('#one-signup-terms').modal('hide')
            $('.btn-back').removeClass('d-none')
            $('#section_login').addClass('d-none')
            $('#section_about').removeClass('d-none').addClass('animate__bounceInUp')

        });
        $('.btn-back').click(function() {
            $('#section_login').removeClass('d-none')
            $(this).addClass('d-none')
            $('#section_freciency_question').addClass('d-none').removeClass('animate__bounceInUp')
            $('#section_about').addClass('d-none').removeClass('animate__bounceInUp')
        });
        var getBrowserInfo = function() {
            var ua= navigator.userAgent, tem, 
            M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
            if(/trident/i.test(M[1])){
                tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
                return 'IE '+(tem[1] || '');
            }
            if(M[1]=== 'Chrome'){
                tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
                if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
            }
            M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
            if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
            return M.join(' ');
        };

        console.log("Navegator is: "+getBrowserInfo());
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
    
<style>
    body{
        background: black !important;
    }
    </style>
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
                        {{ strtoupper(substr(config('app.locale'),0,2)) }}
                    </b>
                        </b> &nbsp;<i style="color: white; font-size: 20px; margin-top: 5px;" class="fas fa-globe-asia"></i>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-right">
                <a  href="{{ route('setlocale', 'es_CO') }}" class="dropdown-item" href="#"><img width="25px"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/200px-Flag_of_Colombia.svg.png"
                        alt=""> @lang('messages.spanish')</a></li>
                <a href="{{ route('setlocale', 'en') }}" class="dropdown-item" href="#"><img width="25px"
                        src="https://i.postimg.cc/zf3XKxbC/1200px-Flag-of-the-United-States-svg.png"
                        alt=""> @lang('messages.english')</a>
            </div>
        </div>
    </div>
    <div class="btn-float btn-smirrow btn-back c-pointer d-none"><i class="fa fa-times" aria-hidden="true"></i></div>
    <section id="section_login" class="animate__animated" style="overflow: hidden;">
        <!-- Terms Modal -->
        <div class="modal fade bg-black" id="one-signup-terms" tabindex="-1" role="dialog"
            aria-labelledby="one-signup-terms" aria-hidden="true">
            <div class="modal-dialog-centered modal-dialog modal-md modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-dark mb-0">
                        <div class="block-content text-center">
                            <p class="align-content-center">
                                <img class="rounded max-height-25" src="{{ URL::asset('images/icon/smirrow-icon.png') }}"
                                    alt="Logo Smirrow" title="Logo de Smirrow">
                            </p>
                            <h2 class="h4 font-w400 mb-3">
                                {{ config('app.name') }}
                            </h2>
                            <p class="small"><b>@lang('messages.exclusive_age')</b></p>
                            <p class="small color-message"><b>@lang('messages.accept_age')</b></p>
                        </div>
                        <div class="block-content block-content-full text-center">
                            <button type="button" class="btn btn-sm btn-smirrow" data-dismiss="modal"> <i
                                    class="fa fa-sign-in-alt"> </i> @lang('buttons.enter')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="datanone">
            <p class="hide-p">
                Entretenimiento para adultos con Prepagos, transgenero, servio de Escort, servicio de show lesbi, servcio en
                el
                mejores Prepagos, putas, Escort transgenero servicios a domicilio o sitio propio, trato de novia, sexo
                casual,
                casa
                de citas, mujeres solteras, mente libre, mente abierta
            </p>


            <p class="hide-p">norte,servicio en el sur, servio de trios, servio de sexo putas, las mejores prepagos en
                Bogot??,
                prepagos en</p>
            <p class="hide-p">Medell??n, prepagos en Barranquilla, prepagos en Cali, prepagos en Cartagena, Casa de citas,
                prepagos,
                sexo con</p>
            <p class="hide-p">prepagos, trato de novia, encuentra el mejor entretenimiento en Bogot??, Medell??n,
                Barranquilla,
                Cali,
                Cartagena, las</p>




            <p class="hide-p">Sexo oral, sexo anal, sexo vaginal, juguetes sexuales, lenceria para mujeres sexys, trios para
                mujeres
                y hombres,</p>
            <p class="hide-p">parejas, show lesbi, servicio en el norte, servicio en el sur, perfiles verificados, servicios
                seguros, mujeres</p>
            <p class="hide-p">solteras, mujeres trios, mujeres lesbi, mujeres lesbi con juguetes sexuales, culonas, tetonas,
                cara
                linda, trato de</p>
            <p class="hide-p"> novia, sensuales, doy besos, sexo oral con cond??n, sexo oral sin cond??n</p>
            <p class="hide-p">
                Lolitas solteras, lolitas hermosas, veteransa, paisas, mujeres de barranquilla, mujeres de bogota, rolas,
                mujeres de
                medell??n. mujeres de venezuela, tratos con extranjeros, trato de novias, entretenimiento para aldultos,
                prepagos
                lolitas solteras, prepagos lolitas hermosas

            </p>
            <p class="hide-p">
                Transgeneros, gays, lesbi, escort, modelos VIP, prepagos de lujo, trato de novias, mujeres solteras, precio
                moteles,
                los mejores moteles en mujeres de barranquilla, mujeres de bogota, rolas, mujeres de medell??n. mujeres de
                venezuela,
                tratos con extranjeros, los mejores servios de escort de toda colombia, las mejores mujeres las encuentras
                aqu??,
                sex
                shop, juguetes sexuales, lenceria sensual para mujeres
            </p>
        </div>
        @php($introVideo = 'intro1')

        <div class="font-size-sm text-center text-muted">

            {{-- <div class="position-absolute center-header">
                <h1 class=" text-center text-light">
                    <img class="rounded max-height-25" src="{{ URL::asset('images/icon/smirrow-icon.png') }}"
                        alt="Logo de Smirrow" title="Logo de Smirrow">
                    Smirrow
                </h1>
            </div> --}}

            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center ">
                <video class="d-md-block d-none" autoplay muted loop poster="{{ asset('videos/snap' . $introVideo . '.png') }}">
                    <source src="{{ asset('videos/' . $introVideo . '.webm') }}" type="video/webm">
                    <source src="{{ asset('videos/' . $introVideo . '.mp4') }}" type="video/mp4">
                </video>
                <div class="tint sy-background-image d-md-block d-none"
                    style="background-image: url({{ asset('images/generics/texture.png') }})">
                </div>
                <div class="w-100">
                    <!-- Sign In Section -->
                    <div class="content content-full bg-black sy-background-color mt-md-5">
                        <div class="row justify-content-center sy-opacity  mt-5">
                            <div class="col-md-8 col-lg-5 col-xl-4 ">

                                <!-- Header -->
                                <div class="text-center">
                                    <p class="mb-2">
                                        <img class="rounded max-height-50"
                                            src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="logo Smirrow"
                                            title="Logo de Smirrow" style="height: 100px;width: 100px;">
                                    </p>
                                    <h1 class=" text-white " style="font-family: smirrow">
                                        Smirrow
                                    </h1>
                                </div>
                                <!-- END Header -->

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->

                                <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" type="email" placeholder="{{ __('generics.email') }}"
                                            class="form-control form-control-lg form-control-alt {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-lg form-control-alt {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            id="password" name="password" placeholder="{{ __('generics.password') }}"
                                            required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="d-md-flex align-items-md-center justify-content-md-between">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="remember"
                                                    name="remember">
                                                <label class="custom-control-label font-w400"
                                                    for="remember">{{ __('generics.remember') }}</label>
                                            </div>
                                            <div class="py-2">
                                                <a class="font-size-sm text-smirrow"
                                                    href="{{ route('password.request') }}">{{ __('generics.forgot_your_password') }}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row text-center pt-2">
                                        <div class="col-md-6">
                                            <a href="{{ route('socialLogin', 'facebook') }}"
                                                class="btn btn-outline-secondary btn-block"><i class="fab fa-facebook"></i>
                                                Facebook</a>
                                        </div>
                                        <div class="col-md-6 mt-3  mt-md-0">
                                            <a href="{{ route('socialLogin', 'google') }}"
                                                class="btn btn-outline-secondary btn-block"><i class="fab fa-google"></i>
                                                Google</a>
                                        </div>
                                    </div>

                                    <div class="form-group row text-center">
                                        <div class="col-md-6 offset-md-3 col-sm-12">
                                            <button type="submit" class="btn btn-smirrow  btn-block ">
                                                {{ __('generics.login') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                @lang('messages.register')
                                <a href="{{ route('register') }}" class="text-smirrow">
                                    {{ __('generics.regist') }}
                                </a>
                                <br>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12 ">
                                <a href="/terms_and_conditions"
                                    class="text-white">@lang('auth.terms_and_conditions')</a>&nbsp;&nbsp;&nbsp;
                                <a href="/privacy" class="text-white">@lang('auth.privacy')</a> &nbsp;
                                <a href="#"
                                    class="text-white open-frecuency_questions">@lang('auth.frecuency_questions')</a> &nbsp;
                                <a href="#" class="text-white open-obout">@lang('auth.about') </a> &nbsp;
                                <strong class="text-white">{{ config('app.name') }}</strong> &nbsp;
                                &copy; <span class="text-white" data-toggle="year-copy"></span>&nbsp;&nbsp;
                            </div>
                        </div>

                    </div>
                    <!-- Button trigger modal -->



                    <!-- END Sign In Section -->
                    <!-- Footer -->
                    <div class="font-size-sm text-center text-muted py-2">


                        {{-- Text --}}



                        {{-- Icons --}}
                        <div class="col-12 mb-5 mt-3">
                            <a href="https://www.facebook.com/Smirrow-104224967797286/"
                                class="btn btn-sm  text-smirrow border-smirrow" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                            &nbsp;
                            <a href="https://twitter.com/Smirrow_co" class="btn btn-sm text-smirrow border-smirrow"
                                target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            &nbsp;
                            <a href="https://www.tiktok.com/@smirrow_co" class="btn btn-sm text-smirrow border-smirrow"
                                target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            &nbsp;
                            <a href="https://www.youtube.com/channel/UCjZROr9orGQMxsje7gtQSYw"
                                class="btn btn-sm text-smirrow border-smirrow" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            &nbsp;
                            <a href="https://www.instagram.com/smirrow.co/" class="btn btn-sm text-smirrow border-smirrow"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                        {{-- Language --}}




                    </div>
                    <!-- END Footer -->
                </div>
            </div>
        </div>
        <!-- END Page Content -->






    </section>
    <section id="section_freciency_question" class="animate__animated  d-none" style="overflow: hidden">


        <!-- Image and text -->
        <nav class="navbar  navbar-dark bg-black">
            <a class="navbar-brand" href="#">
                <div class="row">
                    <div class="container">
                        <div class="row ">
                            <img class="rounded max-height-25" style="padding: 15px; width: 110px;height: 110px;"
                                src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="Logo Smirrow"
                                title="Logo de Smirrow">
                            <h2 class="text-light mt-4 ">Preguntas frecuentes</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container">
            <div class="row mt-5">

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  position-static mb-5">

                    <ul class="list-group ">
                        <li class="list-group-item item-three smirrow-active c-pointer">Preguntas generales</li>
                        <li class="list-group-item item-two c-pointer">Preguntas usuario</li>
                        <li class="list-group-item item-one  c-pointer">Preguntas acompa??antes</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8  res bg-light">
                    <div class="accordion  " id="accordion_general">
                        <div class="acordion_one">
                            <h3>GANANCIAS Y PAGOS</h3>
                            <div class="card ">
                                <div class="card-header" id="heading1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            ??C??mo empiezo a ganar Dinero en Smirrow?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        - Agregue una cuenta bancaria en la opci??n ???Cuentas Bancarias???, la cuenta bancaria
                                        debe
                                        estar en el mismo pa??s en donde realiz?? la apertura del perfil. Como m??todo de pago
                                        alternativo tendr?? una billetera electr??nica.
                                        <br>
                                        - Complete su configuraci??n de perfil. <br>
                                        - Aseg??rese que su cuenta est?? verificada. <br>
                                        - Aseg??rese de crear y colocar precios a sus servicios. <br>
                                        - Aseg??rese de crear ??lbumes con fotos y videos. <br>
                                        - Aseg??rese de configurar su horario en la opci??n ???Horarios Disponibles???. <br>
                                        Nota: Es posible que no pueda recibir solicitudes si su perfil no est?? verificado.
                                        <br>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            ??Cu??l es el porcentaje de pago?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Las personas prestadoras de servicios de entretenimiento para adultos reciben un
                                        70%
                                        de los ingresos de sus ganancias, incluye servicios y servicios especiales. <br>
                                        - El otro 30% est?? divido en el 19% del IVA y el 11% restante cubre pagos por uso de
                                        plataforma, soporte, alojamiento y todos los dem??s servicios.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            ??Por qu?? mi solicitud de pago fue rechazada?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Si recibe un mensaje de error o no se llev?? a cabo el procesamiento de su pago por
                                        alg??n motivo, comun??quese con el servicio de WhatsApp en la parte superior de la
                                        p??gina
                                        web o envi?? un mensaje al correo electr??nico pagos@smirrow.com. <br>
                                        Posibles razones de rechazo de su solicitud pago: <b></b>

                                        - Fondos insuficientes. <b></b>
                                        - El monto de dinero solicitado sobrepasa el monto de dinero de su casillero
                                        virtual.
                                        <b></b>
                                        <strong>Nota:</strong>Nota: Tenga en cuenta en anotar bien los n??meros de la cuenta
                                        bancaria, elegir bien el nombre de su banco, dejar claro nombres, apellidos y n??mero
                                        de
                                        identificaci??n del titular de la cuenta. Si registra mal y con errores los datos
                                        para
                                        solicitar los pagos, puede que no llegue el dinero que tiene en su casillero virtual
                                        a
                                        su cuenta bancaria. <br>
                                        - Por su seguridad en la opci??n ???Historial??? siempre quedaran registrados tus
                                        solicitudes
                                        de pagos y tus saldos.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            ??Por qu?? mis ganancias est??n pendientes y el pago no est?? disponible?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Tenga en cuenta en anotar bien los n??meros de la cuenta bancaria. <br>
                                        - Tenga en cuenta en seleccionar correctamente el nombre de su banco. <br>
                                        - Tenga en cuenta en escribir correctamente el nombre y apellidos del titular de la
                                        cuenta bancaria. <br>
                                        - Tenga en cuenta en escribir correctamente el n??mero de identificaci??n del titular
                                        de
                                        la cuenta bancaria. <br>
                                        - Si registra mal y con errores los datos para solicitar los pagos, puede que no
                                        llegue
                                        el dinero que tiene en su casillero virtual a su cuenta bancaria. <br><br>

                                        <strong>Nota:</strong> Solo podr?? realizar hasta dos solicitudes de transacciones de
                                        su
                                        casillero virtual a su cuenta bancaria personal. Si realiza una tercera solicitud de
                                        transacci??n de su casillero virtual a su cuenta bancaria o m??s solicitudes, los
                                        bancos
                                        realizaran descuentos con base en sus pol??ticas por ley por cada transacci??n
                                        realizada.


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            ??Cu??ndo puedo iniciar o realizar una solicitud de pago?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Cuando tenga dinero en su casillero virtual podr?? realizar solicitudes de la
                                        totalidad
                                        de su dinero o solo solicitar una parte de su dinero. <br>
                                        - En la opci??n ???Mi Dinero??? puedo realizar la solicitud de pagos. <br>
                                        - En la opci??n ???Mi Dinero??? podr?? ver un hist??rico de solicitudes de pagos. <br>
                                        - Tenga en cuenta en completar la opci??n ???Cuentas Bancarias???. <br>
                                        - Tenga en cuenta que su saldo actual para realizar solicitudes debe estar por
                                        encima
                                        del monto m??nimo de pago. <br>
                                        <br>
                                        <strong>Nota:</strong> Solo podr?? realizar hasta dos solicitudes de transacciones de
                                        su
                                        casillero virtual a su cuenta bancaria personal. Si realiza una tercera solicitud de
                                        transacci??n de su casillero virtual a su cuenta bancaria o m??s solicitudes, los
                                        bancos
                                        realizaran descuentos con base en sus pol??ticas por ley por cada transacci??n
                                        realizada.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            ??C??mo realizan los pagos los Usuarios?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse7" class="collapse" aria-labelledby="heading7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        - Todos los pagos se realizan por medio de e-payco y pay pal. <br>
                                        - Tenga en cuenta que por ahora no se aceptan pagos en efectivo, solo por medios
                                        electr??nicos.<br>
                                        <br>
                                        <strong>Nota:</strong> Tenga en cuenta que por recibir pagos por fuera de la
                                        plataforma
                                        Smirrow no responde, ni tiene obligaci??n o compromiso alguno.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Historial e Hist??rico de solicitudes
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse8" class="collapse" aria-labelledby="heading8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        - El historial es la opci??n en donde podr?? ver todas las transacciones realizadas y
                                        saldo actual. <br>
                                        - El hist??rico de solicitudes lo encontrar?? en la opci??n ???Mi Dinero??? en donde podr??
                                        ver
                                        todas las solicitudes de dinero realizadas.<br>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            ??Qu?? beneficios brinda la calificaci??n y los comentarios?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse9" class="collapse" aria-labelledby="heading9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        - Las calificaciones sobre estrellas y los buenos comentarios ayudan a tener
                                        posicionamiento dentro la plataforma, obteniendo ventajas y prerrogativas. <br>
                                        - La calificaci??n sobre estrellas va desde una estrella hasta cinco estrellas,
                                        siendo
                                        una estrella la calificaci??n m??s baja y cinco estrellas la calificaci??n m??s
                                        alta.<br>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading10">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Mi solicitud de pago ha sido procesado y aceptado, ??D??nde est???
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse10" class="collapse" aria-labelledby="heading10"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Por lo general, los fondos tardan entre 3 d??as y 5 d??as h??biles en aparecer en su
                                        cuenta bancaria, en casos excepcionales tardar hasta 10 d??as h??biles. <br>
                                        - Si ha pasado m??s de 10 d??as desde que su pago se registr?? como procesado, env??enos
                                        un
                                        correo electr??nico a pagos@smirrow.com ??? incluya una captura de pantalla de la
                                        opci??n de
                                        solicitud de pago, su n??mero ID, y los datos del titular de la cuenta bancaria,
                                        n??mero
                                        de cuenta y banco. Tambi??n debe anexar certificaci??n bancaria donde demuestre que no
                                        ha
                                        recibido su pago.


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading11">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            Retiro M??nimo
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse11" class="collapse" aria-labelledby="heading11"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - El monto m??nimo de retiro es de $30.000 pesos moneda colombiana.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading12">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            Cancelar mi solicitud de pago
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse12" class="collapse" aria-labelledby="heading12"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Para enviar una solicitud de cancelaci??n de pago, deber?? comunicarse con servicio
                                        de
                                        atenci??n al cliente. <br>
                                        - Incluya la fecha de solicitud, su n??mero ID, nombre del titular de la cuenta
                                        bancaria,
                                        n??mero de identificaci??n del titular de la cuenta bancaria, nombre del banco, y
                                        n??mero
                                        de la cuenta bancaria, tipo de cuenta.
                                        <br><br>
                                        <strong>Nota:</strong> No hay garant??a de que la operaci??n sea 100% exitosa, haremos
                                        todo lo posible para cancelar la transacci??n.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading13">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            ??Cu??nto recibo del pago?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse13" class="collapse" aria-labelledby="heading13"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - La cantidad que ve en su saldo actual es el monto exacto que recibir??. <br>
                                        - Podr?? realizar hasta dos transacciones por mes para no recibir descuentos por ley.
                                        <br>
                                        - Su banco puede cobrarle tarifas de conversi??n, por transacci??n, transferencias por
                                        recibir el dinero. <br>
                                        - Smirrow no tiene control sobre las pol??ticas de uso de su banco, tampoco sobre las
                                        tasas de cambio impuestas por su banco. <br>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading14">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                            ??C??mo ganan las agencias prestadoras de servicios de entretenimiento para
                                            adultos?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse14" class="collapse" aria-labelledby="heading14"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - La agencia que registra su personal prestador de servicios de entretenimiento para
                                        adultos obtiene la utilidad neta. <br>
                                        - La agencia es quien debe pactar el porcentaje de ganancias con su personal
                                        prestador
                                        de servicios entretenimiento para adultos. <br>


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading15">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                            ??Cu??nto puedo cobrar por lo servicios y servicios especiales?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse15" class="collapse" aria-labelledby="heading15"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <br> - Tenga en cuenta que puede poner el precio que usted quiera cobrar por los
                                        servicios y servicios especiales de entretenimiento para adultos.
                                        <br> - Tenga en cuenta que debe cobrar acorde a su tipo de servicio y rango del
                                        perfil
                                        que tenga dentro de la plataforma.
                                        <br> - Si es nivel Gold, el promedio para cobrar es desde $450.000 pesos por hora, o
                                        $850.000 pesos por una noche de 8 horas y de ah?? en adelante puede cobrar lo que
                                        desee y
                                        crea conveniente.
                                        <br> - Si es nivel Platimum, el promedio para cobrar es desde $250.000 pesos hora, o
                                        $450.000 pesos la noche o las 6 horas.
                                        <br> - Si es nivel Bronze, el promedio a cobrar es desde $100.000 pesos hora, o
                                        $250.000
                                        pesos las 6 horas o la noche.
                                        <br> - Tenga en cuenta que es libre de elegir el nivel que quiera y colocar los
                                        precios
                                        que quiera y crea convenientes.
                                        <br> - Tenga en cuenta que, seg??n la calidad de sus fotos, videos y la belleza de su
                                        cuerpo, por ejemplo, si es chica fitness, modelo entre otros puntos, har?? que el
                                        usuario
                                        vea la veracidad y credibilidad para pagar el valor de su servicio.

                                    </div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h3>CONSEJOS</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading16">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                            Para Tener en cuenta:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse16" class="collapse" aria-labelledby="heading16"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">


                                        - Tenga en cuenta en completar la configuraci??n de perfil y todas las opciones. <br>
                                        - Tenga en cuenta el bot??n de p??nico que le brindar?? seguridad en sus
                                        desplazamientos
                                        <br>
                                        - Tenga en cuenta en completar correctamente la informaci??n de cuentas bancarias
                                        para
                                        recibir los pagos sin inconvenientes. <br>
                                        - Tenga en cuenta en verificar el correo electr??nico que registre en la plataforma.
                                        <br>
                                        - Tenga en cuenta que entre mejor sea su contenido de videos y fotos, ser?? m??s
                                        llamativo
                                        para los usuarios. <br>
                                        - Complete todos los detalles para que su cuenta sea verificada. <br>


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading17">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                            Caracter??sticas del bot??n de p??nico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse17" class="collapse" aria-labelledby="heading17"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <br> - El bot??n aparece en la parte superior de la web y la web m??vil, al obturarlo
                                        llegar?? un aviso de alerta a la plataforma administrativa, la cual inmediatamente le
                                        aparecer?? la opci??n de llamar al 123 para contactar a la autoridad competente,
                                        entreg??ndoles la direcci??n de la ubicaci??n.
                                        <br> - Es una ayuda para las personas prestadoras de servicios que pueden usar
                                        cuando
                                        crean estar en peligro o en riesgo.
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <h3>CUENTA</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading18">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                            Requisitos de aprobaci??n de cuenta/Solicitud de Cuenta
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse18" class="collapse" aria-labelledby="heading18"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <br> - Para ser aprobada tu cuenta y hacer uso, deber?? enviar una foto selfie de
                                        primer
                                        plano, que sea reciente de su rostro y subirla en la opci??n ???Verificaci??n???,
                                        aseg??rese
                                        que su rostro sea completamente visible.
                                        <br> - La activaci??n de su cuenta se dar?? dentro de las siguientes 48 horas, no sin
                                        antes completar los requisitos m??nimos obligatorios de informaci??n solicitados por
                                        la
                                        plataforma.
                                        <br> - Las im??genes no se pueden editar, recortar, ni cambiar de tama??o una vez
                                        subidas
                                        a la plataforma en la opci??n ???Galer??a???
                                        <br> - Los videos no se pueden editar, ni cambiar de tama??o una vez subido a la
                                        plataforma en la opci??n ???Galer??a???.
                                        <br> - Los videos que subas a la opci??n ???Galer??a??? no pueden tener m??s de 30 segundos
                                        de
                                        duraci??n.
                                        <br> - Los archivos que subas a la plataforma deben ser un formato compatible como
                                        mp4,
                                        jpg, png entre otros.




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading19">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                            Mi cuenta esta inactiva/No me llegan solicitudes
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse19" class="collapse" aria-labelledby="heading19"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <br> - Si una persona prestadora de servicio deja de usar la plataforma por m??s 1
                                        a??o o
                                        m??s, esta aparecer?? inactiva.
                                        <br> - Si una persona prestadora de servicio es sancionada por 3 veces por prestar
                                        un
                                        mal servicio, mala calificaci??n, malos cometarios, su cuenta pasar?? a inactiva por
                                        un
                                        a??o.
                                        <br> - Tenga en cuenta que entre m??s contenido este creando, m??s visible ser?? para
                                        los
                                        usuarios en buscadores, en el posicionamiento de la plataforma.
                                        <br> - Tenga en cuenta que entre m??s contenido este creando, mejores comentarios y
                                        calificaciones tenga, Smirrow realizar?? recomendaciones totalmente gratis de su
                                        perfil.
                                        <br> - Tenga en cuenta que entre m??s completa esta toda la informaci??n solicitada
                                        por la
                                        plataforma, m??s f??cil y r??pido aparecer?? en el posicionamiento de la plataforma,
                                        como en
                                        su buscador.
                                        <br> - Tenga en cuenta que la plataforma no permite contenido sexual explicito,
                                        tampoco
                                        desnudos expl??citos, Smirrow esta enfocada en ser un sitio con glamur, estilo,
                                        clase,
                                        elegancia, sensualidad y dejar que fluya la imaginaci??n de los usuarios.
                                        <br> - Tenga en cuenta que el contenido sexual explicito y desnudos explicito ser??n
                                        eliminados por la plataforma.
                                        <br> - Tenga en cuenta que los usuarios pagaran solo por sus servicios creados
                                        dentro de
                                        la plataforma.
                                        <br> - Tenga en cuenta que puede crear servicios adicionales para genera ingresos
                                        adicionales.





                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading20">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                            Vinculaci??n a las Redes Sociales
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse20" class="collapse" aria-labelledby="heading20"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <br> - ??Smirrow le permite a la persona prestadoras de servicio compartir su perfil
                                        en
                                        redes sociales.
                                        <br> - Igualmente, Smirrow tiene permitido compartir el contenido de las personas
                                        prestadoras de servicio m??s sobresalientes de las plataformas en sus redes sociales,
                                        sin
                                        comprometer su privacidad y manteniendo reservado su rostro.
                                        <br> - Tenga en cuenta que se puede registrar con su cuenta de Google o Facebook.




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading21">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                            Solicitudes rechazadas por los siguientes motivos:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse21" class="collapse" aria-labelledby="heading21"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">


                                        - Selfie de mala calidad, rostro borroso. <br>
                                        - Selfie o foto de unos objetos, juguete, o mu??eco que no identifica a la persona.
                                        <br>
                                        - Selfie o foto no debe tener recortes, grietas, arrugas, perforaciones. <br>
                                        - Los datos m??nimos requeridos dentro de la plataforma no est??n completos. <br>
                                        - Subir contenido de terceros con protecci??n de derechos de autor. <br>
                                        - La persona que aparece en la portada, el los ??lbumes, o videos no coinciden. <br>
                                        - El titular de la cuenta no tiene m??s de 18 a??os. <br>



                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading22">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                            Cantidad de cuentas activas
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse23" class="collapse" aria-labelledby="heading22"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">


                                        - Solo puede tener dos cuentas activas, una como persona prestadora de servicios y
                                        otra
                                        como usuario. <br>
                                        - Solo pueden tener una cuenta registrada y activa con un correo electr??nico. <br>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading24">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                            ??Se permite la desnudez en Smirrow?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse24" class="collapse" aria-labelledby="heading24"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - No se permite la desnudez explicita, solo los semidesnudos est??n permitidos en
                                            las
                                            publicaciones siempre y cuando est??n dentro de las pautas establecidas. <br>
                                            - Los semidesnudos se permite por medio de contenido er??tico y glamuroso.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading25">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                            Contenido robado en sitios de terceros
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse25" class="collapse" aria-labelledby="heading25"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Smirrow se toma muy en serio la protecci??n del contenido de terceros, por lo
                                            que
                                            no
                                            permitimos que infrinjan derechos de autor.
                                            <br> - Smirrow emitir?? avisos formales de eliminaci??n contra todas las
                                            infracciones
                                            de
                                            derechos de autor denunciadas.
                                            <br> - Smirrow cuenta con un equipo de verificaci??n sobre derechos de autor,
                                            aplicada a los
                                            contenidos subidos.
                                            <br> - Tenga en cuenta que dentro de la plataforma podr?? realizar denuncias
                                            sobre
                                            contenido
                                            que infringe los derechos de autor.
                                        </p>





                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading26">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                            Creaci??n de cuenta de agencias de servicios de entretenimiento para adultos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse26" class="collapse" aria-labelledby="heading26"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Smirrow proveer?? un n??mero ??nico de identificaci??n dentro de la plataforma
                                            para
                                            que la agencia registre con ese n??mero a todas las personas prestadoras de
                                            servicios
                                            que tenga a disposici??n.
                                        </p>




                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3>CONFIGURACI??N DE CUENTA Y P??GINA</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading27">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                            CONFIGURACI??N DE CUENTA Y P??GINA
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse28" class="collapse" aria-labelledby="heading27"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Cualquier usuario que este registrado en Smirrow podr?? ver su perfil y todo su
                                            contenido publicado presente y pasado en su p??gina.
                                            <br> - Tenga en cuenta que todo el contenido debe cumplir con nuestros t??rminos
                                            y
                                            condiciones o estar sujeto a suspensi??n o cierre.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading29">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                            Ocultar tu perfil
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse29" class="collapse" aria-labelledby="heading29"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>- Es posible ocultar su perfil a direcciones IP nacionales en donde realiz?? la
                                            apertura de su cuenta y dejar que solo direcciones IP extranjeras vean su
                                            p??gina.
                                        </p>



                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading30">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                            Perfil P??blico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse30" class="collapse" aria-labelledby="heading30"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Los siguientes datos son los que estar??n visibles en su perfil p??blico:
                                            Usuario,
                                            genero, pa??s, ciudad, etnia, color de piel, color de ojos, color de cabello,
                                            altura
                                            de cabello, contextura, estilo, tatuajes, piercings, peso, altura, voy a
                                            domicilio,
                                            tengo sitio, recibo servicios, zonas de atenci??n y descripci??n.
                                            <br> - Se mostrar?? busto, cintura y cadera solo si ha seleccionado g??nero
                                            femenino o
                                            trans.
                                            <br> - Se mostrar??n sus ??lbumes de fotos y videos.
                                            <br> - Se mostrar?? su n??mero ID.
                                            <br> - Se mostrar?? su horario disponible.
                                            <br> - Se mostrar??n sus servicios, servicios adicionales y precios.
                                            <br> - Se mostrar??n sus calificaciones y comentarios.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading31">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                            Error P??gina no disponible
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse31" class="collapse" aria-labelledby="heading31"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>

                                            - Cuando un usuario informa que hay un error de p??gina no disponible cuando
                                            visitan
                                            su perfil debe tener en cuenta que puede tener activado el bloqueo de tener su
                                            p??gina publica solo para extranjeros, si el error persiste, comun??quese por
                                            medio
                                            del WhatsApp de servicio al cliente o env??e un correo electr??nico a
                                            ayuda@smirrow.com.
                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading32">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                            Etiquetado y URL
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse32" class="collapse" aria-labelledby="heading32"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Smirrow no permite que escriba direcciones de otras webs dentro del
                                            plataforma, al
                                            hacerlo, su cuenta no ser?? verificada, por lo que no podr?? tenerla activa.
                                            <br> - Tenga en cuenta que, si introduce una direcci??n/URL de otro sitio despu??s
                                            de
                                            tener su cuenta activada, estar?? ser?? desactivada.
                                            <br> - Tenga en cuenta que podr?? compartir la direcci??n/URL de su p??gina Smirrow
                                            y
                                            su n??mero ID en redes sociales y webs.


                                        </p>




                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3>PROMOCI??N DE SU CUENTA SMIRROW</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading33">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                            Consejos para personas prestadoras de servicios de entretenimiento para adultos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse33" class="collapse" aria-labelledby="heading33"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>

                                            - Publica contenido nuevo con frecuencia.
                                            <br> - Comparta su sitio en sus redes sociales existentes.
                                            <br> - Promocione su cuenta en cualquier lugar donde tenga seguidores.
                                            <br> - Tenga en cuenta que la calificaci??n cinco estrellas funciona para tener
                                            mejor
                                            posicionamiento en la plataforma.
                                            <br> - Tenga en cuenta que la calificaci??n cinco estrellas sirve para mostrar
                                            seguridad y confiabilidad a los usuarios que solicitan servicios.
                                            <br> - Tengan en cuenta que los comentarios positivos ayudan a generar confianza
                                            y
                                            seguridad con los usuarios que solicitan servicios.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading34">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                            Campa??as promocionales
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse34" class="collapse" aria-labelledby="heading34"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Smirrow realizar?? campa??as promocionales para el beneficio de las personas
                                            prestadoras de servicios de entretenimiento para adultos.

                                        </p>




                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3>PREGUNTAS T??CNICAS</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading35">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                            Tama??o de im??genes
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse36" class="collapse" aria-labelledby="heading35"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>

                                            - Tama??o de foto de perfil debe ser m??nimo de 110x110 p??xeles y resoluci??n de
                                            180x180 p??xeles m??nimo.
                                            <br> - Fotos cuadradas para publicaciones la medida ideal es de 1080x1080
                                            p??xeles y
                                            m??nimo de 640x640 p??xeles, y una medida m??xima de 2048x2048 p??xeles.
                                            <br> - Fotos verticales para publicaciones la medida ideal es de 1080x1350
                                            p??xeles y
                                            m??nimo 600x749 p??xeles.
                                            <br> - Fotos horizontales para publicaciones la medida ideal es de 1080x566
                                            p??xeles
                                            y m??nimo 600x400 p??xeles.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading37">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                            Tama??o de video
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse38" class="collapse" aria-labelledby="heading37"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - V??deo formato cuadrado para publicaciones la medida ideal es de 640x640
                                            p??xeles,
                                            es el formato m??s recomendado para subir video.
                                            <br> - V??deo formato horizontal para publicaciones la medida ideal es de 600x315
                                            p??xeles.
                                            <br> - V??deo formato vertical para publicaciones la medida ideal es de 600x750
                                            p??xeles.


                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading39">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                            C??digo para las agencias de entretenimiento para adultos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse39" class="collapse" aria-labelledby="heading39"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>

                                            - Cada agencia se le entregar?? un c??digo num??rico ??nico para que registre su
                                            personal prestador de servicios de entretenimiento para adultos.
                                            <br> - El c??digo identifica a la agencia y a su personal prestador de servicios
                                            de
                                            entretenimiento para adulto.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading40">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                            Contacto dentro de la plataforma con el usuario
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse40" class="collapse" aria-labelledby="heading40"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - El chat y mensajer??a se activar??n solamente cuando el usuario realice el pago
                                            sobre el servicio solicitado para poder tener comunicaci??n.
                                            <br> - Tenga en cuenta que Smirrow no tiene responsabilidad alguna sobre lo
                                            escrito,
                                            chateado y pactado por fuera de la plataforma.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading41">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                            Notificaciones y correo electr??nico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse42" class="collapse" aria-labelledby="heading41"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que validar el correo electr??nico permitir?? que lleguen a su
                                            dispositivo digital notificaciones de solicitudes por su servicio.
                                            <br> - Tenga en cuenta que a su dispositivo digital por medio del correo
                                            electr??nico
                                            registrado y validado, le permitir?? que ver notificaciones sobre los pagos que
                                            haga
                                            cada usuario por sus servicios.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading43">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                            Comentarios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse44" class="collapse" aria-labelledby="heading43"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que todos los comentarios realizados por los usuarios le
                                            ayudan a
                                            tener posicionamiento dentro de la plataforma y referencias con los usuarios.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading45">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                            Eliminar o editar publicaciones
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse45" class="collapse" aria-labelledby="heading45"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Podr?? editar su configuraci??n de perfil las veces que crea necesarias.
                                            <br> - Podr?? editar o eliminar galer??a de fotos y v??deos las veces que considere
                                            necesarias.
                                            <br> - Podr?? editar o eliminar los servicios y servicios especiales las veces
                                            que
                                            considere necesarias.
                                            <br> - Podr?? editar el horario disponible las veces que considere necesarias.
                                            <br> - Podr?? editar o eliminar las cuentas bancarias que considere necesarias.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading46">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                            Marca de agua Smirrow
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse47" class="collapse" aria-labelledby="heading46"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Puede activar la marca de agua para proteger con derechos de autor su
                                            contenido de
                                            fotos y v??deos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading47">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                            Idiomas
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse47" class="collapse" aria-labelledby="heading47"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La plataforma se encuentra en dos idiomas por ahora, los cuales son espa??ol e
                                            ingl??s.
                                            <br> - Tenga en cuenta que, para cambiar el idioma, al comienzo de la p??gina de
                                            Smirrow, puede dirigirse a la parte superior de la p??gina y encontrar?? dos
                                            opciones
                                            de banderas, una para espa??ol y otra para ingl??s.
                                            <br> - Tenga en cuenta que, para cambiar el idioma ya registrado dentro de la
                                            plataforma, deber?? dirigirse a la parte superior en la opci??n de imagen y
                                            nombre, a
                                            dar click se extender?? un men?? en donde encontrar?? dos opciones de banderas, una
                                            para espa??ol y otra para ingl??s.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading48">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                            Zonas para prestar los servicios de entretenimiento para adultos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse48" class="collapse" aria-labelledby="heading48"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La persona prestadora del servicio de entretenimiento para adultos podr??
                                            elegir el
                                            pa??s, la ciudad y localidades donde presta sus servicios.
                                            <br> - Tenga en cuenta que tambi??n podr?? elegir otros pa??ses, ciudades y
                                            municipios
                                            en donde acepta que haya desplazamientos.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading49">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                            Geolocalizaci??n
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse49" class="collapse" aria-labelledby="heading49"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La persona prestadora del servicio, podr?? activar el sistema de
                                            geolocalizaci??n en
                                            momentos de desplazamientos para su seguridad.

                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3> IMPUESTOS</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading50">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                                            Impuesto del IVA
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse50" class="collapse" aria-labelledby="heading50"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - El impuesto al valor agregado conocido como IVA, es un impuesto al consumo que
                                            se
                                            agrega a valor de los bienes o servicios adquiridos, la tasa var??a seg??n el
                                            pa??s. El
                                            impuesto se agrega al valor del producto o servicio en el momento de la compra y
                                            se
                                            paga directamente a la autoridad fiscal correspondiente.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading51">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                            Modificaciones y nuevos impuestos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse51" class="collapse" aria-labelledby="heading51"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Smirrow este sujeto y obligado a realizar cambios, modificaciones o agregar
                                            nuevos
                                            impuestos seg??n los cambios sobre las normas y leyes de cada pa??s en el que la
                                            plataforma este activa y funcionando.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading51">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                            Pagos de impuestos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse51" class="collapse" aria-labelledby="heading51"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Smirrow paga directamente todo el IVA recaudado a la autoridad y entidad
                                            correspondiente, con base en la normatividad legal de cada pa??s en la que est??
                                            funcionando la plataforma.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading52">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                            Cobros del impuesto de IVA
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse52" class="collapse" aria-labelledby="heading52"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Si una persona prestadora de servicios de entretenimiento para adultos reside
                                            en
                                            el pa??s diferente en donde solicita y realiza el pago el Usuario del pa??s, se
                                            cobrar?? el impuesto de IVA seg??n el pa??s en donde resida y con base en su normar
                                            legales.
                                            <br> - Tenga en cuenta que el impuesto del IVA estar?? sujeto al pa??s donde
                                            resida.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading53">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                            ??Con qui??n puedo comunicarme si tengo m??s preguntas?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse54" class="collapse" aria-labelledby="heading53"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Si tiene alguna pregunta adicional puede contactar por WhatsApp o por el
                                            correo
                                            electr??nico ayuda@smirrow.com .

                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3> CUMPLIMIENTO DEL SERVICIO</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading55">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                            ??Qu?? pasa si incumplo prestar un servicio?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse55" class="collapse" aria-labelledby="heading55"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Si la persona prestadora de servicios de entretenimiento para adultos incumple
                                            con
                                            el servicio que el usuario ya ha pagado, tendr?? una sanci??n de 1 mes de no poder
                                            usar la plataforma digital.
                                            <br> - Tenga cuenta que despu??s de 3 sanciones, su cuenta ser?? desactivada por 1
                                            a??o.
                                            <br> - Tenga en cuenta que, al incumplir, el dinero pagado por el servicio, ser??
                                            devuelto al usuario en su totalidad.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading56">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                            Justificaci??n del incumplimiento del servicio
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse57" class="collapse" aria-labelledby="heading56"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Si la persona prestadora del servicio de entretenimiento para adultos presenta
                                            una
                                            excusa legal o una prueba contundente del porque incumpli?? el servicio
                                            solicitado
                                            por parte del usuario, no ser?? sancionada.
                                            <br> - Tenga en cuenta que, si incumple con la prestaci??n del servicio y no
                                            presenta
                                            excusa legal o prueba contundente, ser?? sancionada.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading57">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                            T??rminos o tiempo para presentar pruebas por incumplimiento
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse57" class="collapse" aria-labelledby="heading57"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La persona prestadora del servicio tendr?? un termino de 8 d??as calendario para
                                            presentar la excusa legal o prueba contundente del porque no cumpli?? el servicio
                                            solicitado.
                                            <br> - Para presentar las excusa legal o prueba contundente que demuestre del
                                            porque
                                            incumpli??, envi?? un correo con su casi a legal@smirrow.com .

                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3>SEGURIDAD</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading58">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse58" aria-expanded="false" aria-controls="collapse58">
                                            Bot??n de p??nico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse58" class="collapse" aria-labelledby="heading58"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Es un plus que Smirrow les brinda a las personas prestadoras de servicio para
                                            alertar a la parte de seguridad administrativa de la plataforma que la persona
                                            prestadora del servicio est?? siendo agredida, violentada, est?? en riesgo o en
                                            peligro, para que pueda recibir ayuda en el menor tiempo posible de la autoridad
                                            competente.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading59">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
                                            Geolocalizaci??n
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse59" class="collapse" aria-labelledby="heading59"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La persona prestadora del servicio, podr?? activar el sistema de
                                            geolocalizaci??n en
                                            momentos de desplazamientos para su seguridad
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading60">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                            Seguridad en los pagos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse61" class="collapse" aria-labelledby="heading60"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Ning??n usuario prestar?? el servicio de entretenimiento para adultos hasta que
                                            el
                                            usuario haya realizado el pago por el servicio solicitado

                                            <strong>NOTA:</strong> Tenga en cuenta que el usuario al realizar una solicitud
                                            por
                                            un servicio, a la persona prestadora del servicio le llegar?? una notificaci??n
                                            para
                                            que acepte o rechace el servicio solicitado, si el servicio es rechazado, se
                                            cancela, pero si el servicio es aceptado, al usuario le llegar?? una notificaci??n
                                            informando que fue aceptada la solicitud para prestar el servicio, por lo que en
                                            esa
                                            misma notificaci??n le llegar?? la orden de pago, paso siguiente, el usuario
                                            realiza
                                            el pago y a la persona prestadora del servicio le llegar?? una nueva notificaci??n
                                            comunicando que el pago por el servicio de realizo con ??xito.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border">
                                <div class="card-header " id="heading61">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                            Medios para realizar los pagos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse61" class="collapse " aria-labelledby="heading61"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Los ??nicos medios habilitados y aceptados por Smirrow son por medio de las
                                            plataformas epayco y paypal.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acordion_two d-none">
                            <h3>REGISTRO</h3>
                            <div class="card ">
                                <div class="card-header" id="heading2_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_1" aria-expanded="false" aria-controls="collapse2_1">
                                            ??Por qu?? registrarse?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_1" class="collapse" aria-labelledby="heading2_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        <p>
                                            - Registrarse le brinda acceso a todos los cat??logos y contenido privado que
                                            publican las personas prestadoras de servicios de entretenimiento para adultos.
                                            <br>
                                            - Al solicitar un servicio se activa un chat y mensajer??a privada para
                                            comunicarse entre las partes. <br>
                                            - Registrarse en Smirrow es totalmente gratis.<br>
                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-header" id="heading2_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_2" aria-expanded="false" aria-controls="collapse2_2">
                                            ??Por qu?? medios me puedo registrar?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_2" class="collapse" aria-labelledby="heading2_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Puede registrarse por medio de su correo electr??nico. <br>
                                            - Puede registrarse por medio de Facebook, Google o Twitter.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_3" aria-expanded="false" aria-controls="collapse2_3">
                                            ??C??mo encontrar un perfil?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_3" class="collapse" aria-labelledby="heading2_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - En inicio aparecer?? la opci??n de b??squeda con la imagen de una lupa, en donde
                                            podr?? realizar b??squedas si conoce el nombre de la persona prestadora de
                                            servicio que quiere contactar. <br>
                                            - En la opci??n de b??squeda tambi??n podr?? realizar consultas filtrando tipo de
                                            servicio, precios, color de piel, color de cabello, etc. <br>
                                            - Al realizar b??squedas gen??ricas, los resultados que arroja la plataforma ser??n
                                            de las personas prestadoras de servicios de entretenimiento para adultos que
                                            mejor este posicionadas.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_4" aria-expanded="false" aria-controls="collapse2_4">
                                            No puedo registrarme
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_4" class="collapse" aria-labelledby="heading2_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Debe verificar que su correo electr??nico est?? escrito correctamente y
                                            completo. <br>
                                            - Si abre un perfil con Facebook, Twitter o Google, verifique que est??
                                            introduciendo correctamente su contrase??a. <br>
                                            - Utilice un navegador web actualizado. <br>
                                            - Elimine cookies, historial y su historia de navegaci??n en la opci??n
                                            configuraci??n de su navegador. <br>
                                            - Actualice su navegador oprimiendo Ctrl + F5. <br>
                                            - Si tiene inconvenientes para registrarse o estos persisten escribanos a
                                            ayuda@smirrow.com . <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_5" aria-expanded="false" aria-controls="collapse2_5">
                                            No puedo encontrar un perfil despu??s de registrarme
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_5" class="collapse" aria-labelledby="heading2_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Algunas personas prestadoras de servicios de entretenimiento para adultos
                                            bloquean el acceso, direcciones IP o Usuarios, si esto pasa, no tendr?? acceso al
                                            perfil de la persona prestadora del servicio.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_6" aria-expanded="false" aria-controls="collapse2_6">
                                            ??El registro caduca o tiene vencimiento?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_6" class="collapse" aria-labelledby="heading2_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Los perfiles registrados quedar??n inactivos despu??s de doce meses de no tener
                                            movimiento alguno.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_7" aria-expanded="false" aria-controls="collapse2_7">
                                            Ver el perfil y galer??a de v??deos de la persona prestadora de servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_7" class="collapse" aria-labelledby="heading2_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Puede identificar el perfil de la persona por medio de su n??mero ID, nombre e
                                            imagen de portada. <br>
                                            - Puede dar click sobre la imagen de portada para ingresar la informaci??n de la
                                            persona prestadora de servicio, en donde podr?? ver las opciones de galer??a,
                                            perfil, horario disponibilidad, precio de servicios y servicios especiales,
                                            comentarios y calificaciones.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>PAGOS POR SERVICIOS</h3>
                            <div class="card">
                                <div class="card-header" id="heading2_8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_8" aria-expanded="false" aria-controls="collapse2_8">
                                            Medios de pago
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_8" class="collapse" aria-labelledby="heading2_8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Actualmente Smirrow maneja solo dos medios de pago, e-payco y PayPal. <br>
                                            - El usuario podr?? realizar los pagos a trav??s las opciones que brindan e-payco
                                            y PayPal. <br>
                                            - Tenga en cuenta que Smirrow no se hace responsable de los pagos que el usuario
                                            realice por fuera de la plataforma. <br>
                                            - Tenga en cuenta que ePayco y PayPal brindan opciones de pago en efectivo, con
                                            tarjetas, PSE, aplicaciones digital etc. <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_9" aria-expanded="false" aria-controls="collapse2_9">
                                            Reembolsos y cumplimiento
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_9" class="collapse" aria-labelledby="heading2_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La devoluci??n del pago se realiza solo cuando se presente una excepci??n dentro
                                            de las pautas de Smirrow.
                                            <br> - Tenga en cuenta que, si la persona prestadora de servicios de
                                            entretenimiento para adultos incumple con el servicio solicitado, su pago ser??
                                            reembolsado.
                                            <br> - Tenga en cuenta que si al solicitar un servicio no recibe el servicio por
                                            incumplimiento de lo pactado den de la solicitud, no se le realizar?? reembolso
                                            de su pago.
                                            <br> - Tenga en cuenta que las excepciones para la devoluci??n del pago realizado
                                            son por un caso fortuito o de fuerza mayor, por lo que deber?? presentar pruebas
                                            como por ejemplo un documento legal, un documento m??dico, un video, fotos etc.
                                            <br> - Tenga cuenta que al incumplir sin presentar excusa o pruebas y la persona
                                            prestadora del servicio cumple con ir a prestar el servicio de entretenimiento
                                            para adultos, no se le reembolsar?? el dinero y se realizar?? el pago completo a
                                            la persona prestadora de servicio.
                                            <br> - Tenga en cuenta que como usuario tendr?? ocho (8) d??as calendario para
                                            presentar excusa legal, excusa media o pruebas por el incumplimiento, t??rmino
                                            que se contar?? a partir del siguiente d??a de la fecha incumplida del servicio
                                            solicitado.
                                            <br> - Tenga en cuenta que Smirrow tendr?? ocho (8) d??as h??biles para estudiar el
                                            caso y revisar las pruebas presentadas para tomar una decisi??n la cual ser??
                                            comunicada el usuario.
                                            <br> - Tenga en cuenta que los ocho (8) d??as h??biles se contar??n a partir del
                                            siguiente d??a del cumplimiento del octavo d??a que tiene el usuario para
                                            presentar excusas y pruebas.
                                            <br> - Puede enviar su caso a legal@smirrow.com .


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_10">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_10" aria-expanded="false" aria-controls="collapse2_10">
                                            Seguridad en los pagos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_10" class="collapse" aria-labelledby="heading2_10"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Smirrow cuenta con seguridad digital en su plataforma, para anti hackeo con
                                            certificados de seguridad e inyecciones de c??digo.
                                            <br> - Tenga en cuenta que por seguridad solo esta permitido realizar pagos a
                                            trav??s de e-payco y PayPal.
                                            <br> - Su pago realizarlo por transacci??n se ver?? reflejado en el extracto como
                                            servicios especiales.
                                            <br> - Si su pago rebota escribanos a pagos@smirrow.com .

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_11">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_11" aria-expanded="false" aria-controls="collapse2_11">
                                            Fallos al realizar un pago
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_11" class="collapse" aria-labelledby="heading2_11"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Una transacci??n fallida puede ser debido a la actualizaci??n de la plataforma
                                            e-payco y PayPal, por lo que tendr??s que intentar hasta 3 veces o intentar 24
                                            horas despu??s.
                                            <br> - Una transacci??n fallida puede ser por ingresar de forma fallida los
                                            datos:
                                            <br> o Una limitante por parte de su banco para realizar transacciones por
                                            internet.
                                            <br> o Los detalles de la tarjeta de cr??dito ingresados incorrectamente por
                                            usted.
                                            <br> o Fondos insuficientes en su cuenta.
                                            <br> o Direcci??n, c??digo postal o datos del c??digo postal incorrectos ingresados
                                            por usted.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3> NOTIFICACIONES Y CARRITO DE COMPRAS</h3>
                            <div class="card">
                                <div class="card-header" id="heading2_12">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_12" aria-expanded="false" aria-controls="collapse2_12">
                                            Carrito de compras
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_12" class="collapse" aria-labelledby="heading2_12"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Las solicitudes de servicios que haga se agregar??n al carrito de compras el
                                            cual podr?? ver en la parte superior derecha del sitio, al dar click se despliega
                                            el listado de compras a realizar.
                                            <br> - Tenga en cuenta que puede agregar todos los servicios que quiera al
                                            carrito de compras.
                                            <br> - En la opci??n del carrito de compras podr?? dar click a confirmar solicitud
                                            para que a la persona prestadora de servicio le llegue la notificaci??n sobre la
                                            solicitud.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_13">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_13" aria-expanded="false" aria-controls="collapse2_13">
                                            Notificaciones
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_13" class="collapse" aria-labelledby="heading2_13"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Cuando confirma la solicitud del servicio, a la persona prestadora del
                                            servicio de entretenimiento para adultos le llega una notificaci??n para que
                                            acepte la solicitud del servicio.
                                            <br> - Si la persona prestadora del servicio de entretenimiento para adultos
                                            acepta, inmediatamente le llega una notificaci??n al usuario confirmando y
                                            solicitando realice el pago.
                                            <br> - El realizar el pago el usuario, a la persona prestadora del servicio de
                                            entretenimiento para adultos le llega una notificaci??n sobre el pago realizado
                                            por su servicio.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>PROMOCIONES</h3>
                            <div class="card">
                                <div class="card-header" id="heading2_14">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_14" aria-expanded="false" aria-controls="collapse2_14">
                                            Ofertas de promociones
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_14" class="collapse" aria-labelledby="heading2_14"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La plataforma se guarda y reserva cualquier promoci??n.
                                            <br> - Tenga en cuenta que las promociones pueden variar seg??n fecha y ??poca del
                                            a??o.
                                            <br> - Las promociones que se hacen dentro de la plataforma son exclusivas para
                                            sorprender a sus usuarios.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>CHAT Y MENSAJER??A </h3>
                            <div class="card">
                                <div class="card-header" id="heading2_15">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_15" aria-expanded="false" aria-controls="collapse2_15">
                                            Contacto con prestadores de servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_15" class="collapse" aria-labelledby="heading2_15"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que la plataforma solo habilita el chat y mensajer??a cuando el
                                            usuario haya realizado el pago por el servicio.
                                            <br> - Tenga en cuenta que Smirrow no tiene responsabilidad alguna sobre lo que
                                            acuerde por fuera de la plataforma.
                                            <br> - El chat y mensajer??a se encuentra encriptado por lo que es informaci??n
                                            confidencial y asegurada.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>IMPUESTOS</h3>
                            <div class="card">
                                <div class="card-header" id="heading2_16">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_17" aria-expanded="false" aria-controls="collapse2_17">
                                            Impuesto del IVA
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_17" class="collapse" aria-labelledby="heading2_16"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - El impuesto al valor agregado es un impuesto al consumo que se agrega al valor
                                            de los bienes o servicios adquiridos en un pa??s.
                                            <br> - La tasa del impositiva espec??fica del impuesto del IVA var??a seg??n el
                                            pa??s.
                                            <br> - Como lo dice su propio nombre el impuesto se agrega al producto o
                                            servicio en el momento de la compra por el servicio.
                                            <br> - Tenga en cuenta que debido a la variaci??n por el pago del impuesto el
                                            valor puede cambiar, ya que la tasa a pagar lo determina cada pa??s en donde
                                            realiza la compra.
                                            <br> - Tenga en cuenta que este impuesto se paga directamente a la autoridad
                                            competente seg??n el pa??s.
                                            <strong>NOTA:</strong> Si tiene alguna otra pregunta, nos puede escribir a
                                            legal@smirrow.com .
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_17">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_17" aria-expanded="false" aria-controls="collapse2_17">
                                            Qui??n determina el valor del impuesto del IVA
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_17" class="collapse" aria-labelledby="heading2_17"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que puede encontrar por sus medios la tasa correspondiente
                                            para que verifique el impuesto.
                                            <br> - El pa??s donde se encuentra es quien impone la tasa del impuesto.
                                            <br> - Los cambios sobre la tasa del impuesto de IVA de realizan solo bajo los
                                            t??rminos de ley seg??n el pa??s.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_18">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_18" aria-expanded="false" aria-controls="collapse2_18">
                                            ??Se aplica IVA a todos los servicios?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_18" class="collapse" aria-labelledby="heading2_18"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Depende del pa??s en donde se grave el impuesto.
                                            <br> - Tenga en cuenta que la mayor??a de pa??ses aplican el impuesto del IVA
                                            sobre productos y servicios.
                                            <br> - Cualquier compra realizada por el Usuario residente en un pa??s que cobre
                                            IVA estar?? sujeto a la tasa local.
                                            <strong>NOTA:</strong> Tenga en cuenta que Smirrow cobra el IVA solo en los
                                            pa??ses que aplican este impuesto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>
                                SEGURIDAD
                            </h3>
                            <div class="card">
                                <div class="card-header" id="heading2_19">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_19" aria-expanded="false" aria-controls="collapse2_19">
                                            Geolocalizaci??n
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_19" class="collapse" aria-labelledby="heading2_19"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que las personas prestadoras de servicios de entretenimiento
                                            para adultos pueden activar la geolocalizaci??n por su seguridad en
                                            desplazamientos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_20">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_20" aria-expanded="false" aria-controls="collapse2_20">
                                            Direcci??n y tel??fono
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_20" class="collapse" aria-labelledby="heading2_20"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tengan en cuenta que la plataforma solicita de forma obligatoria al Usuarios
                                            dejar registrada la direcci??n en donde cita a la persona prestadora del servicio
                                            de entretenimiento para adultos por seguridad de las partes.
                                            <br> - Tenga en cuenta que la plataforma solicita de forma obligatoria al
                                            Usuario dejar registro del n??mero de contacto.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_21">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_21" aria-expanded="false" aria-controls="collapse2_21">
                                            Pagos por servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_21" class="collapse" aria-labelledby="heading2_21"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que Smirrow no acepta pagos por fuera de la plataforma,
                                            actualmente los pagos se hacen solo a trav??s de ePayco y PayPal.

                                            <br> <strong>NOTA:</strong> Todos los datos solicitados por Smirrow est??n bajo
                                            la protecci??n legal de seguridad, pol??ticas de uso y manejo de datos personales
                                            seg??n la normatividad de cada pa??s.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>
                                INICIO
                            </h3>
                            <div class="card">
                                <div class="card-header" id="heading2_22">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_22" aria-expanded="false" aria-controls="collapse2_22">
                                            Avisos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_22" class="collapse" aria-labelledby="heading2_22"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que al ingresar a Smirrow, siempre se encontrar?? con avisos de
                                            ayuda que recomendamos tener en cuenta para un buen uso de la plataforma.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_23">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_23" aria-expanded="false" aria-controls="collapse2_23">

                                            Verificaci??n de correo

                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_23" class="collapse" aria-labelledby="heading2_23"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que es obligatorio verificar su correo electr??nico registrado
                                            para que pueda recibir notificaciones y realizar solicitudes de servicios
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_24">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_24" aria-expanded="false" aria-controls="collapse2_24">
                                            Configuraci??n de perfil
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_24" class="collapse" aria-labelledby="heading2_24"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tengan en cuenta que entre m??s completa tenga su informaci??n m??s confianza le
                                            tendr?? la persona prestadora de servicios de entretenimiento para adultos para
                                            aceptar su solicitud sobre un servicio.
                                            <br> - Tenga en cuenta que no podr?? solicitar servicios si no completa la
                                            informaci??n de perfil.
                                            <br> - Tenga en cuenta que los datos son privados y no se mostrar??n a terceros y
                                            solo unos pocos a la persona prestadora del servicio de entretenimiento para
                                            adultos.
                                            <br> - Los datos que son visibles a la persona prestadora de servicios de
                                            entretenimiento para adultos son nombre de usuario, ubicaci??n, pa??s, ciudad y
                                            direcci??n.
                                            <br> <strong> NOTA:</strong> Por su seguridad puede usar un nombre de usuario
                                            diferente al propio ante las personas prestadoras de servicios.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_25">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_25" aria-expanded="false" aria-controls="collapse2_25">
                                            Verificaci??n
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_25" class="collapse" aria-labelledby="heading2_25"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Por su seguridad y la seguridad de nuestras personas prestadoras de servicios
                                            y ofertantes la plataforma le solicita una foto de su perfil para verificar su
                                            cuenta.
                                            <br> - Tenga en cuenta que la foto no ser?? vista por terceros, ni entregada a
                                            terceros, ni por la persona prestadora de servicio de entretenimiento para
                                            adultos.
                                            <br> <strong>NOTA:</strong> Smirrow da prioridad a la protecci??n de identidad de
                                            nuestros usuarios y personas prestadoras de servicios de entretenimiento para
                                            adultos, por lo cual no corren riesgo de ser identificadas por terceros o por
                                            alguna de las partes.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_26">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_26" aria-expanded="false" aria-controls="collapse2_26">
                                            Idiomas
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_26" class="collapse" aria-labelledby="heading2_26"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La plataforma se encuentra en dos idiomas por ahora, los cuales son espa??ol e
                                            ingl??s.
                                            <br> - Tenga en cuenta que, para cambiar el idioma, al comienzo de la p??gina de
                                            Smirrow, puede dirigirse a la parte superior de la p??gina y encontrar?? dos
                                            opciones de banderas, una para espa??ol y otra para ingl??s.
                                            <br> - Tenga en cuenta que, para cambiar el idioma ya registrado dentro de la
                                            plataforma, deber?? dirigirse a la parte superior en la opci??n de imagen y
                                            nombre, a dar click se extender?? un men?? en donde encontrar?? dos opciones de
                                            banderas, una para espa??ol y otra para ingl??s.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_27">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_27" aria-expanded="false" aria-controls="collapse2_27">
                                            Marca de agua Smirrow
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_27" class="collapse" aria-labelledby="heading2_27"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que el contenido dentro de plataforma es de uso exclusivo de
                                            Smirrow, y est?? protegido por derechos de autor.
                                            <br> - Las im??genes o videos que descargue desde Smirrow quedaran con marca de
                                            agua y el uso sin autorizaci??n por parte de la plataforma podr?? llevar a
                                            sanciones legales.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_28">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_28" aria-expanded="false" aria-controls="collapse2_28">
                                            Ubicaci??n de las personas prestadoras de servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_28" class="collapse" aria-labelledby="heading2_28"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que podr?? encontrar personas prestadoras de servicios de
                                            entretenimiento para adultos por pa??s y ciudad.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_29">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse2_29" aria-expanded="false" aria-controls="collapse2_29">
                                            Desplazamientos de las personas prestadoras de servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_29" class="collapse" aria-labelledby="heading2_29"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Las personas prestadoras de servicios de entretenimiento para adultos en su
                                            perfil tendr??n publicado el pa??s, la ciudad, las zonas o localidades en donde
                                            prestan sus servicios, as?? mismo como desplazamientos a otras ciudades o
                                            municipios.
                                            <br> - Tenga en cuenta que las persona prestadora del servicio de
                                            entretenimiento para adultos solo podr?? prestar sus servicios solicitando en la

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" acordion_three d-none">
                            <h3>Cuenta</h3>
                            <div class="card ">
                                <div class="card-header" id="heading3_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_1" aria-expanded="false" aria-controls="collapse3_1">
                                            No puedo ingresar sesi??n en mi cuenta, mi nombre y usuario son incorrectos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_1" class="collapse" aria-labelledby="heading3_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Revise su correo electr??nico para ver su si cuenta ha sido marcada como sospechosa o restringida.
                                         <br>   -	Si tiene una sanci??n sobre los t??rminos del servicio es posible que este bloqueado temporalmente. 
                                         <br>   -	Si tiene una cuenta anterior en Smirrow con una sanci??n, es posible que su cuenta actual sea restringida.
                                         <br>   -	Si cree que ha sido bloqueado por error comun??quese con ayuda@smirrow.com con informaci??n o evidencia que nos permita revisar su situaci??n dentro de Smirrow. 

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_2" aria-expanded="false" aria-controls="collapse3_2">
                                            Eliminar su cuenta
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_2" class="collapse" aria-labelledby="heading3_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Ingrese los datos solicitados en la opci??n eliminar cuenta, su cuenta ser?? eliminada y se enviara un correo electr??nico de confirmaci??n en donde se le informar?? que su cuenta fue eliminada con ??xito. 
   <br> -	Tenga cuenta que su cuenta ser?? eliminada completamente no podr?? recuperarla, ni ser restaurada, deber?? crear una nueva cuenta y volver a configurar todo su perfil. 

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_3" aria-expanded="false" aria-controls="collapse3_3">
                                            Reportar una cuenta
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_3" class="collapse" aria-labelledby="heading3_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Para denunciar una cuenta de una persona prestadora de servicio tome el n??mero del ID y env??enos un correo electr??nico a legal@smirrow.com con la informaci??n o evidencia que nos permita revisar el caso dentro de Smirrow. 
<br> -	Para denunciar a un usuario que solicita un servicio, tome los datos del servicio, registro, d??a, hora, fecha, nombre usuario e informaci??n o evidencia y escribanos al correo electr??nico legal@smirrow.com y revisaremos su caso dentro de Smirrow. 
<br> -	Si alguna de las partes a infringido o a cometido un delito punible interponga una denuncia ante la autoridad legal competente. 

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>SEGURIDAD DE LA CUENTA</h3>
                            <div class="card ">
                                <div class="card-header" id="heading3_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_4" aria-expanded="false" aria-controls="collapse3_4">
                                            ??Qu?? hacer si sospecha que alguien m??s ha accedido a su cuenta?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_4" class="collapse" aria-labelledby="heading3_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Si sospecha que su cuenta ha sido comprometida, inicie sesi??n e intente cambiar su contrase??a de inmediato. 
                                         <br>   -	Para modificar su contrase??a o recuperar su contrase??a dir??jase a la p??gina de login e ingres?? a la opci??n ???Olvid?? mi contrase??a???.
                                         <br>   -	Si al realizar estos cambios aun no puede iniciar sesi??n, comun??quese con soporte para obtener ayuda al correo electr??nico ayuda@smirrow.com .

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>PREGUNTAS T??CNICAS</h3>
                            <div class="card ">
                                <div class="card-header" id="heading3_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_5" aria-expanded="false" aria-controls="collapse3_5">
                                           	Ajustes del correo electr??nico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_5" class="collapse" aria-labelledby="heading3_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Una direcci??n de correo electr??nico verificada garantiza que reciba notificaciones importantes del sistema, podr?? restablecer su contrase??a y recibir actualizaciones sobre su cuenta. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_6" aria-expanded="false" aria-controls="collapse3_6">
                                            ??Tiene una aplicaci??n digital para IOS o Android?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_6" class="collapse" aria-labelledby="heading3_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Smirrow si tendr?? aplicaciones digitales para tu m??vil, la cual podr??s descargar directamente desde la plataforma web de Smirrow.
                                        <br>   -	La plataforma funciona perfectamente desde un computador de escritorio y dispositivo m??vil smartphone y tablet a trav??s de su web y web m??vil. 
                                        <br>   -	La ventaja de descargar nuestra app desde la plataforma es que no deber?? estar actualizando constantemente, esto se har?? de forma autom??tica.
                                        <br>   -	Nuestra tecnolog??a siempre est?? mejorando, cambiando, actualiz??ndose para que brindar un excelente funcionamiento y uso del producto. 
                                        <br>   -	No debe descargar ninguna aplicaci??n digital por fuera de la plataforma, si es as??, consid??relo sospechoso y debe informarnos a el correo electr??nico legal@smirrow.com.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_7" aria-expanded="false" aria-controls="collapse3_7">
                                           ??C??mo crear un acceso directo en mi dispositivo m??vil?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_7" class="collapse" aria-labelledby="heading3_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Las maneras m??s f??ciles de ingresar a Smirrow es ir a su navegador y agregarlo a la pantalla de inicio.
<br> -	Si tiene un IPhone o iPad, abra safari en su dispositivo m??vil, navegue a Smirrow, toque la opci??n ???compartir??? en la parte inferior, este icono se ve como cuadrado con una flecha apuntando hac??a arriba y seleccione la opci??n ???Agregar a la pantalla de inicio???, listo tendr?? acceso a Smirrow como si tuviera una aplicaci??n digital. 
<br> -	Si tiene un Android, abra Chrome en su dispositivo m??vil, navegue a Smirrow, toque ???opciones???, puede aparecer tres puntos verticales en la parte superior, despu??s seleccione la opci??n ???a??adir a pantalla de inicio???, luego seleccione a??adir y listo, se agregar?? un acceso directo similar a una aplicaci??n digital y puede seguir ingresando r??pido a Smirrow.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_8" aria-expanded="false" aria-controls="collapse3_8">
                                           Direcci??n de privacidad y t??rminos 
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_8" class="collapse" aria-labelledby="heading3_8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Tenga en cuenta que seg??n la normatividad legal del pa??s donde se encuentre y la evoluci??n de la tecnolog??a, har?? que las pol??ticas de t??rminos y condiciones puedan cambiar. 
                                         <br>  -	Se actualizan constantemente las condiciones de servicio como un gran esfuerzo para continuo para simplificar y mejorar el funcionamiento de Smirrow para todos los usuarios y personas prestadoras de servicios de entretenimiento para adultos. 
                                         <br>  -	Tenga en cuenta que, si no llega a aceptar y no esta de acuerdo con los nuevos t??rminos que se lleguen a presentar, debe eliminar su perfil y dejar de usar la plataforma. 
                                         <br>  -	Para saber m??s de nuestros t??rminos, vaya a la p??gina de login y en la parte inferior seleccione t??rminos y condiciones. 
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse3_9" aria-expanded="false" aria-controls="collapse3_9">
                                            	Informaci??n personal
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_9" class="collapse" aria-labelledby="heading3_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            -	Si alg??n usuario o persona prestadora de servicios de entretenimiento para adultos elimina la cuenta y perfil, todos los datos relacionados con su uso de Smirrow, datos bancarios, datos personales y cualquier dato que tengamos sobre usted, ser?? eliminado completamente despu??s de los doce (12) meses. 
 <br> -	Cumplimos con el manejo de manejo, uso y seguridad sobre datos personales con base en la normatividad legal seg??n el pa??s. 
 <br> -	Si quiere saber m??s sobre el manejo de datos personales dir??jase a la pagina de login, seleccione la opci??n privacidad en la parte inferior. 
 <br> -	Si tiene m??s dudas e inquietudes, escribanos al correo electr??nico legal@smirrow.com.  

                                        </p>
                                    </div>
                                </div>
                            </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer">
            Smirrow
        </div>
    </section>
    <section id="section_about" class="animate__animated d-none" style="overflow: hidden">
        <nav class="navbar  navbar-dark bg-black">
            <a class="navbar-brand" href="#">
                <div class="row">
                    <div class="container">
                        <div class="row ">
                            <img class="rounded max-height-25" style="padding: 15px; width: 110px;height: 110px;"
                                src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="Logo Smirrow"
                                title="Logo de Smirrow">
                            <h2 class="text-light mt-4 ">Sobre nosotros</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container mt-5">

            <div class="row">
                <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                    <h2>Misi??n</h2>
                    <p>
                        Smirrow es la plataforma que est?? cambiando la forma de conectar las personas prestadoras de
                        servicios de entretenimiento para adultos con sus usuarios. El sitio se perfila brindando seguridad
                        en el pago y manejo de dinero, seguridad a prestadores de servicios y usuarios en sus
                        desplazamientos. Incluye creaci??n de contenido de todos los g??neros y para todos los gustos.
                    </p>
                </div>
                <div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6'>
                    <h2>Visi??n</h2>
                    <p>
                        Smirrow es la plataforma que est?? creada para convertirse en el primer sitio internacional en donde
                        el tab??, la estigmatizaci??n y la doble moral sobre servicios de entretenimiento para adultos sea
                        eliminado e ingrese a ser parte com??n, reconocida y universalmente aceptado.
                    </p>
                </div>


            </div>


            <h2>HISTORIA</h2>
            <p>
                Fue fundada en el a??o 2020 por un grupo de j??venes empresarios. La visi??n de estos j??venes empresarios era
                desarrollar una plataforma digital en donde las personas prestadoras de servicios de entretenimiento para
                adultos pudieran monetizar sin ning??n tipo de intermediarios y obteniendo de parte de la plataforma
                prerrogativas como seguridad en los pagos, seguridad en el manejo de dinero, seguridad en desplazamientos,
                seguridad en el manejo de sus datos personales, tener la libertad de trabajar manejando sus propios
                horarios, libertad para cobrar de forma libre lo que crean justo por sus servicios, reflejar la
                biodiversidad cultural aceptando personas prestadoras de servicios de entretenimiento para adultos de todos
                los g??neros. Estos j??venes empresarios desde entonces con su equipo t??cnico y creativo dieron vida a esta
                visi??n. Smirrow lleg?? consolidando su importancia como una plataforma superior con glamur y elegancia.
            </p>
            <div class="row">
                <div class='col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'>
                    <img src="https://images.pexels.com/photos/268941/pexels-photo-268941.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        class="mt-1 img-about" alt="PROYECCI??N">
                </div>
                <div class='col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-5'>
                    <h2>PROYECCI??N </h2>
                    <p>
                        Smirrow es una plataforma creada para convertirse en plataforma m??s grande de Am??rica, en donde las
                        personas prestadoras de servicios de entretenimiento para adultos podr??n generar ingresos de forma
                        constante y con seguridad. Sitio que se convertir?? en la plataforma m??s solidad, segura y con
                        garant??as para los usuarios. Smirrow obtendr?? miles de personas prestadoras de servicios y millones
                        de usuario alrededor del mundo y lograr ser un sitio de referencia internacional.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class='col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8'>
                    <h2>INTERACTIVIDAD Y PARTICIPACI??N </h2>
                    <p>
                        A diferencia de los sitios en donde encuentras personas que prestan servicios de entretenimiento
                        para adultos en donde no reciben a todos los g??neros y solo venden espacios, Smirrow recibe con
                        agrado la biodiversidad cultural, es un sitio donde puedes encontrar personas que prestan servicios
                        de entretenimiento para adultos de todos los g??neros. La plataforma esta dise??ada para crear
                        historial de tus servicios preferidos, generar una lista de las personas prestadoras de servicios de
                        entretenimiento para adultos preferidas, calificar el servicio de las personas prestadoras de
                        servicios y usuarios, dejar comentarios entre la persona prestadora de servicios de entretenimiento
                        para adultos y el usuario, verificaci??n de perfil de la persona prestadora de servicios y usuario.
                        Entre m??s completo tenga el perfil de usuario completo la persona prestadora de servicios de
                        entretenimiento para adultos, entre mejor calificaciones y buenos comentarios reciba la persona
                        prestadora de servicios de entretenimiento para adultos, la plataforma lo posicionara en los
                        resultados de b??squeda o en mejores servicios recomendados.
                    </p>
                </div>
                <div class='col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4'>
                    <img src="https://images.pexels.com/photos/5104648/pexels-photo-5104648.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        class="mt-1 img-about-2" alt="INTERACTIVIDAD Y PARTICIPACI??N">
                </div>
            </div>
        </div>

        <div class="footer">
            Smirrow
        </div>

    </section>

@endsection
