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
@section('meta_description')Smirrow Politicas de privacidad | Conoce nuestras políticas de privacidad y sientete cómod@
con nuestro servicio@endsection @endsection
@section('title')@lang('messages.title_frecuency')@endsection
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

    <div class="btn-float btn-smirrow btn-back c-pointer" onclick="location.href = 'https://smirrow.com/';"><i
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
                            <h2 class="text-light mt-4 ">Privacidad</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container">
            <div class="row mt-5">

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  position-static mb-5">

                    <ul class="list-group ">
                        <li class="list-group-item item-one smirrow-active c-pointer"> Políticas de seguridad, manejo,
                            privacidad y uso de datos personales</li>
                        <li class="list-group-item item-two c-pointer">Políticas de uso aceptable</li>
                        <li class="list-group-item  item-three  c-pointer"> Políticas de quejas y reclamos</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8  res bg-light">
                    <div class="accordion  " id="accordion_general">
                        <div class="acordion_one">
                            <div class="card ">
                                <div class="card-header" id="heading1_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_1" aria-expanded="false" aria-controls="collapse1_1">
                                            Política de privacidad y uso de datos personales
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_1" class="collapse" aria-labelledby="heading1_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> La empresa expuesta arriba, en adelante Smirrow, es propietaria de este
                                            sitio smirrow.com en adelante, Smirrow.

                                            <br> En cumplimiento de lo establecido en la Ley 1581 de 2012 reglamentada
                                            parcialmente por el Decreto 1377 de 2013 y Decreto 886 de 2014, normas
                                            compiladas en el Decreto Único Nacional del Sector Comercio, Industria y Turismo
                                            1074 de 2015 (Artículos 2.2.2.25.1.1. al 2.2.2.26.3.4), mediante el presente
                                            documento se adopta la POLÍTICA DE PROTECCIÓN Y TRATAMIENTO DE DATOS PERSONALES
                                            con el propósito de proteger la información personal brindada por los socios,
                                            proveedores, clientes, empleados, usuarios y cualquier otra persona natural de
                                            la cual Smirrow, obtenga o trate información personal.
                                            <br> La recogida y tratamiento automatizado de los datos personales tiene como
                                            finalidad el correcto funcionamiento del servicio que da Smirrow, el
                                            mantenimiento de la relación comercial en caso de que la haya y el desempeño de
                                            tareas de información, asesoramiento y otras actividades propias de Smirrow.

                                            <br> Estos datos únicamente serán cedidos a aquellas entidades que sean
                                            necesarias con el único objetivo de dar cumplimiento a la finalidad
                                            anteriormente expuesta.

                                            <br> Smirrow, adopta las medidas necesarias para garantizar la seguridad,
                                            integridad y confidencialidad de los datos y a la libre circulación de estos.

                                            <br> El usuario podrá en cualquier momento ejercitar los derechos de acceso,
                                            oposición, rectificación y cancelación reconocidos en la normatividad
                                            colombiana. El ejercicio de estos derechos puede realizarlo el propio usuario a
                                            través de email o dirección.

                                            <br> El usuario manifiesta que todos los datos facilitados por él son ciertos y
                                            correctos, y se compromete a mantenerlos actualizados, comunicando los cambios a
                                            Smirrow.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_2" aria-expanded="false" aria-controls="collapse1_2">
                                            Finalidad del tratamiento de los datos personales
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_2" class="collapse" aria-labelledby="heading1_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                            Trataremos tus datos personales recabados a través el Smirrow, con las
                                            siguientes finalidades: <br> <br>

                                            Perfil creado en Smirrow: Para poderle prestar el servicio solicitado, para que
                                            pueda publicar su cuenta en Smirrow. Recuerde que los datos que facilite al
                                            crear su perfil a excepción de su email serán públicos. <br><br>

                                            Contacto dentro de Smirrow: Para que pueda contactar con Smirrow, estos datos
                                            son privados y serán enviados al TITULAR. Nunca cederemos estos datos y nunca le
                                            enviaremos ninguna notificación. En el caso que usted sea un usuario la persona
                                            que le contacte nunca sabrá su email a menos que le responda al correo que le
                                            envía la web. <br><br>

                                            Denunciar dentro de Smirrow: Para poder reportar el mal uso de la plataforma
                                            digital Smirrow. Estos datos son privados y una vez ejercida una acción podemos
                                            responderle por email las acciones tomadas. Nunca cederemos estos datos y nunca
                                            te enviaremos ningún boletín a ellos. <br><br>

                                            Remitir boletines, así como comunicaciones comerciales de promociones y/o
                                            publicidad de Smirrow o las webs que administra Smirrow, nunca de terceros. <br><br>

                                            Te recordamos que puedes oponerte al envío de comunicaciones comerciales por
                                            cualquier vía y en cualquier momento, remitiendo un correo electrónico a la
                                            dirección indicada. <br><br>

                                            Completar el perfil y demás pestañas es obligatorio para que su cuenta dentro de
                                            Smirrow quede activada. <br><br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left  text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_3" aria-expanded="false" aria-controls="collapse1_3">
                                            ¿Por cuánto tiempo se conservan los datos personales recabados?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_3" class="collapse" aria-labelledby="heading1_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Los datos personales proporcionados se conservarán mientras se mantenga la
                                            relación comercial o no solicites su supresión y durante el plazo por el cual
                                            pudieran derivarse responsabilidades legales por los servicios prestados. <br>

                                            Si usted no elimina su cuenta, Smirrow, los mantendrá públicos por un periodo de
                                            2 años, a los dos años de inactividad su cuenta caducará, le recordamos que
                                            puede borrar su perfil en cualquier momento desde su panel de control. <br>

                                            Una vez elimine su cuenta, la ley nos obliga a guardar los datos de su perfil
                                            borrado por el periodo de un año por si hubiera una investigación policial, lega
                                            o judicial, sus datos no serán públicos, pero físicamente serán borrados cuando
                                            cumplan este periodo. <br>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_4" aria-expanded="false" aria-controls="collapse1_4">
                                            Legitimación
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_4" class="collapse" aria-labelledby="heading1_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            El tratamiento de sus datos se realiza con las siguientes bases jurídicas que
                                            legitiman el mismo: <br>

                                            La solicitud para adquirir un servicio de por medio de la plataforma digital
                                            Smirrow, cuyos términos y condiciones se pondrán a su disposición en todo caso,
                                            de forma previa a una eventual contratación. <br>

                                            El consentimiento libre, específico, informado e inequívoco, en tanto que te
                                            informamos poniendo a su disposición la presente política de privacidad, que,
                                            tras la lectura de la misma, en caso de estar conforme, puede aceptar mediante
                                            una declaración o una clara acción afirmativa, como el marcado de una casilla
                                            dispuesta al efecto. En caso de que no nos facilite sus datos o lo hagas de
                                            forma errónea o incompleta, no podremos atender su solicitud, resultando del
                                            todo imposible proporcionarle la información solicitada o llevar a cabo la
                                            activación de la cuenta para que adquieran sus servicios. <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_5" aria-expanded="false" aria-controls="collapse1_5">
                                            Destinatarios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_5" class="collapse" aria-labelledby="heading1_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Los datos no se comunicarán a ningún tercero ajeno a Smirrow, salvo obligación
                                            legal. <br>

                                            Como encargados de tratamiento, tenemos contratados a los proveedores de
                                            servicios externos, como empresas de cobro, gestión y administración,
                                            programación, hosting, habiéndose comprometido al cumplimiento de las
                                            disposiciones normativas, de aplicación en materia de protección de datos, en el
                                            momento de su contratación. <br>

                                            Si contacta con un usuario prestador de servicios de Smirrow, sus datos serán
                                            cedidos a él/ella porque así usted lo ha solicitado para poder adquirir un
                                            servicio. <br>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_6" aria-expanded="false" aria-controls="collapse1_6">
                                            Datos recopilados por usuarios de los servicios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_6" class="collapse" aria-labelledby="heading1_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            En los casos en que el usuario incluya ficheros con datos de carácter personal
                                            en los servidores de alojamiento compartido, Smirrow no se hace responsable del
                                            incumplimiento por parte del usuario del RGPD. <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_7" aria-expanded="false" aria-controls="collapse1_7">
                                            Retención de datos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_7" class="collapse" aria-labelledby="heading1_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Smirrow informa de que, como plataforma digital de economía colaborativa y en
                                            virtud de lo establecido en la Ley, retiene por un periodo máximo de 12 meses la
                                            información imprescindible para identificar el origen de los datos alojados y el
                                            momento en que se inició la prestación del servicio. La retención de estos datos
                                            no afecta al secreto de las comunicaciones y solo podrán ser utilizados en el
                                            marco de una investigación criminal o para la salvaguardia de la seguridad
                                            pública, poniéndose a disposición de los jueces y/o tribunales o del Ministerio
                                            que así los requiera.

                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left  text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_8" aria-expanded="false" aria-controls="collapse1_8">
                                            Derechos propiedad intelectual de Smirrow
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_8" class="collapse" aria-labelledby="heading1_8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Smirrow es titular de todos los derechos de autor, propiedad intelectual,
                                            industrial, "know how" y cuantos otros derechos guardan relación con los
                                            contenidos del sitio web Smirrow y los servicios ofertados en el mismo, así como
                                            de los programas necesarios para su implementación y la información relacionada.
                                            <br>

                                            No se permite la reproducción, publicación y/o uso no estrictamente privado de
                                            los contenidos, totales o parciales, de Smirrow sin el consentimiento previo y
                                            por escrito. <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_9" aria-expanded="false" aria-controls="collapse1_9">
                                            Propiedad intelectual del software <i> (Derechos de Autor)</i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_9" class="collapse" aria-labelledby="heading1_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            El usuario debe respetar los programas de terceros puestos a su disposición por
                                            Smirrow, aun siendo gratuitos y/o de disposición pública. <br>

                                            Smirrow dispone de los derechos de explotación y propiedad intelectual
                                            necesarios del software. <br>

                                            Ningún tipo o clases de usuarios adquiere derecho alguno o licencia sobre la
                                            plataforma digital Smirrow, ni sobre el software necesario para la prestación de
                                            servicios, ni tampoco sobre la información técnica de seguimiento del servicio,
                                            excepción hecha de los derechos y licencias necesarios para el cumplimiento de
                                            los servicios y únicamente durante la duración de estos. <br>

                                            Para toda actuación que exceda del cumplimiento del servicio, el usuario
                                            necesitará autorización por escrito por parte de Smirrow, quedando prohibido al
                                            usuario acceder, modificar, visualizar la configuración, estructura y ficheros
                                            de los servidores propiedad de Smirrow, asumiendo la responsabilidad civil y
                                            penal derivada de cualquier incidencia que se pudiera producir en los servidores
                                            y sistemas de seguridad como consecuencia directa de una actuación negligente o
                                            maliciosa por su parte. <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_10">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_10" aria-expanded="false" aria-controls="collapse1_10">

                                            Propiedad intelectual de los contenidos alojados

                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_10" class="collapse" aria-labelledby="heading1_10"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Se prohíbe el uso contrario a la legislación sobre propiedad intelectual de los
                                            servicios prestados por Smirrow y, en particular de: <br>

                                            La utilización que resulte contraria a las leyes colombianas, la buena fe y
                                            principios constitucionales o que infrinja los derechos de terceros. <br>

                                            La publicación o la transmisión de cualquier contenido que, a juicio de Smirrow,
                                            resulte violento, obsceno, abusivo, ilegal, racial, xenófobo o difamatorio. <br>


                                            Los cracks, números de serie de programas o cualquier otro contenido que vulnere
                                            derechos de la propiedad intelectual de terceros. <br>

                                            La recogida y/o utilización de datos personales de otros usuarios sin su
                                            consentimiento expreso o contraviniendo lo dispuesto en la ley, relativo a la
                                            protección de las personas físicas en lo que respecta al tratamiento de datos
                                            personales y a la libre circulación de estos. <br>

                                            La utilización del servidor de correo del dominio y de las direcciones de correo
                                            electrónico para el envío de correo masivo no deseado. <br>

                                            El usuario tiene toda la responsabilidad sobre el contenido de su perfil, la
                                            información transmitida y almacenada, los enlaces de hipertexto, las
                                            reivindicaciones de terceros y las acciones legales en referencia a propiedad
                                            intelectual, derechos de terceros y protección de menores. <br>

                                            El usuario es responsable respecto a las leyes y reglamentos en vigor y las
                                            reglas que tienen que ver con el funcionamiento del servicio online, comercio
                                            electrónico, derechos de autor, mantenimiento del orden público, así como
                                            principios universales de uso de Internet. <br>

                                            El usuario indemnizará a Smirrow por los gastos que generará la imputación de
                                            cargos en Smirrow por alguna causa cuya responsabilidad fuera atribuible al
                                            usuario, incluidos honorarios y gastos de defensa jurídica, incluso en el caso
                                            de una decisión judicial no definitiva. <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_11">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_11" aria-expanded="false" aria-controls="collapse1_11">
                                            Protección de la información alojada
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_11" class="collapse" aria-labelledby="heading1_11"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Smirrow realiza copias de seguridad de los contenidos alojados en sus
                                            servidores, sin embargo, no se responsabiliza de la pérdida o el borrado
                                            accidental de los datos por parte de los usuarios. De igual manera, no garantiza
                                            la reposición total de los datos borrados por los usuarios, ya que los citados
                                            datos podrían haber sido suprimidos y/o modificados durante el periodo del
                                            tiempo transcurrido desde la última copia de seguridad. <br>

                                            Los servicios ofertados, excepto los servicios específicos de backup, no
                                            incluyen la reposición de los contenidos conservados en las copias de seguridad
                                            realizadas por Smirrow, cuando esta pérdida sea imputable al usuario; en este
                                            caso, se determinará una tarifa acorde a la complejidad y volumen de la
                                            recuperación, siempre previa aceptación del usuario. <br>

                                            La reposición de datos borrados solo está incluida en el precio del servicio
                                            cuando la pérdida del contenido sea debida a causas atribuibles a Smirrow. <br>


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_12">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_12" aria-expanded="false" aria-controls="collapse1_12">
                                            Comunicaciones comerciales
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_12" class="collapse" aria-labelledby="heading1_12"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            En aplicación de Habeas Data, Smirrow no enviará comunicaciones publicitarias o
                                            promocionales por correo electrónico u otro medio de comunicación electrónica
                                            equivalente que previamente no hubieran sido solicitadas o expresamente
                                            autorizadas por los destinatarios de estas. <br>

                                            En el caso de usuarios con los que exista una relación previa, Smirrow sí está
                                            autorizado al envío de comunicaciones comerciales referentes a productos o
                                            servicios de Smirrow que sean similares a los que inicialmente fueron objeto de
                                            contratación con el cliente. <br>

                                            En todo caso, el usuario, tras acreditar su identidad, podrá solicitar que no se
                                            le haga llegar más información comercial a través de los canales de Atención al
                                            Cliente <br>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading1_13">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse1_13" aria-expanded="false" aria-controls="collapse1_13">
                                            ¿Cuáles son tus derechos cuando nos facilitas tus datos?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_13" class="collapse" aria-labelledby="heading1_13"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            • Derecho de información <br>
                                            • Derecho de acceso <br>
                                            • Derecho de rectificación <br>
                                            • Derecho de cancelación <br>
                                            • Derecho de limitación <br>
                                            • Derecho a la portabilidad <br>
                                            • Derecho de oposición <br>

                                            Puede escribir directamente al correo electrónico privacidad@smirrow.com o
                                            escribir al WhatSapp No 322 378 1478 y atenderemos sus reclamos, quejas y demás
                                            inquietudes. <br>

                                            Las políticas de uso aceptable y las políticas de quejas y reclamos se adhieren
                                            a las presentes políticas de seguridad, manejo, privacidad y uso de datos
                                            personales. <br>

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
                        </div>
                        <div class="acordion_two d-none">
                            <div class="card ">
                                <div class="card-header" id="heading2_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse2_1" aria-expanded="false" aria-controls="collapse2_1">
                                            Políticas de uso aceptable
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_1" class="collapse" aria-labelledby="heading2_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <h5>
                                            Al utilizar nuestra plataforma, usted acepta estas políticas:
                                        </h5>
                                        <p>
                                            Estas políticas se aplican a su uso de Smirrow y a todos los servicios y
                                            contenido de Smirrow y forma parte de su acuerdo con nosotros. Estas políticas
                                            establecen lo que está y no está permitido en Smirrow.
                                            <br> En estas políticas, los términos definidos tienen el mismo significado que
                                            en nuestros términos y condiciones de uso para todos los usuarios y las
                                            políticas de seguridad, manejo y privacidad de datos personales.
                                            <br>
                                            <br> 1. No use Smirrow excepto para su propio uso personal y no venda, alquile,
                                            transfiera o comparta su cuenta o cualquier servicio o contenido obtenido de su
                                            uso de Smirrow con nadie más.
                                            <br> 2. Solo use Smirrow de una manera y para un propósito que sea legal.
                                            <br> 3. No cargue, publique, muestre o publique servicios o contenido en Smirrow
                                            que sea ilegal, fraudulento, difamatorio, odioso, discriminatorio, amenazante o
                                            acosador, o que aliente o promueva la violencia o cualquier actividad ilegal.
                                            <br> 4. No use Smirrow de ninguna manera que pueda explotar, dañar o intentar
                                            explotar o dañar a cualquier persona menor de 18 años, por ejemplo, exponiéndola
                                            a servicios o contenido inapropiado.
                                            <br> 5. No cargue, publique, muestre ni publique servicios y contenido en
                                            Smirrow que:
                                            <br>
                                            <br> a. Muestren, incluyen o hacen referencia a:
                                            <br>
                                            <br> - Cualquier individuo menor de 18 años (o que se refiere a individuos
                                            menores de 18 años en general).
                                            <br> - Cualquier otra persona, a menos que tenga documentación escrita que
                                            confirme que todas las personas mostradas o incluidas o mencionadas en sus
                                            servicios y contenidos tienen al menos 18 años de edad, y usted tiene un
                                            consentimiento por escrito de cada persona para usar su nombre o imágenes (o
                                            ambos) en los servicios y contenido.
                                            <br>
                                            <br> b. Muestren, promocionen, anuncien o hacen referencia a:
                                            <br>
                                            <br> - Armas de fuego, armas o cualquier bien cuya venta, posesión o uso esté
                                            sujeto a prohibiciones o restricciones.
                                            <br> - Drogas o parafernalia de drogas.
                                            <br> - Autolesión o suicidio.
                                            <br> - Incesto.
                                            <br> - Bestialidad.
                                            <br> - Violencia, violación, falta de consentimiento, hipnosis, intoxicación,
                                            agresión sexual, tortura, abuso sadomasoquista o esclavitud extrema, fisting
                                            extremo o mutilación genital.
                                            <br> - Pedofilia y necrofilia.
                                            <br> - Material de orina, escatológico o relacionado con excrementos.
                                            <br> - Pornografía (cualquier material sexualmente explícito que muestre a
                                            cualquier persona que no haya dado su consentimiento previo, expreso y
                                            totalmente informado para que ese material (a) sea tomado, capturado o
                                            conmemorado de otra manera, o (b) se publique y comparta en Smirrow.
                                            <br> - Servicios de acompañantes, servicios de escorts, servicios sexuales sin
                                            el consentimiento, en contra de la voluntad y que este siendo obligada (o) esa
                                            persona.
                                            <br>
                                            <br> c. Contiene servicios y contenido sexual no solicitado o lenguaje no
                                            solicitado que objetiva sexualmente a otro usuario o cualquier otra persona de
                                            manera no consensuada, o contiene servicios y contenido sexual falso o
                                            manipulado en relación con otro usuario o cualquier otra persona (incluidos los
                                            "deepfakes").
                                            <br>
                                            <br> d. Contiene, promueve, publicita o hace referencia a discursos de
                                            incitación al odio (contenido destinado a vilipendiar, humillar, deshumanizar,
                                            excluir, atacar, amenazar o incitar al odio, el miedo o la violencia contra un
                                            grupo o individuo por motivos de raza, etnia, nacionalidad, estado migratorio,
                                            casta, religión, sexo, identidad o expresión de género, orientación sexual,
                                            edad, discapacidad, enfermedad grave, condición de veterano o cualquier otra
                                            característica protegida).
                                            <br>
                                            <br> e. Contiene o hace referencia a datos personales o información privada o
                                            confidencial de otra persona (por ejemplo, números de teléfono, información de
                                            ubicación (incluidas direcciones y coordenadas GPS), nombres, documentos de
                                            identidad, direcciones de correo electrónico, credenciales de inicio de sesión
                                            para Smirrow, incluidas contraseñas y preguntas de seguridad , información
                                            financiera, incluidos detalles de la cuenta bancaria y de la tarjeta de crédito,
                                            datos biométricos y registros médicos) sin el consentimiento expreso por escrito
                                            de esa persona.
                                            <br>
                                            <br> f. Cualquiera:
                                            <br>
                                            <br> - En el caso de servicios y contenido con desnudez pública, se grabó o se
                                            transmite desde un país, estado o provincia donde la desnudez pública es ilegal.
                                            <br> - En el caso de servicios y contenido que presenta actividades sexuales, se
                                            grabó o se está transmitiendo desde un lugar público donde es razonablemente
                                            probable que los miembros del público vean las actividades que se realizan (esto
                                            no incluye lugares al aire libre donde los miembros del público no están
                                            presentes, por ejemplo, propiedad privada como un patio trasero privado o áreas
                                            aisladas en la naturaleza donde los miembros del público no están presentes).
                                            <br>
                                            <br> g. Da la impresión de que proviene o está aprobado, autorizado o respaldado
                                            por nosotros o por cualquier otra persona o empresa.
                                            <br> h. Cause o esté calculado para causar inconvenientes o ansiedad a cualquier
                                            otra persona o que pueda molestar, avergonzar o causar una ofensa grave a
                                            cualquier otra persona.
                                            <br>
                                            <br> i. Se utiliza o está destinado a ser utilizado para extraer dinero u otro
                                            beneficio de cualquier otra persona a cambio de la eliminación de servicios y
                                            contenido.
                                            <br>
                                            <br> j. Implica o promueve actividades comerciales o ventas de terceros, como
                                            concursos, sorteos y otras promociones de ventas, colocación de productos,
                                            publicidad o anuncios de empleo o anuncios de empleo sin nuestro consentimiento
                                            expreso previo.
                                            <br>
                                            <br> 6. No utilice Smirrow para acechar, intimidar, abusar, acosar, amenazar o
                                            intimidar a nadie más.
                                            <br>
                                            <br> 7. No utilice Smirrow para participar en conductas engañosas, o conductas
                                            que puedan inducir a error o engañar a cualquier otro usuario.
                                            <br>
                                            <br> 8. Respete los derechos de propiedad intelectual de los Creadores, incluso
                                            al no grabar, reproducir, compartir, comunicar al público o distribuir sus
                                            servicios y contenido sin autorización.
                                            <br>
                                            <br> 9. No haga nada que viole nuestros derechos o los de otra persona,
                                            incluidos los derechos de propiedad intelectual (por ejemplo, derechos de autor,
                                            marcas comerciales, información confidencial y buena voluntad), derechos de
                                            personalidad, competencia desleal, privacidad y derechos de protección de datos.
                                            <br>
                                            <br> 10. No se haga pasar por nosotros, uno de nuestros empleados, otro usuario
                                            o cualquier otra persona o empresa, ni declare o sugiera falsamente cualquier
                                            afiliación, respaldo, patrocinio entre usted y nosotros o cualquier otra persona
                                            o empresa.
                                            <br>
                                            <br> 11. No proporcione información de registro de cuenta falsa ni haga un uso
                                            no autorizado de la información, servicios o el contenido de otra persona.
                                            <br>
                                            <br> 12. No publique ni haga que se publique ningún servicios o contenido que
                                            sea spam, que tenga la intención o el efecto de aumentar artificialmente las
                                            opiniones o interacciones de cualquier usuario, o que de otro modo sea falso,
                                            repetitivo, engañoso o de baja calidad.
                                            <br>
                                            <br> 13. No transmita, ni envíe ningún material de audio o video pregrabado
                                            durante una transmisión en vivo ni intente transmitir el material grabado como
                                            una transmisión en vivo.
                                            <br>
                                            <br> 14. No utilice otros medios o métodos (por ejemplo, el uso de palabras en
                                            clave o señales) para comunicar algo que viole esta Política.
                                            <br>
                                            <br> 15. No reproduzca, imprima, distribuya, intente descargar, modificar, crear
                                            trabajos derivados, exhibir públicamente, ejecutar públicamente, republicar,
                                            descargar, almacenar o transmitir cualquier servicio y contenido, excepto según
                                            lo permitido por los términos y condiciones de uso.
                                            <br>
                                            <br> 16. No introduzca intencionalmente virus, troyanos, gusanos, bombas lógicas
                                            u otro material en los servicios y contenido que sea o pueda ser malicioso o
                                            tecnológicamente dañino.
                                            <br>
                                            <br> 17. No descompile, desmonte, realice ingeniería inversa ni intente
                                            descubrir o derivar el código fuente de Smirrow.
                                            <br>
                                            <br> 18. No use Smirrow de una manera que pueda afectar negativamente nuestros
                                            sistemas o seguridad o interferir con el uso de Smirrow de cualquier otro
                                            usuario, incluida su capacidad para participar en actividades en tiempo real a
                                            través de Smirrow.
                                            <br>
                                            <br> 19. No use ningún programa, herramienta o proceso automatizado (como
                                            rastreadores web, robots, arañas bots y scripts automatizados) para acceder a
                                            Smirrow o cualquier servidor, red o sistema asociado con Smirrow, o para
                                            extraer, raspar, recolectar, cosechar o recolectar contenido o información de
                                            Smirrow.
                                            <br>
                                            <br> 20. No utilice el nombre, el logotipo de Smirrow o cualquier nombre,
                                            logotipo, nombre de producto y servicio, diseño o lema relacionados o similares,
                                            excepto en las formas limitadas que están expresamente permitidas en los
                                            términos y condiciones de uso o con un acuerdo nuestro previo por escrito.
                                            <br>
                                            <br> El incumplimiento de estas políticas de uso aceptable pueden provocar la
                                            suspensión o cancelación de su cuenta y la revocación del acceso a sus
                                            ganancias, como se establece en los términos y condiciones de uso.



                                        </p>
                                        <br>

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
                            <br>
                            <br>
                            <br>


                        </div>

                        <div class=" acordion_three d-none">
                            <div class="card ">
                                <div class="card-header" id="heading3_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                            data-target="#collapse3_1" aria-expanded="false" aria-controls="collapse3_1">
                                            Políticas de quejas y reclamos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse3_1" class="collapse" aria-labelledby="heading3_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> 1. Introducción:
                                            <br> Este documento establece nuestras políticas de quejas y reclamos. Si es
                                            usuario de Smirrow, esta política de quejas y reclamos forman parte de su
                                            acuerdo con nosotros.
                                            <br>
                                            <br> 2. Quiénes somos y cómo contactarnos:
                                            <br> Smirrow es operado por una empresa privada. Somos una sociedad anónima
                                            registrada legalmente en Colombia, con número de registro de empresa, matricula
                                            mercantil y número de WhatsApp 322 378 1478 y correo legal@smirrow.com
                                            <br>
                                            <br> 3. Interpretación:
                                            <br> En estas políticas de quejas y reclamos, los términos definidos tienen el
                                            mismo significado que se les da en los términos y condiciones de uso para todos
                                            los usuarios.
                                            <br>
                                            <br> 4. ¿Quién puede utilizar esta Política de quejas?:
                                            <br> Sea o no usuario de Smirrow, puede utilizar estas políticas de quejas y
                                            reclamos para alertarnos sobre cualquier queja y reclamo que tenga relacionada
                                            con Smirrow.
                                            <br>
                                            <br> 5. Cómo presentar una queja y reclamo:
                                            <br> Si tiene una queja y reclamo sobre Smirrow (incluida cualquier queja y
                                            reclamo sobre los servicios y contenido que aparece en Smirrow o la conducta de
                                            un usuario), envíe su queja a legal@smirrow.com incluyendo su nombre, dirección,
                                            datos de contacto, una descripción de su queja y reclamo y, si su queja y
                                            reclamo se relaciona con los servicios y contenido, la URL de los servicios y
                                            contenido al que se refiere su queja y reclamo.
                                            <br> Si no puede comunicarse con nosotros por correo electrónico, escríbanos al
                                            número de WhatsApp 322 378 1478.
                                            <br>
                                            <br> 6. Cómo trataremos su queja y reclamo:
                                            <br> Después de recibir su queja según el numeral cinco (5) anterior:
                                            <br>
                                            <br> a. Tomaremos las medidas que consideremos apropiadas para investigar su
                                            queja dentro de un plazo que sea apropiado para la naturaleza de su queja.
                                            <br> b. Si necesitamos más información o documentos de usted, nos comunicaremos
                                            con usted para informarle.
                                            <br> c. De buena fe tomaremos las acciones que consideremos apropiadas para
                                            tratar el problema que ha planteado su queja y reclamo. Si se ha quejado y
                                            reclamado sobre los servicios y contenido que aparece en Smirrow y estamos
                                            satisfechos de que los servicios y contenido es ilegal o infringe nuestras
                                            políticas de uso aceptable, actuaremos rápidamente para eliminar dichos
                                            servicios y contenido.
                                            <br> No estamos obligados a informarle sobre el resultado de su queja y reclamo.
                                            <br>
                                            <br>
                                            <br> 7. Quejas injustificadas o abusivas:
                                            <br> Sí es usuario de Smirrow, garantiza (lo que significa que hace una promesa
                                            legalmente exigible) que no presentará ninguna queja y reclamo en virtud de
                                            estas políticas de quejas y reclamos que sea totalmente injustificada, abusiva o
                                            de mala fe. Si determinamos que ha incumplido esta garantía, podemos suspender o
                                            cancelar su cuenta de usuario.





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
                            <br>
                            <br>
                            <br>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer">
            Smirrow
        </div>
    </section>


@endsection
