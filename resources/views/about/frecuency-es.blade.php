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
    </script>
@endsection

@section('meta_description')@lang('messages.meta_description')@endsection
@section('title') Smirrow | Preguntas frecuentes @endsection
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

    <div class="btn-float btn-smirrow btn-back c-pointer"  onclick="location.href = 'https://smirrow.com/';"><i
            class="fa fa-times" aria-hidden="true"></i></div>

    <section id="" class="animate__animated  " style="overflow: hidden">


        <!-- Image and text -->
        <nav class="navbar  navbar-dark bg-black">
            <a class="navbar-brand" href="#">
                <div class="row">
                    <div class="container">
                        <div class="row ">
                            <a href="/"><img class="rounded max-height-25" style="padding: 15px; width: 110px;height: 110px;"
                                src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="Logo Smirrow"
                                title="Logo de Smirrow"></a>
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
                        <li class="list-group-item item-one  c-pointer">Preguntas acompañantes</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8  res bg-light">
                    <div class="accordion  " id="accordion_general">
                        <div class="acordion_one  d-none">
                            <h3>Ganancias y pagos</h3>
                            <div class="card ">
                                <div class="card-header" id="heading1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            ¿Cómo empiezo a ganar Dinero en Smirrow?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        - Agregue una cuenta bancaria en la opción “Cuentas Bancarias”, la cuenta bancaria
                                        debe
                                        estar en el mismo país en donde realizó la apertura del perfil. Como método de pago
                                        alternativo tendrá una billetera electrónica.
                                        <br>
                                        - Complete su configuración de perfil. <br>
                                        - Asegúrese que su cuenta esté verificada. <br>
                                        - Asegúrese de crear y colocar precios a sus servicios. <br>
                                        - Asegúrese de crear álbumes con fotos y videos. <br>
                                        - Asegúrese de configurar su horario en la opción “Horarios Disponibles”. <br>
                                        Nota: Es posible que no pueda recibir solicitudes si su perfil no está verificado.
                                        <br>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            ¿Cuál es el porcentaje de pago?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                      <br> - Las personas prestadoras de servicios de entretenimiento para adultos reciben el 100% de lo que quieren ganar, solo deben aumentar al precio que quieren recibir como pago el 11%, que es la comisión por el uso de la plataforma.
                                      <br> - Smirrow puede realizar cualquier otro descuento del precio cobrado por la ofertante según las políticas e impuestos de cada país, lo cuales son obligatorios por ley, algunos países hacen algunos descuentos obligatorios por impuestos como el IVA, retenciones, cuota de servicio, entre otros, por lo mismo invitamos a que se asesore según el país donde reside. 
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            ¿Por qué mi solicitud de pago fue rechazada?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Si recibe un mensaje de error o no se llevó a cabo el procesamiento de su pago por
                                        algún motivo, comuníquese con el servicio de WhatsApp en la parte superior de la
                                        página
                                        web o envié un mensaje al correo electrónico pagos@smirrow.com. <br>
                                        Posibles razones de rechazo de su solicitud pago: <b></b>

                                        - Fondos insuficientes. <b></b>
                                        - El monto de dinero solicitado sobrepasa el monto de dinero de su casillero
                                        virtual.
                                        <b></b> <br>
                                        <strong>Nota:</strong> Tenga en cuenta en anotar bien los números de la cuenta
                                        bancaria, elegir bien el nombre de su banco, dejar claro nombres, apellidos y número
                                        de
                                        identificación del titular de la cuenta. Si registra mal y con errores los datos
                                        para
                                        solicitar los pagos, puede que no llegue el dinero que tiene en su casillero virtual
                                        a
                                        su cuenta bancaria. <br>
                                        - Por su seguridad en la opción “Historial” siempre quedarán registrados tus
                                        solicitudes
                                        de pagos y tus saldos.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            ¿Por qué mis ganancias están pendientes y el pago no está disponible?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Tenga en cuenta en anotar bien los números de la cuenta bancaria. <br>
                                        - Tenga en cuenta en seleccionar correctamente el nombre de su banco. <br>
                                        - Tenga en cuenta en escribir correctamente el nombre y apellidos del titular de la
                                        cuenta bancaria. <br>
                                        - Tenga en cuenta en escribir correctamente el número de identificación del titular
                                        de
                                        la cuenta bancaria. <br>
                                        - Si registra mal y con errores los datos para solicitar los pagos, puede que no
                                        llegue
                                        el dinero que tiene en su casillero virtual a su cuenta bancaria. <br><br>

                                        <strong>Nota:</strong> Solo podrá realizar hasta dos solicitudes de transacciones de
                                        su
                                        casillero virtual a su cuenta bancaria personal. Si realiza una tercera solicitud de
                                        transacción de su casillero virtual a su cuenta bancaria o más solicitudes, los
                                        bancos
                                        realizaran descuentos con base en sus políticas por ley por cada transacción
                                        realizada.


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            ¿Cuándo puedo iniciar o realizar una solicitud de pago?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Cuando tenga dinero en su casillero virtual podrá realizar solicitudes de la
                                        totalidad
                                        de su dinero o solo solicitar una parte de su dinero. <br>
                                        - En la opción “Mi Dinero” puedo realizar la solicitud de pagos. <br>
                                        - En la opción “Mi Dinero” podré ver un histórico de solicitudes de pagos. <br>
                                        - Tenga en cuenta en completar la opción “Cuentas Bancarias”. <br>
                                        - Tenga en cuenta que su saldo actual para realizar solicitudes debe estar por
                                        encima
                                        del monto mínimo de pago. <br>
                                        <br>
                                        <strong>Nota:</strong> Solo podrá realizar hasta dos solicitudes de transacciones de
                                        su
                                        casillero virtual a su cuenta bancaria personal. Si realiza una tercera solicitud de
                                        transacción de su casillero virtual a su cuenta bancaria o más solicitudes, los
                                        bancos
                                        realizaran descuentos con base en sus políticas por ley por cada transacción
                                        realizada.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            ¿Cómo realizan los pagos los Usuarios?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse7" class="collapse" aria-labelledby="heading7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                     <br>   - Todos los pagos se realizan por medio de plataformas de pagos legales autorizadas. 
                                     <br>   - Tenga en cuenta que por ahora no se aceptan pagos en efectivo, solo por medios electrónicos.

                                     <br>   Nota: Tenga en cuenta que por recibir pagos por fuera de la plataforma Smirrow no responde, ni tiene obligación o compromiso alguno.


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Historial e histórico de solicitudes
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse8" class="collapse" aria-labelledby="heading8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        - El historial es la opción en donde podrá ver todas las transacciones realizadas y
                                        saldo actual. <br>
                                        - El histórico de solicitudes lo encontrará en la opción “Mi Dinero” en donde podrá
                                        ver
                                        todas las solicitudes de dinero realizadas.<br>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            ¿Qué beneficios brinda la calificación y los comentarios?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse9" class="collapse" aria-labelledby="heading9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        - Las calificaciones sobre estrellas y los buenos comentarios ayudan a tener
                                        posicionamiento dentro la plataforma, obteniendo ventajas y prerrogativas. <br>
                                        - La calificación sobre estrellas va desde una estrella hasta cinco estrellas,
                                        siendo
                                        una estrella la calificación más baja y cinco estrellas la calificación más
                                        alta.<br>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading10">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            Mi solicitud de pago ha sido procesado y aceptado, ¿Dónde está?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse10" class="collapse" aria-labelledby="heading10"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Por lo general, los fondos tardan entre 3 días y 5 días hábiles en aparecer en su
                                        cuenta bancaria, en casos excepcionales tardar hasta 10 días hábiles. <br>
                                        - Si ha pasado más de 10 días desde que su pago se registró como procesado, envíenos
                                        un
                                        correo electrónico a pagos@smirrow.com – incluya una captura de pantalla de la
                                        opción de
                                        solicitud de pago, su número ID, y los datos del titular de la cuenta bancaria,
                                        número
                                        de cuenta y banco. También debe anexar certificación bancaria donde demuestre que no
                                        ha
                                        recibido su pago.


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading11">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            Retiro Mínimo
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse11" class="collapse" aria-labelledby="heading11"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - El monto mínimo de retiro es de $30.000 pesos moneda colombiana.

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading12">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            Cancelar mi solicitud de pago
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse12" class="collapse" aria-labelledby="heading12"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - Para enviar una solicitud de cancelación de pago, deberá comunicarse con servicio
                                        de
                                        atención al cliente. <br>
                                        - Incluya la fecha de solicitud, su número ID, nombre del titular de la cuenta
                                        bancaria,
                                        número de identificación del titular de la cuenta bancaria, nombre del banco, y
                                        número
                                        de la cuenta bancaria, tipo de cuenta.
                                        <br><br>
                                        <strong>Nota:</strong> No hay garantía de que la operación sea 100% exitosa, haremos
                                        todo lo posible para cancelar la transacción.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading13">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            ¿Cuánto recibo del pago?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse13" class="collapse" aria-labelledby="heading13"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        - La cantidad que ve en su saldo actual es el monto exacto que recibirá. <br>
                                        - Podrá realizar hasta dos transacciones por mes para no recibir descuentos por ley.
                                        <br>
                                        - Su banco puede cobrarle tarifas de conversión, por transacción, transferencias por
                                        recibir el dinero. <br>
                                        - Smirrow no tiene control sobre las políticas de uso de su banco, tampoco sobre las
                                        tasas de cambio impuestas por su banco. <br>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading14">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                            ¿Cómo ganan las agencias prestadoras de servicios de entretenimiento para
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
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                            ¿Cuánto puedo cobrar por lo servicios y servicios especiales?
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
                                        $850.000 pesos por una noche de 8 horas y de ahí en adelante puede cobrar lo que
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
                                        <br> - Tenga en cuenta que, según la calidad de sus fotos, videos y la belleza de su
                                        cuerpo, por ejemplo, si es chica fitness, modelo entre otros puntos, hará que el
                                        usuario
                                        vea la veracidad y credibilidad para pagar el valor de su servicio.

                                    </div>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h3>Consejos</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading16">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                            Para Tener en cuenta:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse16" class="collapse" aria-labelledby="heading16"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">


                                        - Tenga en cuenta en completar la configuración de perfil y todas las opciones. <br>
                                        - Tenga en cuenta el botón de pánico que le brindará seguridad en sus
                                        desplazamientos
                                        <br>
                                        - Tenga en cuenta en completar correctamente la información de cuentas bancarias
                                        para
                                        recibir los pagos sin inconvenientes. <br>
                                        - Tenga en cuenta en verificar el correo electrónico que registre en la plataforma.
                                        <br>
                                        - Tenga en cuenta que entre mejor sea su contenido de videos y fotos, será más
                                        llamativo
                                        para los usuarios. <br>
                                        - Complete todos los detalles para que su cuenta sea verificada. <br>


                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading17">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                            Características del botón de pánico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse17" class="collapse" aria-labelledby="heading17"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                    <br>    - Es un plus que Smirrow les brinda a las personas prestadoras de servicios. 
                                    <br>    - Para activarlo en la opción de configuración de perfil debes registrar un número referente de una persona conocida de tu confianza. 
                                    <br>    - Su funcionalidad es que al momento en que una persona prestadora de servicio este siendo agredida, violentada, este en riesgo o peligro, al pulsar el botón de pánico, automáticamente envía un mensaje solicitando ayuda al contacto referente de confianza.  

                                    </div>
                                </div>
                            </div>
                            <div class="mt-5">
                                <h3>Cuenta</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading18">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                            Requisitos de aprobación de cuenta/Solicitud de Cuenta
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse18" class="collapse" aria-labelledby="heading18"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <br> - Para ser aprobada tu cuenta y hacer uso, deberá enviar una foto selfie de
                                        primer
                                        plano, que sea reciente de su rostro y subirla en la opción “Verificación”,
                                        asegúrese
                                        que su rostro sea completamente visible.
                                        <br> - La activación de su cuenta se dará dentro de las siguientes 48 horas, no sin
                                        antes completar los requisitos mínimos obligatorios de información solicitados por
                                        la
                                        plataforma.
                                        <br> - Las imágenes no se pueden editar, recortar, ni cambiar de tamaño una vez
                                        subidas
                                        a la plataforma en la opción “Galería”
                                        <br> - Los videos no se pueden editar, ni cambiar de tamaño una vez subido a la
                                        plataforma en la opción “Galería”.
                                        <br> - Los videos que subas a la opción “Galería” no pueden tener más de 30 segundos
                                        de
                                        duración.
                                        <br> - Los archivos que subas a la plataforma deben ser un formato compatible como
                                        mp4,
                                        jpg, png entre otros.




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading19">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                            Mi cuenta esta inactiva/No me llegan solicitudes
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse19" class="collapse" aria-labelledby="heading19"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <br> - Si una persona prestadora de servicio deja de usar la plataforma por más 1
                                        año o
                                        más, esta aparecerá inactiva.
                                        <br> - Si una persona prestadora de servicio es sancionada por 3 veces por prestar
                                        un
                                        mal servicio, mala calificación, malos cometarios, su cuenta pasará a inactiva por
                                        un
                                        año.
                                        <br> - Tenga en cuenta que entre más contenido esté creando, más visible será para
                                        los
                                        usuarios en buscadores, en el posicionamiento de la plataforma.
                                        <br> - Tenga en cuenta que entre más contenido esté creando, mejores comentarios y
                                        calificaciones tenga, Smirrow realizará recomendaciones totalmente gratis de su
                                        perfil.
                                        <br> - Tenga en cuenta que entre más completa esta toda la información solicitada
                                        por la
                                        plataforma, más fácil y rápido aparecerá en el posicionamiento de la plataforma,
                                        como en
                                        su buscador.
                                        <br> - Tenga en cuenta que la plataforma no permite contenido sexual explicito,
                                        tampoco
                                        desnudos explícitos, Smirrow está enfocada en ser un sitio con glamur, estilo,
                                        clase,
                                        elegancia, sensualidad y dejar que fluya la imaginación de los usuarios.
                                        <br> - Tenga en cuenta que el contenido sexual explicito y desnudos explicito serán
                                        eliminados por la plataforma.
                                        <br> - Tenga en cuenta que los usuarios pagaran solo por sus servicios creados
                                        dentro de
                                        la plataforma.
                                        <br> - Tenga en cuenta que puede crear servicios adicionales para generar ingresos
                                        adicionales.





                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading20">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                            Vinculación a las Redes Sociales
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse20" class="collapse" aria-labelledby="heading20"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <br> - Smirrow le permite a la persona prestadoras de servicio compartir su perfil
                                        en
                                        redes sociales.
                                        <br> - Igualmente, Smirrow tiene permitido compartir el contenido de las personas
                                        prestadoras de servicio más sobresalientes de las plataformas en sus redes sociales,
                                        sin
                                        comprometer su privacidad y manteniendo reservado su rostro.
                                        <br> - Tenga en cuenta que se puede registrar con su cuenta de Google o Facebook.




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading21">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                            Solicitudes rechazadas por los siguientes motivos:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse21" class="collapse" aria-labelledby="heading21"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">


                                        - Selfie de mala calidad, rostro borroso. <br>
                                        - Selfie o foto de unos objetos, juguete, o muñeco que no identifica a la persona.
                                        <br>
                                        - Selfie o foto no debe tener recortes, grietas, arrugas, perforaciones. <br>
                                        - Los datos mínimos requeridos dentro de la plataforma no están completos. <br>
                                        - Subir contenido de terceros con protección de derechos de autor. <br>
                                        - La persona que aparece en la portada, en los álbumes, o videos no coinciden. <br>
                                        - El titular de la cuenta no tiene más de 18 años. <br>



                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading22">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                        - Solo pueden tener una cuenta registrada y activa con un correo electrónico. <br>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading24">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                            ¿Se permite la desnudez en Smirrow?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse24" class="collapse" aria-labelledby="heading24"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - No se permite la desnudez explícita, solo los semidesnudos están permitidos en
                                            las
                                            publicaciones siempre y cuando estén dentro de las pautas establecidas. <br>
                                            - Los semidesnudos se permite por medio de contenido erótico y glamuroso.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading25">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                            Contenido robado en sitios de terceros
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse25" class="collapse" aria-labelledby="heading25"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Smirrow se toma muy en serio la protección del contenido de terceros, por lo
                                            que
                                            no
                                            permitimos que infrinjan derechos de autor.
                                            <br> - Smirrow emitirá avisos formales de eliminación contra todas las
                                            infracciones
                                            de
                                            derechos de autor denunciadas.
                                            <br> - Smirrow cuenta con un equipo de verificación sobre derechos de autor,
                                            aplicada a los
                                            contenidos subidos.
                                            <br> - Tenga en cuenta que dentro de la plataforma podrá realizar denuncias
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
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                            Creación de cuenta de agencias de servicios de entretenimiento para adultos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse26" class="collapse" aria-labelledby="heading26"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Smirrow proveerá un número único de identificación dentro de la plataforma
                                            para
                                            que la agencia registre con ese número a todas las personas prestadoras de
                                            servicios
                                            que tenga a disposición.
                                        </p>




                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3>Configuración de cuenta y página</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading27">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                            Configuración de cuenta y página
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse28" class="collapse" aria-labelledby="heading27"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Cualquier usuario que esté registrado en Smirrow podrá ver su perfil y todo su
                                            contenido publicado presente y pasado en su página.
                                            <br> - Tenga en cuenta que todo el contenido debe cumplir con nuestros términos
                                            y
                                            condiciones o estar sujeto a suspensión o cierre.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading29">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                            Ocultar tu perfil
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse29" class="collapse" aria-labelledby="heading29"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>- Es posible ocultar su perfil a direcciones IP nacionales en donde realizó la
                                            apertura de su cuenta y dejar que solo direcciones IP extranjeras vean su
                                            página.
                                        </p>



                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading30">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                            Perfil Público
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse30" class="collapse" aria-labelledby="heading30"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Los siguientes datos son los que estarán visibles en su perfil público:
                                            usuario,
                                            género, país, ciudad, etnia, color de piel, color de ojos, color de cabello,
                                            altura
                                            de cabello, contextura, estilo, tatuajes, piercings, peso, altura, voy a
                                            domicilio,
                                            tengo sitio, recibo servicios, zonas de atención y descripción.
                                            <br> - Se mostrará busto, cintura y cadera solo si ha seleccionado género
                                            femenino o
                                            trans.
                                            <br> - Se mostrarán sus álbumes de fotos y videos.
                                            <br> - Se mostrará su número ID.
                                            <br> - Se mostrará su horario disponible.
                                            <br> - Se mostrarán sus servicios, servicios adicionales y precios.
                                            <br> - Se mostrarán sus calificaciones y comentarios.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading31">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                            Error Página no disponible
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse31" class="collapse" aria-labelledby="heading31"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>

                                            - Cuando un usuario informa que hay un error de página no disponible cuando
                                            visitan
                                            su perfil debe tener en cuenta que puede tener activado el bloqueo de tener su
                                            página publica solo para extranjeros, si el error persiste, comuníquese por
                                            medio
                                            del WhatsApp de servicio al cliente o envíe un correo electrónico a
                                            ayuda@smirrow.com
                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading32">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                            Etiquetado y URL
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse32" class="collapse" aria-labelledby="heading32"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Smirrow no permite que escriba direcciones de otras webs dentro de la 
                                            plataforma, al
                                            hacerlo, su cuenta no será verificada, por lo que no podrá tenerla activa.
                                            <br> - Tenga en cuenta que, si introduce una dirección/URL de otro sitio después
                                            de
                                            tener su cuenta activada, estará será desactivada.
                                            <br> - Tenga en cuenta que podrá compartir la dirección/URL de su página Smirrow
                                            y
                                            su número ID en redes sociales y webs.


                                        </p>




                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3>
                                    Promoción de su cuenta Smirrow
                                </h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading33">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            <br> - Tenga en cuenta que la calificación cinco estrellas funciona para tener
                                            mejor
                                            posicionamiento en la plataforma.
                                            <br> - Tenga en cuenta que la calificación cinco estrellas sirve para mostrar
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
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                            Campañas promocionales
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse34" class="collapse" aria-labelledby="heading34"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Smirrow realizará campañas promocionales para el beneficio de las personas
                                            prestadoras de servicios de entretenimiento para adultos.

                                        </p>




                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3>Preguntas técnicas</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading35">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                            Tamaño de imágenes
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse36" class="collapse" aria-labelledby="heading35"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>

                                            - Tamaño de foto de perfil debe ser mínimo de 110x110 píxeles y resolución de
                                            180x180 píxeles mínimo.
                                            <br> - Fotos cuadradas para publicaciones la medida ideal es de 1080x1080
                                            píxeles y
                                            mínimo de 640x640 píxeles, y una medida máxima de 2048x2048 píxeles.
                                            <br> - Fotos verticales para publicaciones la medida ideal es de 1080x1350
                                            píxeles y
                                            mínimo 600x749 píxeles.
                                            <br> - Fotos horizontales para publicaciones la medida ideal es de 1080x566
                                            píxeles
                                            y mínimo 600x400 píxeles.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading37">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                            Tamaño de video
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse38" class="collapse" aria-labelledby="heading37"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>
                                            - Vídeo formato cuadrado para publicaciones la medida ideal es de 640x640
                                            píxeles,
                                            es el formato más recomendado para subir video.
                                            <br> - Vídeo formato horizontal para publicaciones la medida ideal es de 600x315
                                            píxeles.
                                            <br> - Vídeo formato vertical para publicaciones la medida ideal es de 600x750
                                            píxeles.


                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading39">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                            Código para las agencias de entretenimiento para adultos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse39" class="collapse" aria-labelledby="heading39"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">

                                        <p>

                                            - Cada agencia se le entregará un código numérico único para que registre su
                                            personal prestador de servicios de entretenimiento para adultos.
                                            <br> - El código identifica a la agencia y a su personal prestador de servicios
                                            de
                                            entretenimiento para adulto.

                                        </p>




                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading40">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                            Contacto dentro de la plataforma con el usuario
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse40" class="collapse" aria-labelledby="heading40"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - El chat y mensajería se activarán solamente cuando el usuario realice el pago
                                            sobre el servicio solicitado para poder tener comunicación.
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
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                            Notificaciones y correo electrónico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse42" class="collapse" aria-labelledby="heading41"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que validar el correo electrónico permitirá que lleguen a su
                                            dispositivo digital notificaciones de solicitudes por su servicio.
                                            <br> - Tenga en cuenta que a su dispositivo digital por medio del correo
                                            electrónico
                                            registrado y validado, le permitirá que ver notificaciones sobre los pagos que
                                            haga
                                            cada usuario por sus servicios.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading43">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                            Eliminar o editar publicaciones
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse45" class="collapse" aria-labelledby="heading45"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Podrá editar su configuración de perfil las veces que crea necesarias.
                                            <br> - Podrá editar o eliminar galería de fotos y vídeos las veces que considere
                                            necesarias.
                                            <br> - Podrá editar o eliminar los servicios y servicios especiales las veces
                                            que
                                            considere necesarias.
                                            <br> - Podrá editar el horario disponible las veces que considere necesarias.
                                            <br> - Podrá editar o eliminar las cuentas bancarias que considere necesarias.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading46">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            fotos y vídeos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading47">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                            Idiomas
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse47" class="collapse" aria-labelledby="heading47"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La plataforma se encuentra en dos idiomas por ahora, los cuales son español e
                                            inglés.
                                            <br> - Tenga en cuenta que, para cambiar el idioma, al comienzo de la página de
                                            Smirrow, puede dirigirse a la parte superior de la página y encontrará dos
                                            opciones
                                            de banderas, una para español y otra para inglés.
                                            <br> - Tenga en cuenta que, para cambiar el idioma ya registrado dentro de la
                                            plataforma, deberá dirigirse a la parte superior en la opción de imagen y
                                            nombre, a
                                            dar clic se extenderá un menú en donde encontrará dos opciones de banderas, una
                                            para español y otra para inglés.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading48">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                            Zonas para prestar los servicios de entretenimiento para adultos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse48" class="collapse" aria-labelledby="heading48"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La persona prestadora del servicio de entretenimiento para adultos podrá
                                            elegir el
                                            país, la ciudad y localidades donde presta sus servicios.
                                            <br> - Tenga en cuenta que también podrá elegir otros países, ciudades y
                                            municipios
                                            en donde acepta que haya desplazamientos.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading49">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                            Geolocalización
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse49" class="collapse" aria-labelledby="heading49"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La persona prestadora del servicio, podrá activar el sistema de
                                            geolocalización en
                                            momentos de desplazamientos para su seguridad.

                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3> Impuestos</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading50">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            agrega a valor de los bienes o servicios adquiridos, la tasa varía según el
                                            país. El
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
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            impuestos según los cambios sobre las normas y leyes de cada país en el que la
                                            plataforma esté activa y funcionando.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading51">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            correspondiente, con base en la normatividad legal de cada país en la que esté
                                            funcionando la plataforma.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading52">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            el país diferente en donde solicita y realiza el pago el Usuario del país, se
                                            cobrará el impuesto de IVA según el país en donde resida y con base en su normas
                                            legales.
                                            <br> - Tenga en cuenta que el impuesto del IVA estará sujeto al país donde
                                            resida.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading53">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                            ¿Con quién puedo comunicarme si tengo más preguntas?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse54" class="collapse" aria-labelledby="heading53"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Si tiene alguna pregunta adicional puede contactar por WhatsApp o por el
                                            correo
                                            electrónico ayuda@smirrow.com

                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3> Cumplimiento del servicio</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading55">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                            ¿Qué pasa si incumplo prestar un servicio?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse55" class="collapse" aria-labelledby="heading55"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Si la persona prestadora de servicios de entretenimiento para adultos incumple
                                            con
                                            el servicio que el usuario ya ha pagado, tendrá una sanción de 1 mes de no poder
                                            usar la plataforma digital.
                                            <br> - Tenga cuenta que después de 3 sanciones, su cuenta será desactivada por 1
                                            año.
                                            <br> - Tenga en cuenta que, al incumplir, el dinero pagado por el servicio, será
                                            devuelto al usuario en su totalidad.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading56">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                            Justificación del incumplimiento del servicio
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse57" class="collapse" aria-labelledby="heading56"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Si la persona prestadora del servicio de entretenimiento para adultos presenta
                                            una
                                            excusa legal o una prueba contundente del porqué incumplió el servicio
                                            solicitado
                                            por parte del usuario, no será sancionada.
                                            <br> - Tenga en cuenta que, si incumple con la prestación del servicio y no
                                            presenta
                                            excusa legal o prueba contundente, será sancionada.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading57">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                            Términos o tiempo para presentar pruebas por incumplimiento
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse57" class="collapse" aria-labelledby="heading57"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La persona prestadora del servicio tendrá un término de 8 días calendario para
                                            presentar la excusa legal o prueba contundente del porqué no cumplió el servicio
                                            solicitado.
                                            <br> - Para presentar las excusa legal o prueba contundente que demuestre del
                                            porqué
                                            incumplió, envié un correo con su casi a legal@smirrow.coms

                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="mt-5">

                                <h3>Seguridad</h3>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading58">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse58" aria-expanded="false" aria-controls="collapse58">
                                            Botón de pánico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse58" class="collapse" aria-labelledby="heading58"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                         <br>   - Es un plus que Smirrow les brinda a las personas prestadoras de servicios. 
                                         <br>   - Para activarlo en la opción de configuración de perfil debes registrar un número referente de una persona conocida de tu confianza. 
                                         <br>   - Su funcionalidad es que al momento en que una persona prestadora de servicio este siendo agredida, violentada, este en riesgo o peligro, al pulsar el botón de pánico, automáticamente envía un mensaje solicitando ayuda al contacto referente de confianza. 

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading59">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
                                            Geolocalización
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse59" class="collapse" aria-labelledby="heading59"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La persona prestadora del servicio, podrá activar el sistema de
                                            geolocalización en
                                            momentos de desplazamientos para su seguridad
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading60">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                            Seguridad en los pagos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse61" class="collapse" aria-labelledby="heading60"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Ningún usuario prestará el servicio de entretenimiento para adultos hasta que
                                            el
                                            usuario haya realizado el pago por el servicio solicitado
                                            <br>
                                            <strong>NOTA:</strong> Tenga en cuenta que el usuario al realizar una solicitud
                                            por
                                            un servicio, a la persona prestadora del servicio le llegará una notificación
                                            para
                                            que acepte o rechace el servicio solicitado, si el servicio es rechazado, se
                                            cancela, pero si el servicio es aceptado, al usuario le llegará una notificación
                                            informando que fue aceptada la solicitud para prestar el servicio, por lo que en
                                            esa
                                            misma notificación le llegará la orden de pago, paso siguiente, el usuario
                                            realiza
                                            el pago y a la persona prestadora del servicio le llegará una nueva notificación
                                            comunicando que el pago por el servicio se realizo con éxito.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card border">
                                <div class="card-header " id="heading61">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                            Medios para realizar los pagos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse61" class="collapse " aria-labelledby="heading61"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Los únicos medios habilitados y aceptados por Smirrow son por medio de las plataformas de pagos legales y autorizadas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acordion_two d-none">
                            <h3>Registro</h3>
                            <div class="card ">
                                <div class="card-header" id="heading2_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_1" aria-expanded="false" aria-controls="collapse2_1">
                                            ¿Por qué registrarse?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_1" class="collapse" aria-labelledby="heading2_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        <p>
                                            - Registrarse le brinda acceso a todos los catálogos y contenido privado que
                                            publican las personas prestadoras de servicios de entretenimiento para adultos.
                                            <br>
                                            - Al solicitar un servicio se activa un chat y mensajería privada para
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
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_2" aria-expanded="false" aria-controls="collapse2_2">
                                            ¿Por qué medios me puedo registrar?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_2" class="collapse" aria-labelledby="heading2_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Puede registrarse por medio de su correo electrónico. <br>
                                            - Puede registrarse por medio de Facebook o Google .

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_3" aria-expanded="false" aria-controls="collapse2_3">
                                            ¿Cómo encontrar un perfil?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_3" class="collapse" aria-labelledby="heading2_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - En inicio aparecerá la opción de búsqueda con la imagen de una lupa, en donde
                                            podrá realizar búsquedas si conoce el nombre de la persona prestadora de
                                            servicio que quiere contactar. <br>
                                            - En la opción de búsqueda también podrá realizar consultas filtrando tipo de
                                            servicio, precios, color de piel, color de cabello, etc. <br>
                                            - Al realizar búsquedas genéricas, los resultados que arroja la plataforma serán
                                            de las personas prestadoras de servicios de entretenimiento para adultos que
                                            mejor esten posicionadas.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_4" aria-expanded="false" aria-controls="collapse2_4">
                                            No puedo registrarme
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_4" class="collapse" aria-labelledby="heading2_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Debe verificar que su correo electrónico esté escrito correctamente y
                                            completo. <br>
                                            - Si abre un perfil con Facebook o Google, verifique que está
                                            introduciendo correctamente su contraseña. <br>
                                            - Utilice un navegador web actualizado. <br>
                                            - Elimine cookies, historial y su historia de navegación en la opción
                                            configuración de su navegador. <br>
                                            - Actualice su navegador oprimiendo Ctrl + F5. <br>
                                            - Si tiene inconvenientes para registrarse o estos persisten escribanos a
                                            ayuda@smirrow.com <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_5" aria-expanded="false" aria-controls="collapse2_5">
                                            No puedo encontrar un perfil después de registrarme
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_5" class="collapse" aria-labelledby="heading2_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Algunas personas prestadoras de servicios de entretenimiento para adultos
                                            bloquean el acceso, direcciones IP o Usuarios, si esto pasa, no tendrá acceso al
                                            perfil de la persona prestadora del servicio.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_6" aria-expanded="false" aria-controls="collapse2_6">
                                            ¿El registro caduca o tiene vencimiento?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_6" class="collapse" aria-labelledby="heading2_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Los perfiles registrados quedarán inactivos después de doce meses de no tener
                                            movimiento alguno.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_7" aria-expanded="false" aria-controls="collapse2_7">
                                            Ver el perfil y galería de vídeos de la persona prestadora de servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_7" class="collapse" aria-labelledby="heading2_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Puede identificar el perfil de la persona por medio de su número ID, nombre e
                                            imagen de portada. <br>
                                            - Puede dar clic sobre la imagen de portada para ingresar la información de la
                                            persona prestadora de servicio, en donde podrá ver las opciones de galería,
                                            perfil, horario disponible, precio de servicios y servicios especiales,
                                            comentarios y calificaciones.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>Pagos por servicios</h3>
                            <div class="card">
                                <div class="card-header" id="heading2_8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_8" aria-expanded="false" aria-controls="collapse2_8">
                                            Medios de pago
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_8" class="collapse" aria-labelledby="heading2_8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Actualmente Smirrow maneja pagos con tarjeta débito y crédito, corresponsal bancario, Nequi, Pse.
                                        <br>    - El usuario podrá realizar los pagos a través las opciones que brindan las plataformas de pago legales autorizadas.
                                        <br>    - Tenga en cuenta que Smirrow no se hace responsable de los pagos que el usuario realice por fuera de las plataformas de pago legales autorizadas.
                                        <br>    - Tenga en cuenta que las plataformas de pago legales autorizadas brindan opciones de pago en efectivo, con tarjetas, PSE, aplicaciones digital etc.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_9" aria-expanded="false" aria-controls="collapse2_9">
                                            Reembolsos y cumplimiento
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_9" class="collapse" aria-labelledby="heading2_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La devolución del pago se realiza solo cuando se presente una excepción dentro
                                            de las pautas de Smirrow.
                                            <br> - Tenga en cuenta que, si la persona prestadora de servicios de
                                            entretenimiento para adultos incumple con el servicio solicitado, su pago será
                                            reembolsado.
                                            <br> - Tenga en cuenta que si al solicitar un servicio no recibe el servicio por
                                            incumplimiento de lo pactado den de la solicitud, no se le realizará reembolso
                                            de su pago.
                                            <br> - Tenga en cuenta que las excepciones para la devolución del pago realizado
                                            son por un caso fortuito o de fuerza mayor, por lo que deberá presentar pruebas
                                            como por ejemplo un documento legal, un documento médico, un video, fotos etc.
                                            <br> - Tenga cuenta que al incumplir sin presentar excusa o pruebas y la persona
                                            prestadora del servicio cumple con ir a prestar el servicio de entretenimiento
                                            para adultos, no se le reembolsará el dinero y se realizará el pago completo a
                                            la persona prestadora de servicio.
                                            <br> - Tenga en cuenta que como usuario tendrá ocho (8) días calendario para
                                            presentar excusa legal, excusa media o pruebas por el incumplimiento, término
                                            que se contará a partir del siguiente día de la fecha incumplida del servicio
                                            solicitado.
                                            <br> - Tenga en cuenta que Smirrow tendrá ocho (8) días hábiles para estudiar el
                                            caso y revisar las pruebas presentadas para tomar una decisión la cual será
                                            comunicada el usuario.
                                            <br> - Tenga en cuenta que los ocho (8) días hábiles se contarán a partir del
                                            siguiente día del cumplimiento del octavo día que tiene el usuario para
                                            presentar excusas y pruebas.
                                            <br> - Puede enviar su caso a legal@smirrow.com


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_10">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            certificados de seguridad e inyecciones de código.
                                            <br> - Tenga en cuenta que por seguridad solo está permitido realizar pagos a
                                            través de Wompi.
                                            <br> - Su pago realizarlo por transacción se verá reflejado en el extracto como
                                            servicios especiales.
                                            <br> - Si su pago rebota escribanos a pagos@smirrow.com

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_11">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_11" aria-expanded="false" aria-controls="collapse2_11">
                                            Fallos al realizar un pago
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_11" class="collapse" aria-labelledby="heading2_11"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Una transacción fallida puede ser debido a la actualización de la plataforma
                                            Wompi, por lo que tendrás que intentar hasta 3 veces o intentar 24
                                            horas después.
                                            <br> - Una transacción fallida puede ser por ingresar de forma fallida los
                                            datos:
                                            <br> o Una limitante por parte de su banco para realizar transacciones por
                                            internet.
                                            <br> o Los detalles de la tarjeta de crédito ingresados incorrectamente por
                                            usted.
                                            <br> o Fondos insuficientes en su cuenta.
                                            <br> o Dirección, código postal o datos del código postal incorrectos ingresados
                                            por usted.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>
                                 Notificaciones y carrito de compras
                            </h3>
                            <div class="card">
                                <div class="card-header" id="heading2_12">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_12" aria-expanded="false" aria-controls="collapse2_12">
                                            Carrito de compras
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_12" class="collapse" aria-labelledby="heading2_12"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Las solicitudes de servicios que haga se agregarán al carrito de compras el
                                            cual podrá ver en la parte superior derecha del sitio, al dar clic se despliega
                                            el listado de compras a realizar.
                                            <br> - Tenga en cuenta que puede agregar todos los servicios que quiera al
                                            carrito de compras.
                                            <br> - En la opción del carrito de compras podrá dar clic a confirmar solicitud
                                            para que a la persona prestadora de servicio le llegue la notificación sobre la
                                            solicitud.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_13">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            servicio de entretenimiento para adultos le llega una notificación para que
                                            acepte la solicitud del servicio.
                                            <br> - Si la persona prestadora del servicio de entretenimiento para adultos
                                            acepta, inmediatamente le llega una notificación al usuario confirmando y
                                            solicitando realice el pago.
                                            <br> - El realizar el pago el usuario, a la persona prestadora del servicio de
                                            entretenimiento para adultos le llega una notificación sobre el pago realizado
                                            por su servicio.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>Promociones</h3>
                            <div class="card">
                                <div class="card-header" id="heading2_14">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_14" aria-expanded="false" aria-controls="collapse2_14">
                                            Ofertas de promociones
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_14" class="collapse" aria-labelledby="heading2_14"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La plataforma se guarda y reserva cualquier promoción.
                                            <br> - Tenga en cuenta que las promociones pueden variar según fecha y época del
                                            año.
                                            <br> - Las promociones que se hacen dentro de la plataforma son exclusivas para
                                            sorprender a sus usuarios.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>Chat y mensajería </h3>
                            <div class="card">
                                <div class="card-header" id="heading2_15">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_15" aria-expanded="false" aria-controls="collapse2_15">
                                            Contacto con prestadores de servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_15" class="collapse" aria-labelledby="heading2_15"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que la plataforma solo habilita el chat y mensajería cuando el
                                            usuario haya realizado el pago por el servicio.
                                            <br> - Tenga en cuenta que Smirrow no tiene responsabilidad alguna sobre lo que
                                            acuerde por fuera de la plataforma.
                                            <br> - El chat y mensajería se encuentra encriptado por lo que es información
                                            confidencial y asegurada.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>Impuestos</h3>
                            <div class="card">
                                <div class="card-header" id="heading2_16">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            de los bienes o servicios adquiridos en un país.
                                            <br> - La tasa impositiva específica del impuesto del IVA varía según el
                                            país.
                                            <br> - Como lo dice su propio nombre el impuesto se agrega al producto o
                                            servicio en el momento de la compra por el servicio.
                                            <br> - Tenga en cuenta que debido a la variación por el pago del impuesto el
                                            valor puede cambiar, ya que la tasa a pagar lo determina cada país en donde
                                            realiza la compra.
                                            <br> - Tenga en cuenta que este impuesto se paga directamente a la autoridad
                                            competente según el país.
                                            <strong>NOTA:</strong> Si tiene alguna otra pregunta, nos puede escribir a
                                            legal@smirrow.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_17">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_17" aria-expanded="false" aria-controls="collapse2_17">
                                            Quién determina el valor del impuesto del IVA
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_17" class="collapse" aria-labelledby="heading2_17"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que puede encontrar por sus medios la tasa correspondiente
                                            para que verifique el impuesto.
                                            <br> - El país donde se encuentra es quien impone la tasa del impuesto.
                                            <br> - Los cambios sobre la tasa del impuesto de IVA se realizan solo bajo los
                                            términos de ley según el país.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_18">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_18" aria-expanded="false" aria-controls="collapse2_18">
                                            ¿Se aplica IVA a todos los servicios?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_18" class="collapse" aria-labelledby="heading2_18"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Depende del país en donde se grave el impuesto.
                                            <br> - Tenga en cuenta que la mayoría de países aplican el impuesto del IVA
                                            sobre productos y servicios.
                                            <br> - Cualquier compra realizada por el Usuario residente en un país que cobre
                                            IVA estará sujeto a la tasa local. <br>|
                                            <strong>NOTA:</strong> Tenga en cuenta que Smirrow cobra el IVA solo en los
                                            países que aplican este impuesto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>
                                Seguridad
                            </h3>
                            <div class="card">
                                <div class="card-header" id="heading2_19">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_19" aria-expanded="false" aria-controls="collapse2_19">
                                            Geolocalización
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_19" class="collapse" aria-labelledby="heading2_19"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que las personas prestadoras de servicios de entretenimiento
                                            para adultos pueden activar la geolocalización por su seguridad en
                                            desplazamientos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_20">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_20" aria-expanded="false" aria-controls="collapse2_20">
                                            Dirección y teléfono
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_20" class="collapse" aria-labelledby="heading2_20"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tengan en cuenta que la plataforma solicita de forma obligatoria al usuario
                                            dejar registrada la dirección en donde cita a la persona prestadora del servicio
                                            de entretenimiento para adultos por seguridad de las partes.
                                            <br> - Tenga en cuenta que la plataforma solicita de forma obligatoria al
                                            Usuario dejar registro del número de contacto.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_21">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            actualmente los pagos se hacen solo a través de Wompi.

                                            <br> <strong>NOTA:</strong> Todos los datos solicitados por Smirrow están bajo
                                            la protección legal de seguridad, políticas de uso y manejo de datos personales
                                            según la normatividad de cada país.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>
                                Inicio
                            </h3>
                            <div class="card">
                                <div class="card-header" id="heading2_22">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_22" aria-expanded="false" aria-controls="collapse2_22">
                                            Avisos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_22" class="collapse" aria-labelledby="heading2_22"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que al ingresar a Smirrow, siempre se encontrará con avisos de
                                            ayuda que recomendamos tener en cuenta para un buen uso de la plataforma.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_23">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_23" aria-expanded="false" aria-controls="collapse2_23">

                                            Verificación de correo

                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_23" class="collapse" aria-labelledby="heading2_23"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que es obligatorio verificar su correo electrónico registrado
                                            para que pueda recibir notificaciones y realizar solicitudes de servicios
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_24">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_24" aria-expanded="false" aria-controls="collapse2_24">
                                            Configuración de perfil
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_24" class="collapse" aria-labelledby="heading2_24"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tengan en cuenta que entre más completa tenga su información más confianza le
                                            tendrá la persona prestadora de servicios de entretenimiento para adultos para
                                            aceptar su solicitud sobre un servicio.
                                            <br> - Tenga en cuenta que no podrá solicitar servicios si no completa la
                                            información de perfil.
                                            <br> - Tenga en cuenta que los datos son privados y no se mostrarán a terceros y
                                            solo unos pocos a la persona prestadora del servicio de entretenimiento para
                                            adultos.
                                            <br> - Los datos que son visibles a la persona prestadora de servicios de
                                            entretenimiento para adultos son nombre de usuario, ubicación, país, ciudad y
                                            dirección.
                                            <br> <strong> NOTA:</strong> Por su seguridad puede usar un nombre de usuario
                                            diferente al propio ante las personas prestadoras de servicios.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_25">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_25" aria-expanded="false" aria-controls="collapse2_25">
                                            Verificación
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
                                            <br> - Tenga en cuenta que la foto no será vista por terceros, ni entregada a
                                            terceros, ni por la persona prestadora de servicio de entretenimiento para
                                            adultos.
                                            <br> <strong>NOTA:</strong> Smirrow da prioridad a la protección de identidad de
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
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_26" aria-expanded="false" aria-controls="collapse2_26">
                                            Idiomas
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_26" class="collapse" aria-labelledby="heading2_26"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - La plataforma se encuentra en dos idiomas por ahora, los cuales son español e
                                            inglés.
                                            <br> - Tenga en cuenta que, para cambiar el idioma, al comienzo de la página de
                                            Smirrow, puede dirigirse a la parte superior de la página y encontrará dos
                                            opciones de banderas, una para español y otra para inglés.
                                            <br> - Tenga en cuenta que, para cambiar el idioma ya registrado dentro de la
                                            plataforma, deberá dirigirse a la parte superior en la opción de imagen y
                                            nombre, a dar clic se extenderá un menú en donde encontrará dos opciones de
                                            banderas, una para español y otra para inglés.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_27">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            Smirrow, y está protegido por derechos de autor.
                                            <br> - Las imágenes o videos que descargue desde Smirrow quedarán con marca de
                                            agua y el uso sin autorización por parte de la plataforma podrá llevar a
                                            sanciones legales.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_28">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_28" aria-expanded="false" aria-controls="collapse2_28">
                                            Ubicación de las personas prestadoras de servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_28" class="collapse" aria-labelledby="heading2_28"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-3">
                                        <p>
                                            - Tenga en cuenta que podrá encontrar personas prestadoras de servicios de
                                            entretenimiento para adultos por país y ciudad.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2_29">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
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
                                            perfil tendrán publicado el país, la ciudad, las zonas o localidades en donde
                                            prestan sus servicios, así mismo como desplazamientos a otras ciudades o
                                            municipios.
                                            <br> - Tenga en cuenta que las persona prestadora del servicio de
                                            entretenimiento para adultos solo podrá prestar sus servicios solicitandos en la ubicación solicitada

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" acordion_three ">
                            <h3>Cuenta</h3>
                            <div class="card ">
                                <div class="card-header" id="heading3_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_1" aria-expanded="false" aria-controls="collapse3_1">
                                            No puedo ingresar sesión en mi cuenta, mi nombre y usuario son incorrectos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_1" class="collapse" aria-labelledby="heading3_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Revise su correo electrónico para ver su si cuenta ha sido marcada como
                                            sospechosa o restringida.
                                            <br> - Si tiene una sanción sobre los términos del servicio es posible que este
                                            bloqueado temporalmente.
                                            <br> - Si tiene una cuenta anterior en Smirrow con una sanción, es posible que
                                            su cuenta actual sea restringida.
                                            <br> - Si cree que ha sido bloqueado por error comuníquese con ayuda@smirrow.com
                                            con información o evidencia que nos permita revisar su situación dentro de
                                            Smirrow.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_2" aria-expanded="false" aria-controls="collapse3_2">
                                            Eliminar su cuenta
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_2" class="collapse" aria-labelledby="heading3_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Ingrese los datos solicitados en la opción eliminar cuenta, su cuenta será
                                            eliminada y se enviará un correo electrónico de confirmación en donde se le
                                            informará que su cuenta fue eliminada con éxito.
                                            <br> - Tenga cuenta que su cuenta será eliminada completamente no podrá
                                            recuperarla, ni ser restaurada, deberá crear una nueva cuenta y volver a
                                            configurar todo su perfil.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_3" aria-expanded="false" aria-controls="collapse3_3">
                                            Reportar una cuenta
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_3" class="collapse" aria-labelledby="heading3_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Para denunciar una cuenta de una persona prestadora de servicio tome el número
                                            del ID y envíenos un correo electrónico a legal@smirrow.com con la información o
                                            evidencia que nos permita revisar el caso dentro de Smirrow.
                                            <br> - Para denunciar a un usuario que solicita un servicio, tome los datos del
                                            servicio, registro, día, hora, fecha, nombre usuario e información o evidencia y
                                            escribanos al correo electrónico legal@smirrow.com y revisaremos su caso dentro
                                            de Smirrow.
                                            <br> - Si alguna de las partes ha infringido o ha cometido un delito punible
                                            interponga una denuncia ante la autoridad legal competente.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>
                                Seguridad de la cuenta
                            </h3>
                            <div class="card ">
                                <div class="card-header" id="heading3_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_4" aria-expanded="false" aria-controls="collapse3_4">
                                            ¿Qué hacer si sospecha que alguien más ha accedido a su cuenta?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_4" class="collapse" aria-labelledby="heading3_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Si sospecha que su cuenta ha sido comprometida, inicie sesión e intente
                                            cambiar su contraseña de inmediato.
                                            <br> - Para modificar su contraseña o recuperar su contraseña diríjase a la
                                            página de login e ingresé a la opción “Olvidé mi contraseña”.
                                            <br> - Si al realizar estos cambios aún no puede iniciar sesión, comuníquese con
                                            soporte para obtener ayuda al correo electrónico ayuda@smirrow.com .

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <h3>Preguntas técnicas</h3>
                            <div class="card ">
                                <div class="card-header" id="heading3_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_5" aria-expanded="false" aria-controls="collapse3_5">
                                            Ajustes del correo electrónico
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_5" class="collapse" aria-labelledby="heading3_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Una dirección de correo electrónico verificada garantiza que reciba
                                            notificaciones importantes del sistema, podrá restablecer su contraseña y
                                            recibir actualizaciones sobre su cuenta.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_6" aria-expanded="false" aria-controls="collapse3_6">
                                            ¿Tiene una aplicación digital para IOS o Android?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_6" class="collapse" aria-labelledby="heading3_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Smirrow si tendrá aplicaciones digitales para tu móvil, la cual podrás
                                            descargar directamente desde la plataforma web de Smirrow.
                                            <br> - La plataforma funciona perfectamente desde un computador de escritorio y
                                            dispositivo móvil smartphone y tablet a través de su web y web móvil.
                                            <br> - La ventaja de descargar nuestra app desde la plataforma es que no deberá
                                            estar actualizando constantemente, esto se hará de forma automática.
                                            <br> - Nuestra tecnología siempre está mejorando, cambiando, actualizándose para
                                            que brindar un excelente funcionamiento y uso del producto.
                                            <br> - No debe descargar ninguna aplicación digital por fuera de la plataforma,
                                            si es así, considérelo sospechoso y debe informarnos al correo electrónico
                                            legal@smirrow.com

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_7" aria-expanded="false" aria-controls="collapse3_7">
                                            ¿Cómo crear un acceso directo en mi dispositivo móvil?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_7" class="collapse" aria-labelledby="heading3_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Las maneras más fáciles de ingresar a Smirrow es ir a su navegador y agregarlo
                                            a la pantalla de inicio.
                                            <br> - Si tiene un iPhone o iPad, abra safari en su dispositivo móvil, navegue a
                                            Smirrow, toque la opción “compartir” en la parte inferior, este icono se ve como
                                            cuadrado con una flecha apuntando hacia arriba y seleccione la opción “Agregar a
                                            la pantalla de inicio”, listo tendrá acceso a Smirrow como si tuviera una
                                            aplicación digital.
                                            <br> - Si tiene un Android, abra Chrome en su dispositivo móvil, navegue a
                                            Smirrow, toque “opciones”, puede aparecer tres puntos verticales en la parte
                                            superior, después seleccione la opción “añadir a pantalla de inicio”, luego
                                            seleccione añadir y listo, se agregará un acceso directo similar a una
                                            aplicación digital y puede seguir ingresando rápido a Smirrow.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_8" aria-expanded="false" aria-controls="collapse3_8">
                                            Dirección de privacidad y términos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_8" class="collapse" aria-labelledby="heading3_8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Tenga en cuenta que según la normatividad legal del país donde se encuentre y
                                            la evolución de la tecnología, hará que las políticas de términos y condiciones
                                            puedan cambiar.
                                            <br> - Se actualizan constantemente las condiciones de servicio como un gran
                                            esfuerzo para continuo para simplificar y mejorar el funcionamiento de Smirrow
                                            para todos los usuarios y personas prestadoras de servicios de entretenimiento
                                            para adultos.
                                            <br> - Tenga en cuenta que, si no llega a aceptar y no esta de acuerdo con los
                                            nuevos términos que se lleguen a presentar, debe eliminar su perfil y dejar de
                                            usar la plataforma.
                                            <br> - Para saber más de nuestros términos, vaya a la página de login y en la
                                            parte inferior seleccione términos y condiciones.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_9" aria-expanded="false" aria-controls="collapse3_9">
                                            Información personal
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_9" class="collapse" aria-labelledby="heading3_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            - Si algún usuario o persona prestadora de servicios de entretenimiento para
                                            adultos elimina la cuenta y perfil, todos los datos relacionados con su uso de
                                            Smirrow, datos bancarios, datos personales y cualquier dato que tengamos sobre
                                            usted, será eliminado completamente después de los doce (12) meses.
                                            <br> - Cumplimos con el manejo de manejo, uso y seguridad sobre datos personales
                                            con base en la normatividad legal según el país.
                                            <br> - Si quiere saber más sobre el manejo de datos personales diríjase a la
                                            página de login, seleccione la opción privacidad en la parte inferior.
                                            <br> - Si tiene más dudas e inquietudes, escribanos al correo electrónico
                                            legal@smirrow.com

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


@endsection

