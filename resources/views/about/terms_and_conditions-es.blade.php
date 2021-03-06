@extends('layouts.simple')

@section('css_before')
    <style>
        body {
            justify-content: center;
        }

    </style>

@endsection
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
@section('title')Smirrow | Terminos y condiciones @endsection
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
                        src="https://i.postimg.cc/zf3XKxbC/1200px-Flag-of-the-United-States-svg.png" alt="">
                    @lang('messages.english')</a>
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
                            <a href="/"><img class="rounded max-height-25"
                                    style="padding: 15px; width: 110px;height: 110px;"
                                    src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="Logo Smirrow"
                                    title="Logo de Smirrow">
                            </a>
                            <h2 class="text-light mt-4 title-header">@lang('auth.terms_and_conditions')</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container">
            <div class="row mt-5">

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  position-static mb-5">

                    <ul class="list-group ">
                        <li class="list-group-item item-one smirrow-active c-pointer">@lang('auth.terms_and_conditions')
                        </li>
                        <li class="list-group-item item-two c-pointer">@lang('auth.terms_acquisitions')</li>
                        <li class="list-group-item  item-three c-pointer">@lang('auth.terms_bidders')</li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8  res bg-light">
                    <div class="accordion  " id="accordion_general">
                        <div class="acordion_one">
                            <h3>@lang('auth.terms_and_conditions')</h3>

                            <div class="card">
                                <div class="card-header" id="heading1_">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_" aria-expanded="false"
                                            aria-controls="collapse1_">
                                            Titularidad del sitio web
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_" class="collapse" aria-labelledby="heading1_"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Smirrow ??? WhatSapp 322 378 1478.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading1_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_2" aria-expanded="false"
                                            aria-controls="collapse1_2">
                                            Aceptaci??n de las condiciones de uso
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_2" class="collapse" aria-labelledby="heading1_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                            <br>
                                            Este SITIO WEB es titularidad de la empresa rese??ada en el punto uno de este
                                            documento.
                                            <br><br>
                                            Estos t??rminos y condiciones de uso para todos los usuarios rigen su uso en
                                            Smirrow y su acuerdo con nosotros.
                                            <br><br>


                                            a. En los t??rminos de servicio:
                                            <br>

                                            <br> Nos referimos a nuestro sitio web como Smirrow, incluso cuando accede a
                                            trav??s de la URL www.smirrow.com o mediante cualquier navegador web.
                                            <br>
                                            <br> Aclaramos que al decir contenido, significa cualquier material subido a
                                            Smirrow por cualquier usuario (ya sea una ofertante o un adquiriente) incluidas
                                            fotos, videos, audio, (m??sica y sonidos), material de transmisi??n, datos, texto,
                                            metadatos, im??genes, funciones interactivas emojis, GIF, memes y cualquier otro
                                            material.
                                            <br>
                                            <br> El servicio que provee la plataforma digital Smirrow es el de hosting o
                                            alojamiento web en un servidor con una conexi??n segura a internet y un software
                                            para poder publicar servicios de car??cter personal, las cuales desarrollan una
                                            actividad de tipo informativa de forma gratuita.
                                            <br>
                                            <br> Smirrow, no participa en la creaci??n de ninguno de los perfiles de este
                                            sitio, son perfiles creados por los usuarios, en donde Smirrow, solo los aloja.
                                            <br>
                                            <br> La utilizaci??n del portal atribuye la condici??n de usuario e implica la
                                            aceptaci??n de todas las disposiciones incluidas en estos t??rminos y condiciones
                                            de uso.
                                            <br>
                                            <br> La inserci??n de perfiles en el portal implica la aceptaci??n de todas las
                                            disposiciones de los t??rminos y condiciones de uso.
                                            <br>
                                            <br> Smirrow no puede asumir ninguna responsabilidad derivada del uso
                                            incorrecto, inapropiado o il??cito de la informaci??n aparecida en los perfiles de
                                            Internet de la plataforma digital.
                                            <br>
                                            <br> Con los l??mites establecidos en la ley, Smirrow no asume ninguna
                                            responsabilidad derivada de la falta de veracidad, integridad, actualizaci??n y
                                            precisi??n de los datos o informaciones que se contienen en su plataforma digital
                                            por parte de los usuarios, quienes est??n obligados a actuar de buena fe y con
                                            informaci??n ver??dica.
                                            <br>
                                            <br> La plataforma digital Smirrow puede contener enlaces (links) a otras
                                            p??ginas de terceras partes que Smirrow no puede controlar. Por lo tanto, Smirrow
                                            no puede asumir responsabilidades por el contenido que pueda aparecer en p??ginas
                                            de terceros.
                                            <br>
                                            <br> Los textos, im??genes, sonidos, animaciones, software y el resto de
                                            contenidos incluidos en Smirrow son propiedad exclusiva de sus licenciantes.
                                            Cualquier acto de transmisi??n, distribuci??n, cesi??n, reproducci??n,
                                            almacenamiento o comunicaci??n p??blica total o parcial, debe contar con el
                                            consentimiento expreso de Smirrow.
                                            <br>
                                            <br> Asimismo, para acceder a algunos de los servicios que Smirrow ofrece a
                                            trav??s de la plataforma digital se deber?? proporcionar algunos datos de car??cter
                                            personal. En cumplimiento de lo establecido en la Ley de Protecci??n de Datos le
                                            informamos que, mediante la cumplimentaci??n de los presentes formularios, sus
                                            datos personales quedar??n incorporados y ser??n tratados en los ficheros de
                                            Smirrow, con el fin de poderle prestar y ofrecer nuestros servicios, as?? como
                                            para informarle de las mejoras de Smirrow. Puede obtener m??s informaci??n en las
                                            pol??ticas de seguridad, manejo y privacidad de datos personales.
                                            <br>
                                            <br> Adem??s, le informamos de la posibilidad de que ejerza los derechos de
                                            acceso, rectificaci??n, cancelaci??n y oposici??n de sus datos de car??cter
                                            personal, manera gratuita mediante email o por correo ordinario a Smirrow
                                            propietario de la plataforma digital y establece las siguientes condiciones de
                                            uso.
                                            <br>
                                            <br> b. Quienes somos y como contactarnos:
                                            <br>
                                            <br> Somos una sociedad registrada legalmente en Colombia, para contactarnos con
                                            cualquier pregunta sobre Smirrow, envi?? un correo electr??nico a
                                            ayuda@smirrow.com, si no puede contactarse con nosotros por correo electr??nico,
                                            escribanos al WhatsApp No 322 378 1478.
                                            <br>
                                            <br> c. Cambio de los t??rminos y condiciones de uso:
                                            <br>
                                            <br> Smirrow se reserva el derecho de modificar las condiciones de uso de la
                                            plataforma digital. Por ello, es obligaci??n del usuario leerlas peri??dicamente.
                                            <br>
                                            <br> Podemos cambiar cualquier parte de los t??rminos y condiciones de uso sin
                                            avisarles de antemano en las siguientes circunstancias:
                                            <br>
                                            <br> - Para reflejar los cambios en las leyes y los requerimientos
                                            reglamentarios que se aplican a Smirrow y los servicios, caracter??stica y
                                            programas de Smirrow donde se requiere dichos cambios en donde no nos permite
                                            dar avisos urgentes.
                                            <br> - Para abordar un peligro imprevisto e inminente relacionado con la defensa
                                            de Smirrow, por cambios de normatividad seg??n el pa??s donde opere, por los
                                            usuarios al cometer fraudes o delitos, por malware, spam, violaciones de datos u
                                            otros riesgos de ciberseguridad.
                                            <br> - Tambi??n podemos realizar otros cambios en cualquier parte de los t??rminos
                                            de servicio y avisaremos a trav??s de Smirrow.
                                            <br> - Puede darse de baja en cualquier momento, si al momento de entrar en
                                            vigencia los cambios, usted sigue usando Smirrow, estar?? sujeto a los nuevos
                                            t??rminos y condiciones de uso.
                                            <br>
                                            <br> d. Realizaci??n de cambios, suspensiones y retiros:
                                            <br>
                                            <br> - Podemos actualizar y cambiar Smirrow en cualquier momento y por cualquier
                                            motivo, incluso para reflejar cambios en nuestros servicios, las necesidades de
                                            los usuarios, nuestras pr??cticas comerciales o para mejorar el rendimiento, la
                                            funcionalidad y la seguridad.
                                            <br> - Intentaremos avisarle con tiempo de cualquier cambio importante.
                                            <br> - Podemos suspender, retirar, restringir la disponibilidad de todo o parte
                                            de Smirrow por razones comerciales u operativas.
                                            <br> - No garantizamos que Smirrow, o cualquier contenido en ??l, estar?? siempre
                                            disponible o accesible sin interrupciones.
                                            <br> - Trataremos de darle un aviso razonable de cualquier suspensi??n o retiro
                                            si le afecta.
                                            <br>
                                            <br> e. Registrarse en Smirrow:
                                            <br>
                                            <br> - Primero debe registrarse seleccionando una de las dos opciones si es
                                            acompa??ante, ??sea un usuario ofertante de servicios de entretenimiento para
                                            adultos o si busca compa????a, ??sea un usuario adquisidor de servicios.
                                            <br> - Debe proporcionar una direcci??n de correo electr??nico v??lida, su nombre,
                                            un nombre de usuario y contrase??a, aceptar t??rminos y condiciones de uso o
                                            autenticarse con una cuenta v??lida de Facebook o Google.
                                            <br> - Su contrase??a debe ser ??nica y diferente para mayor seguridad.
                                            <br> - Debe cumplir con los requisitos de composici??n de contrase??as en Smirrow.
                                            <br> - Para registrarse debe tener al menos 18 a??os de edad y se le solicitar??
                                            que lo confirme al ingresar a www.smirrow.com y aceptar que es mayor de edad.
                                            <br> - Solo se le permitir?? estar vinculado con Smirrow si es mayor de edad.
                                            <br> - No se le proh??be el acceso a la plataforma seg??n las leyes que apliquen a
                                            usted seg??n el pa??s donde resida.
                                            <br> - Si no cumple con los requisitos de mayor??a de edad, no debe acceder, ni
                                            utilizar Smirrow.
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br> f. Su compromiso con nosotros cuando se registra y usa Smirrow:
                                            <br>
                                            <br> - Asume y asegurar?? que toda la informaci??n que nos env??e es veraz, precisa
                                            y completa.
                                            <br> - Actualizar?? de inmediato cualquier informaci??n que nos haya enviado a
                                            medida que cambie.
                                            <br> - Usted acepta recibir comunicaciones nuestras de forma electr??nica,
                                            incluidos correos electr??nicos y mensajes publicados en Smirrow y sobre el
                                            procesamiento de sus datos personales como se encuentra en nuestras pol??ticas de
                                            seguridad, manejo y privacidad de datos personales.
                                            <br> - Mantendr?? su cuenta, datos de inicio de sesi??n confidenciales y seguros,
                                            incluidos sus datos de usuario, contrase??as y cualquier otra informaci??n que
                                            forme parte de nuestros procedimientos de seguridad y no los revelar?? a nadie
                                            m??s.
                                            <br> - Se pondr?? en contacto con ayuda@smirrow.com de inmediato si cree que
                                            alguien ha usado o est?? usando su cuenta al final de cada sesi??n.
                                            <br> - Asume que tendr?? especial cuidado al acceder a su cuenta desde una
                                            computadora p??blica o compartida, asegurando que otros no podr??n acceder a su
                                            cuenta, evitando dejar su contrase??a u otra informaci??n personal.
                                            <br> - Usted es responsable de toda actividad en su cuenta, incluso si,
                                            contrariamente a los t??rminos y condiciones de uso, otra persona usa su cuenta.
                                            <br> - Usted acepta y cumplir?? en su totalidad con estos t??rminos y condiciones
                                            de uso para todos los usuarios.
                                            <br>
                                            <br> g. Derecho que tienen los usuarios para suspender, cancelar y eliminar su
                                            cuenta:
                                            <br>
                                            <br> - Podemos, pero no estamos obligados a moderar o revisar su contenido para
                                            verificar el cumplimiento de los t??rminos y condiciones de uso.
                                            <br> - Es nuestra pol??tica el suspender el acceso a cualquier contenido que
                                            publique en Smirrow del que tengamos conocimientos que puede no cumplir con los
                                            t??rminos y condiciones de uso.
                                            <br> - Si suspendemos el acceso a cualquiera de sus contenidos, puede solicitar
                                            una revisi??n de nuestra decisi??n de suspender su contenido a ayuda@smirros.com.
                                            <br> - Luego de nuestra sospecha o ilegalidad de contenido relevante, podemos
                                            tomar cualquier acci??n que consideremos apropiada, incluyendo restablecer el
                                            acceso al contenido, eliminar o deshabilitar permanentemente el acceso al
                                            contenido sin necesidad de obtener consentimiento de usted y sin avisarle
                                            previamente.
                                            <br> - Usted acepta que nos brindar?? toda la informaci??n requerida y asistencia
                                            razonable proporcion??ndonos copia de solicitudes que le requiramos para
                                            investigaciones pertinentes.
                                            <br> - No seremos responsables de ninguna perdida sufrida por usted, derivada de
                                            la suspensi??n del acceso a su contenido o a su cuenta o perfil, o de cualquier
                                            otro paso que tomemos de buena fe para investigar cualquier sospecha a
                                            incumplimientos o ilegalidad de su contenido seg??n esta secci??n.
                                            <br> - Si suspendemos el acceso a su contenido o lo eliminamos, se lo
                                            notificaremos por correo electr??nico o mensaje electr??nico a su cuenta de
                                            Smirrrow, pero no estamos obligados a notificarle previamente dicha eliminaci??n.
                                            <br> - Nos reservamos el derecho, a nuestro exclusivo criterio, de prescindir su
                                            acuerdo con nosotros y su acceso a Smirrow por cualquier motivo, notific??ndole
                                            con 30 d??as de anticipaci??n por correo electr??nico o mensaje electr??nico a su
                                            cuenta de Smirrow. Tambi??n podemos suspender el acceso a su cuenta de usuario o
                                            rescindir su acuerdo con nosotros y su acceso a Smirrow de inmediato y sin
                                            previo aviso.
                                            <br> - Si creemos que ha infringido o puede haber infringido grave o
                                            repetidamente alguna parte de los t??rminos de servicio (incluida, en particular,
                                            nuestros t??rminos y condiciones de uso), o si intenta o amenaza con infringir
                                            cualquier parte de los T??rminos de una manera que haya o podr??a tener
                                            consecuencias graves para nosotros u otro usuario.
                                            <br> - Si realiza alguna acci??n que, en nuestra opini??n, haya causado o sea
                                            razonablemente probable que nos haga sufrir una p??rdida o que de otro modo da??e
                                            la reputaci??n de Smirrow.
                                            <br> - Si suspendemos el acceso a su cuenta de usuario o prescindimos su acuerdo
                                            con nosotros y su acceso a Smirrow, se lo haremos saber.
                                            <br> - Durante cualquier per??odo en el que se suspenda el acceso a su cuenta de
                                            usuario, se suspender??n los pagos hasta que se aclare todo.
                                            <br> - Podemos retener la totalidad o parte de las ganancias de su casillero ???mi
                                            dinero??? que se le adeuden, pero que a??n no se hayan pagado, si ha infringido,
                                            incumpliendo o cometido alg??n acto o hecho contra la ley y los t??rminos y
                                            condiciones de uso.
                                            <br> - Tras la cancelaci??n de su cuenta, podemos tratar su contenido de la
                                            manera adecuada de acuerdo con nuestras Pol??ticas de seguridad, manejo y
                                            privacidad de datos personales (incluso elimin??ndola) y ya no tendr?? derecho a
                                            acceder a su contenido. No existe ninguna funci??n t??cnica en Smirrow para que
                                            pueda acceder a su cuenta despu??s de la cancelaci??n de su cuenta.
                                            <br> - Podemos investigar cualquier presunto o presunto mal uso, abuso o uso
                                            ilegal de Smirrow y cooperar con las entidades legales competentes de aplicaci??n
                                            de la ley en dicha investigaci??n.
                                            <br> - Podemos divulgar cualquier informaci??n o registros que tengamos o
                                            controlemos sobre su uso de Smirrow a las entidades legales competentes de
                                            aplicaci??n de la ley en relaci??n con cualquier investigaci??n policial de
                                            cualquier actividad ilegal presunta, o en respuesta a una orden judicial.
                                            <br> - Podemos cambiar los proveedores de pago de terceros que utilizamos y, si
                                            lo hacemos, le notificaremos y almacenaremos los detalles correspondientes en su
                                            cuenta de Smirrow.
                                            <br> - Aparte del contenido, todos los derechos sobre y para Smirrow y todo su
                                            contenido, caracter??sticas, bases de datos, c??digo fuente y funcionalidad son
                                            propiedad nuestra y / o de nuestros licenciantes. Dicho material est?? protegido
                                            por derechos de autor y puede estar protegido por marcas registradas, secretos
                                            comerciales y otras leyes de propiedad intelectual.
                                            <br> - Smirrow tendr?? permiso de todos los usuarios de usar su contenido, si as??
                                            lo creemos conveniente para publicidad.
                                            <br> - Somos los propietarios ??nicos y exclusivos de todos y cada uno de los
                                            datos anonimizados relacionados con su uso de Smirrow y dichos datos an??nimos
                                            pueden ser utilizados por nosotros para cualquier prop??sito, incluso con fines
                                            comerciales, de desarrollo e investigaci??n.
                                            <br>
                                            <br> h. De qu?? no somos responsables:
                                            <br> - Usaremos el cuidado y la habilidad razonable para entregar el mejor uso
                                            de la plataforma Smirrow, pero hay ciertas cosas de las que no somos
                                            responsables, como se indica a continuaci??n:
                                            <br> - No autorizamos, ni aprobamos el contenido en Smirrow, ni las opiniones
                                            expresadas por todos los usuarios de Smirrow porque no representan
                                            necesariamente nuestras opiniones.
                                            <br> - No le otorgamos ning??n derecho en relaci??n con el contenido a ning??n
                                            usuario. Estos derechos solo pueden ser otorgados a usted por uno de usuarios
                                            ofertantes de servicios.
                                            <br> - Su contenido puede ser visto por personas que reconozcan su identidad. No
                                            seremos responsables de ninguna manera ante usted si se lo identifica a partir
                                            de su contenido. Si bien podemos, de vez en cuando y a nuestra entera
                                            discreci??n, ofrecer cierta tecnolog??a de geolocalizaci??n o geolocalizaci??n en
                                            Smirrow, usted comprende y acepta que no garantizamos la precisi??n o efectividad
                                            de dicha tecnolog??a, y no tendr?? ning??n reclamo contra nosotros que surja de su
                                            uso o dependencia de cualquier tecnolog??a de geolocalizaci??n, geovallas, marca
                                            de agua en Smirrow.
                                            <br> - Todo el contenido es creado, seleccionado y proporcionado por los
                                            usuarios y no por nosotros. No somos responsables de revisar o moderar el
                                            contenido, y no seleccionamos ni modificamos el contenido que se almacena o
                                            transmite a trav??s de Smirrow. No tenemos la obligaci??n de monitorear el
                                            Contenido o detectar incumplimientos de los t??rminos y condiciones de uso.
                                            <br> - Usted acepta que no tiene la obligaci??n de seguir ninguna sugerencia,
                                            comentario, revisi??n o instrucci??n recibida de otro usuario de Smirrow y que, si
                                            elige hacerlo, lo hace bajo su propio riesgo.
                                            <br> - No nos hacemos responsables del tipo de usuario que lleguen a Smirrow por
                                            referencias de otro usuario.
                                            <br> - No prometemos que Smirrow sea compatible con todos los dispositivos y
                                            sistemas operativos. Usted es responsable de configurar la tecnolog??a de la
                                            informaci??n, el dispositivo y los programas inform??ticos para acceder a Smirrow.
                                            <br> - Debe utilizar su propio software de protecci??n antivirus.
                                            <br> - No somos responsables de la disponibilidad de Internet o de cualquier
                                            error en sus conexiones, dispositivo u otro equipo o software que pueda ocurrir
                                            en relaci??n con su uso de Smirrow.
                                            <br> - Si bien tratamos de asegurarnos de que Smirrow sea seguro y est?? libre de
                                            errores y virus, no podemos prometer que lo ser?? y no tenemos control sobre el
                                            contenido proporcionado por los usuarios.
                                            <br> - No somos responsables de ninguna cuenta de usuario, contrase??as, cuentas
                                            de correo electr??nico perdidas, robadas o comprometidas, o cualquier actividad
                                            no autorizada resultante o pagos no autorizados o retiros de fondos resultantes.
                                            <br> - Usted reconoce que una vez que su contenido y servicios se publiquen en
                                            Smirrow, no podemos controlar y no seremos responsables ante usted por el uso
                                            que otros usuarios o terceros hagan de dicho contenido.
                                            <br> - Puede eliminar su cuenta en cualquier momento, pero reconoce que la
                                            eliminaci??n de su cuenta no impedir?? por s?? misma la circulaci??n de su contenido
                                            que pueda haber sido registrado por otros usuarios en violaci??n de los t??rminos
                                            y condiciones de uso o por terceros antes de la eliminaci??n de su cuenta.
                                            <br> - Smirrow no se hace responsable si usted como usuario usa un n??mero y
                                            cuenta bancaria de un tercero.
                                            <br>







                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_3" aria-expanded="false"
                                            aria-controls="collapse1_3">
                                            Mayor??a de edad.
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_3" class="collapse" aria-labelledby="heading1_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> En la presente plataforma digital est?? destinada exclusivamente a personas
                                            mayores de edad. Por ello, queda expresamente prohibida la utilizaci??n de
                                            Smirrow y navegaci??n a trav??s del mismo por menores de edad. Asimismo, no
                                            admitimos menores con permiso paterno, ni menores legalmente emancipados. Si
                                            eres menor de edad, abandona inmediatamente Smirrow.
                                            <br>
                                            <br> Smirrow se reserva el derecho de borrar, bloquear y no permitir nuevas
                                            publicaciones a cualquier usuario sobre el cual existiese sospechas o indicios
                                            de que es menor de edad.
                                            <br>
                                            <br> Smirrow se reserva el derecho de pedir a cualquier usuario un documento
                                            legal acreditativo (C.C., C.E., NIT, PASAPORTE) donde se muestre su edad y una
                                            fotograf??a identificativa para reanudar el servicio.
                                            <br>
                                            <br> Smirrow no acepta menores de edad que quieran prestar servicios dentro de
                                            la plataforma, para esto tambi??n solicita una foto selfie, n??mero de
                                            identificaci??n y n??mero de cuenta bancaria.
                                            <br>
                                            <br> Los perfiles creados cuentan con la seguridad que brinda Smirrow por medio
                                            de su plataforma web.
                                            <br>
                                            <br> Nos tomamos muy en serio el control de la mayor??a de edad de los usuarios,
                                            de modo que, si detectamos falsas denuncias por parte de un usuario a otro
                                            usuario, podemos restringir el servicio de forma permanente y el servicio al que
                                            haga mal uso del sistema de denuncias de Smirrow.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_4" aria-expanded="false"
                                            aria-controls="collapse1_4">
                                            Vinculaci??n desde y hacia Smirrow
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_4" class="collapse" aria-labelledby="heading1_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                        <h4>Enlaces a Smirrow:</h4>

                                        <br> Puede vincular sus redes sociales en configuraci??n de perfil de Smirrow, en la
                                        casilla de descripci??n, siempre que lo haga de una manera que sea justa y legal y no
                                        da??e nuestra reputaci??n ni se aproveche de ella, pero no debe establecer un v??nculo
                                        de tal manera que sugiera cualquier forma de asociaci??n, aprobaci??n o respaldo de
                                        nuestra parte.
                                        <br> Si es un usuario ofertante, al promocionar su cuenta, debe cumplir con nuestros
                                        t??rminos y condiciones de uso y los t??rminos de servicio de cualquier otro sitio web
                                        donde coloque un enlace o promocione su cuenta y servicios. Al promocionar su cuenta
                                        y servicios, no debe hacerse pasar por Smirrow, ni dar la impresi??n de que
                                        promocionamos su cuenta y servicios, si este no es el caso.
                                        <br> No debe promocionar su cuenta de Smirrow mediante el uso de Google Ads o
                                        cualquier plataforma publicitaria similar o servicio de publicidad en motores de
                                        b??squeda.
                                        <br> Si Smirrow contiene enlaces a otros sitios y recursos proporcionados por
                                        terceros, estos enlaces se proporcionan solo para su conveniencia. Dichos enlaces no
                                        deben interpretarse como una aprobaci??n por nuestra parte de esos sitios web
                                        vinculados o informaci??n que pueda obtener de ellos. No tenemos control sobre el
                                        contenido de esos sitios o recursos y no aceptamos responsabilidad por ellos o por
                                        cualquier p??rdida o da??o que pueda surgir por su uso de ellos. Si decide acceder a
                                        cualquiera de los sitios web de terceros vinculados a Smirrow, lo hace bajo su
                                        propio riesgo y sujeto a los t??rminos y condiciones de uso de dichos sitios web.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_5" aria-expanded="false"
                                            aria-controls="collapse1_5">
                                            ??C??mo borro mi cuenta?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_5" class="collapse" aria-labelledby="heading1_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Si desea eliminar su cuenta de Smirrow, puede hacerlo en la opci??n
                                            ???Eliminar Cuenta??? de su cuenta de Smirrow.
                                            <br> Si es un usuario adquisidor o un usuario ofertante, la eliminaci??n de su
                                            cuenta se llevar?? a cabo dentro de un tiempo razonable despu??s de su solicitud.
                                            <br> S?? es ambos, usuario adquisidor y usuario ofertante, su cuenta se eliminar??
                                            en dos etapas (primero el usuario adquisidor y despu??s el de usuario ofertante).
                                            <br> Una vez que se haya eliminado su cuenta, no se le cobrar?? ning??n monto
                                            adicional ni tendr?? acceso a su cuenta anterior de Smirrow, y el registro se
                                            eliminar?? y no podr?? renovarse posteriormente.
                                            <br> Recibir?? una confirmaci??n por correo electr??nico despu??s de la eliminaci??n
                                            exitosa de su cuenta. Una vez que se haya eliminado su cuenta, podemos tratar su
                                            Contenido de la manera adecuada de acuerdo con nuestra pol??tica de seguridad,
                                            manejo y privacidad de datos personales (incluso elimin??ndola) y ya no tendr??
                                            derecho a acceder a su cuenta. No existe ninguna funci??n t??cnica en Smirrow para
                                            que pueda acceder a su cuenta despu??s de la cancelaci??n.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_6" aria-expanded="false"
                                            aria-controls="collapse1_6">
                                            ??Qui??n es responsable de cualquier p??rdida o da??o sufrido por usted?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_6" class="collapse" aria-labelledby="heading1_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> a. Si es un Usuario adquisidor: Si es un Usuario adquisidor, acepta que:
                                            <br> Nosotros y nuestras compa????as subsidiarias, empleados, propietarios,
                                            representantes y agentes no seremos responsables ante usted por ninguna p??rdida
                                            de ganancias, p??rdida de negocios o ingresos, interrupci??n de negocios, p??rdida
                                            de oportunidades comerciales o p??rdida de ahorros anticipados que usted sufra
                                            debido a o en relaci??n con su uso de Smirrow.
                                            <br> b. Si es un usuario ofertante: si es un usuario ofertante, acepta que:
                                            <br> Nosotros y nuestras empresas subsidiarias, empleados, propietarios,
                                            representantes y agentes quedamos excluidos (en la medida permitida por la ley)
                                            de todas las condiciones impl??citas, garant??as, representaciones u otros
                                            t??rminos que puedan aplicarse a Smirrow o cualquier contenido de este. Esto
                                            significa que, si los t??rminos y condiciones de uso no incluyen expresamente una
                                            promesa o compromiso por nuestra parte, entonces no estamos impl??citos por ley.
                                            <br> No somos responsables ante usted por ninguna p??rdida o da??o sufrido por
                                            usted que no sea un resultado previsible de nuestro incumplimiento de los
                                            t??rminos y condiciones de uso o de nuestra falta de cuidado y habilidad
                                            razonables. La p??rdida o da??o es previsible si es obvio que suceder?? o si, en el
                                            momento en que acept?? los t??rminos y condiciones de uso, tanto nosotros como
                                            usted sab??amos que podr??a suceder.
                                            <br> No somos responsables ante usted por ninguna p??rdida o da??o, ya sea por
                                            contrato, agravio (incluida la negligencia), incumplimiento de la obligaci??n
                                            legal o de otro modo, incluso si es previsible, que surja de o en conexi??n con:
                                            <br>
                                            <br> - Su incapacidad para utilizar Smirrow o cualquiera de sus servicios,
                                            funciones o programas.
                                            <br> - Su uso o dependencia de cualquier contenido (incluido el Contenido)
                                            almacenado en Smirrow.
                                            <br> - No somos responsables ante usted por, lucro cesante, p??rdida de ventas,
                                            negocios o ingresos, interrupci??n del negocio, p??rdida de ahorros anticipados,
                                            p??rdida de oportunidades comerciales, buena voluntad o reputaci??n, p??rdida de
                                            datos o informaci??n, incluido cualquier contenido, p??rdida o da??o indirecto o
                                            consecuente.
                                            <br> No somos responsables ante usted por ninguna p??rdida o da??o causado por un
                                            ataque distribuido de denegaci??n de servicio, virus, ransomware u otro material
                                            tecnol??gicamente da??ino que pueda infectar su equipo inform??tico, programas
                                            inform??ticos, datos u otro material patentado debido a su uso de Smirrow o
                                            cualquiera de sus servicios, funciones o programas, o debido a la descarga de
                                            cualquier material publicado en Smirrow, o en cualquier sitio web vinculado a
                                            Smirrow.
                                            <br> No somos responsables ante usted si su contenido se copia, distribuye,
                                            vuelve a publicar en otro lugar o si otro usuario o un tercero infringe sus
                                            derechos de autor.
                                            <br> No somos responsables ante usted por cualquier divulgaci??n de su identidad,
                                            o cualquier divulgaci??n o publicaci??n de su informaci??n personal por parte de
                                            otros usuarios o terceros sin su consentimiento (tambi??n conocido como
                                            "doxing").
                                            <br> No somos responsables ante usted por cualquier falla o demora por nuestra
                                            parte en el cumplimiento de cualquier parte de los t??rminos y condiciones de uso
                                            que surja de eventos fuera de nuestro control razonable. Si hay alguna falla o
                                            demora por nuestra parte en el cumplimiento de cualquier parte de los t??rminos y
                                            condiciones de uso que surja de un evento fuera de nuestro control razonable,
                                            nos comunicaremos con usted lo antes posible para informarle y tomaremos medidas
                                            para minimizar el efecto del retraso.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_7" aria-expanded="false"
                                            aria-controls="collapse1_7">
                                            Definici??n del servicio de Smirrow
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_7" class="collapse" aria-labelledby="heading1_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            El servicio de la plataforma digital consiste en la suministraci??n de un
                                            software gratuito para la creaci??n de perfiles prestadores de servicios que
                                            pueden ser adquiridos por usuarios que dispongan de un dispositivo electr??nico
                                            digital y una conexi??n segura a internet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_8" aria-expanded="false"
                                            aria-controls="collapse1_8">
                                            Condiciones generales sobre usuarios
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_8" class="collapse" aria-labelledby="heading1_8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Para publicar en la plataforma digital el usuario tiene que completar el
                                            perfil, el cual estar?? sujeto a verificaci??n y validaci??n por parte de Smirrow,
                                            una vez aceptado recibir?? un email por la activaci??n de la cuenta para empezar a
                                            usarla.

                                            <br> Una vez creado el perfil, el usuario podr?? administrar su cuenta desde su
                                            panel, si este pierde su acceso puede recuperarlo en la opci??n recuperar
                                            contrase??a.
                                            <br>
                                            <br> Smirrow, bajo la petici??n de modificaci??n, borrado u otras sobre un perfil,
                                            solo las aceptar?? cuando provengan del email de gesti??n de usuario propietario
                                            del perfil, nunca de otro.
                                            <br>
                                            <br> Un perfil permanecer?? publicado hasta que el usuario decida borrarlo, si el
                                            usuario no actualiza su perfil en dos (2) a??os, Smirrow se reserva el derecho a
                                            eliminarla.
                                            <br>
                                            <br> Smirrow se define como un portal digital que suministra un software para
                                            que los usuarios puedan ofertar servicios y adquirir servicios con unas bases
                                            aceptables de seguridad y garant??as. Smirrow se reserva el derecho de borrar
                                            cualquier perfil con datos err??neos.
                                            <br>
                                            <br> El usuario es responsable de todo lo que publica, de sus actos y de todo
                                            da??o que pudiera ocasionar. Smirrow pondr?? a disposici??n inmediata de la
                                            polic??a, juzgados o entidades gubernamentales y judiciales cualquier informaci??n
                                            que le sea requerida.
                                            <br>
                                            <br> Smirrow no es responsable de lo que pueda publicar un usuario, asimismo,
                                            Smirrow no es responsable de los contenidos que transmiten o alojan o a los que
                                            facilita el acceso, si no participa en su elaboraci??n o no tiene conocimiento de
                                            la ilegalidad de estos.
                                            <br>
                                            <br> Smirrow ser?? responsable si conoce la ilicitud de un contenido que publica
                                            un usuario y no act??a r??pidamente para retirarlo o imposibilitar el acceso al
                                            mismo, de modo que, si un usuario proporciona informaci??n y documenta la
                                            ilicitud de alg??n contenido, Smirrow habilitar?? cuantos medios inform??ticos
                                            tenga para que no se repita.
                                            <br>
                                            <br> En el supuesto de que Smirrow reciba denuncia por una supuesta infracci??n
                                            de copyright o tenga constancia a trav??s de denuncia de la publicaci??n de un
                                            tel??fono falso o no veraz en un usuario, Smirrow podr?? solicitar documentaci??n
                                            que pruebe dicha denuncia.
                                            <br>
                                            <br> El usuario se compromete a utilizar el portal, sus contenidos y servicios
                                            conforme con:
                                            <br>
                                            <br> - La Ley o cualesquiera otras normas del ordenamiento jur??dico aplicable.
                                            <br> - Los presentes t??rminos y condiciones de uso.
                                            <br> - Las Normas de Publicaci??n.
                                            <br> - Las buenas costumbres.
                                            <br> - El orden p??blico.
                                            <br> - La buena fe.
                                            <br>
                                            <br> El usuario deber?? crear su perfil en la categor??a adecuada y la localidad
                                            en la que se encuentre y comprometerse a:
                                            <br> No cometer a trav??s de la plataforma digital de Smirrow ning??n delito
                                            recogido en el c??digo penal o en cualquier otra normativa aplicable nacional. En
                                            concreto, y sin car??cter limitativo, sino ejemplificativo, queda estrictamente
                                            prohibido en la plataforma digital de Smirrow:
                                            <br>
                                            <br> - La trata de seres humanos.
                                            <br> - La esclavitud moderna.
                                            <br> - El tr??fico de ??rganos.
                                            <br> - El tr??fico de drogas.
                                            <br> - La comisi??n de delitos contra la libertad e indemnidad sexuales.
                                            <br> - No incitar a actuar de forma ilegal.
                                            <br> - No difundir difamaciones, calumnias, injurias y/o contenidos o propaganda
                                            de car??cter racista, xen??fobo, de apolog??a del terrorismo o que atenten contra
                                            los derechos humanos.
                                            <br> - No manifestar falsedades o inducir a error.
                                            <br> - No suplantar a otros usuarios utilizando sus claves de acceso a los
                                            distintos servicios y/o contenidos del Portal.
                                            <br> - No abusar del sistema de ???denunciar???.
                                            <br> - No difundir comunicaciones no solicitadas o autorizadas.
                                            <br> - No difundir mensajes que atenten contra la dignidad de terceros o que
                                            sean groseros o falten el respeto.
                                            <br> - No usar robots, spiders, ???scrapers??? o cualquier otro medio autom??tico
                                            para acceder al Portal para copiar, retirar, renovar o publicar contenido sin
                                            previo consentimiento escrito por Smirrow.
                                            <br> - No almacenar o en cualquier forma recabar informaci??n o datos personales
                                            de terceros sin su consentimiento, incluidas las direcciones de correo
                                            electr??nico.
                                            <br> - No esquivar, evitar o ???saltar??? las medidas utilizadas para impedir o
                                            restringir el acceso al Portal.
                                            <br> - Es necesario completar todos los campos obligatorios del perfil para
                                            activar una cuenta.
                                            <br> - Hay que respetar las categor??as y las secciones (demanda vs oferta).
                                            <br> - No est?? permitido crear un perfil id??ntico o similar a otro ya publicado.
                                            <br> - No est?? permitido utilizar correos ficticios para crear un perfil.
                                            <br> - No est?? permitido escribir informaci??n falsa en el perfil creado.
                                            <br> - No est?? permitido utilizar palabras clave (???Keyword Spamming???).
                                            <br> - No est?? permitido utilizar sistemas o herramientas para la publicaci??n o
                                            renovaci??n masiva y/o autom??tica, sin el previo consentimiento escrito por
                                            Smirrow.
                                            <br> - No est?? permitido copiar, procesar o distribuir el texto y/o las fotos o
                                            im??genes de terceros sin su previa autorizaci??n.
                                            <br> - No est?? permitido incluir el n??mero de tel??fono o el correo electr??nico
                                            fuera de los campos expl??citamente previstos para incluir est?? informaci??n en el
                                            perfil creado.
                                            <br>
                                            <br> Smirrow pondr?? en inmediato conocimiento de las autoridades competentes
                                            cualquier sospecha o indicio que tenga de la comisi??n de un delito a trav??s de
                                            la plataforma Smirrow, reserv??ndose el derecho a restringir total y
                                            permanentemente el acceso al mismo por parte de los presuntos implicados.
                                            <br>
                                            <br> La informaci??n proporcionada por el usuario deber?? en todo momento ser
                                            veraz, respondiendo el usuario por todas aquellas manifestaciones, datos,
                                            contenidos, informaciones y detalles que sean falsos, vagos o inexactos.
                                            <br>
                                            <br> En el caso de la comunicaci??n de datos de car??cter personal en el
                                            cumplimiento de los cuestionarios de alta como usuario y la publicaci??n de una
                                            oferta, esta informaci??n habr?? de ser cierta, exacta y coincidente.
                                            <br>
                                            <br> El usuario se compromete y se obliga a comunicar cualquier cambio o
                                            modificaci??n futura de sus datos de car??cter personal, adapt??ndolos, en
                                            consecuencia, a su situaci??n real.
                                            <br>
                                            <br> La inexactitud de la informaci??n exime a Smirrow de cualquier
                                            responsabilidad por la falta de informaci??n del usuario en relaci??n con las
                                            ofertas y los servicios, siempre que Smirrow, hubiese actuado con la debida
                                            diligencia en sus comunicaciones. En todo caso, el usuario ser?? el ??nico
                                            responsable de las manifestaciones falsas o inexactas que realice y de los
                                            perjuicios que cause a Smirrow, a otros usuarios o a terceros por la informaci??n
                                            que facilite.
                                            <br>
                                            <br> A los efectos del presente acuerdo de t??rminos y condiciones de uso, no se
                                            considerar?? falta de veracidad la utilizaci??n de apodos o pseud??nimos para
                                            identificar a los usuarios en el portal, siempre y cuando esto no suponga un
                                            obst??culo para conocer la identidad real de los mismos o llevar a cabo los
                                            cobros correspondientes a los servicios adquiridos por usuarios.
                                            <br>
                                            <br> a. General: Usted acepta que
                                            <br> - Si alg??n aspecto de su acuerdo con nosotros no se puede hacer cumplir, el
                                            resto permanecer?? en vigor.
                                            <br> - Si no hacemos cumplir alg??n aspecto de su acuerdo con nosotros, no ser??
                                            una renuncia.
                                            <br> - Nos reservamos todos los derechos que no se le otorguen expresamente.
                                            <br> - No se le otorgan licencias impl??citas u otros derechos en relaci??n con
                                            ninguna parte de Smirrow, salvo lo establecido expresamente en los t??rminos y
                                            condiciones de uso.
                                            <br> - Su acuerdo con nosotros no otorga derechos a terceros, excepto las
                                            exclusiones y limitaciones de responsabilidad en la secci??n titulada ??Qui??n es
                                            responsable de cualquier p??rdida o da??o sufrido por usted? puede ser ejecutado
                                            por nuestras empresas subsidiarias, empleados, propietarios, representantes y
                                            agentes.
                                            <br> - No puede transferir sus derechos u obligaciones en virtud de su acuerdo
                                            con nosotros sin nuestro consentimiento previo por escrito.
                                            <br> - Nuestros derechos y obligaciones en virtud de su acuerdo con nosotros
                                            pueden ser cedidos o transferidos por nosotros a otros. Por ejemplo, esto podr??a
                                            ocurrir si nuestra propiedad cambia (como en una fusi??n, adquisici??n o venta de
                                            activos) o por ley. Adem??s, podemos optar por delegar el cumplimiento de
                                            cualquiera de nuestras obligaciones en virtud de su acuerdo con nosotros a
                                            cualquier tercero, pero seguiremos siendo responsables ante usted por el
                                            cumplimiento de dichas obligaciones.
                                            <br> - Los t??rminos de servicio forman el acuerdo completo entre nosotros y
                                            usted con respecto a su acceso y uso de Smirrow, y reemplazan todos y cada uno
                                            de los acuerdos o acuerdos orales o escritos previos entre nosotros y usted.

                                        </p>





                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_9" aria-expanded="false"
                                            aria-controls="collapse1_9">
                                            Procedimiento en caso de realizaci??n de actividades de car??cter <br> indebido,
                                            de datos incorrectos o fraudulentos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_9" class="collapse" aria-labelledby="heading1_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> En el caso de que cualquier usuario o un tercero considere que existen
                                            hechos o circunstancias que revelen el car??cter indebido de cualquier contenido
                                            y/o de la realizaci??n de cualquier actividad en la plataforma digital y, en
                                            particular, la publicaci??n de im??genes incontenidas, violaci??n de derechos de
                                            propiedad intelectual, el incumplimiento de los deberes y obligaciones previstas
                                            en estos t??rminos y condiciones de uso o la vulneraci??n de cualesquiera otros
                                            derechos, deber?? enviar una notificaci??n a Smirrow al correo legal@smirrow.com
                                            en la que se contengan los siguientes extremos:
                                            <br>
                                            <br> - Datos personales del reclamante: nombre, direcci??n, n??mero de tel??fono y
                                            direcci??n de correo electr??nico.
                                            <br> - Especificaci??n de la supuesta actividad il??cita llevada a cabo en la
                                            plataforma web y, en particular, cuando se trate de una supuesta violaci??n de
                                            derechos, indicaci??n precisa y concreta de los contenidos protegidos, as?? como
                                            de su localizaci??n en el Sitio Web.
                                            <br> - Hechos o circunstancias que revelan el car??cter il??cito de dicha
                                            actividad.-
                                            <br> - En el supuesto de violaci??n de derechos, firma manuscrita o equivalente,
                                            con los datos personales del titular de los derechos supuestamente infringidos o
                                            de la persona autorizada para actuar en nombre y por cuenta de esta.
                                            <br> - Declaraci??n expresa, clara y bajo la responsabilidad del reclamante de
                                            que la informaci??n proporcionada en la notificaci??n es exacta y del car??cter
                                            indebido de la utilizaci??n de los contenidos o de la realizaci??n de las
                                            actividades descritas.
                                            <br>
                                            <br> Smirrow proceder?? de inmediato a adoptar las medidas para la subsanaci??n o
                                            la eliminaci??n, en su caso, de los citados contenidos.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_10">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_10" aria-expanded="false"
                                            aria-controls="collapse1_10">
                                            Propiedad intelectual e industrial
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_10" class="collapse" aria-labelledby="heading1_10"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Smirrow aloja contenidos tanto propios como contenidos creados por los
                                            usuarios. Smirrow no aceptan dar licencia, ni permiso sobre todos los contenidos
                                            creados por los usuarios o propios sujetos a derechos de propiedad intelectual o
                                            industrial, incluyendo, de modo enumerativo y no limitativo, c??digo fuente,
                                            textos, im??genes, logos, marcas y dise??os.

                                            <br> Salvo que fuera autorizado por Smirrow o a menos que ello resulte
                                            legalmente permitido, el usuario no podr?? copiar, modificar, distribuir, vender,
                                            alquilar o explotar de cualquier otra forma contenidos de Smirrow (excepci??n
                                            hecha del propio contenido del usuario). Asimismo, el usuario no puede llevar a
                                            cabo operaciones de desensamblaje o descompilaci??n, ingenier??a inversa o
                                            cualquier otra operaci??n destinada a obtener cualquier c??digo fuente contenido
                                            perteneciente a la plataforma digital Smirrow.
                                            <br>
                                            <br> Con la publicaci??n de un perfil, el usuario concede a Smirrow un derecho no
                                            exclusivo, mundial, perpetuo, irrevocable, gratuito, sublicenciable y cedible
                                            para la explotaci??n del perfil creado (incluyendo, sin limitaci??n, su
                                            reproducci??n, distribuci??n, comunicaci??n p??blica, transformaci??n y puesta a
                                            disposici??n del p??blico) de manera que Smirrow podr?? utilizarlo en todos los
                                            medios y modalidades de explotaci??n. Smirrow se reserva el derecho de retirar
                                            contenidos en caso de que vulneren la ley, estos t??rminos y condiciones de uso o
                                            los derechos de terceras personas.

                                            <br> Usted confirma que posee todos los derechos de propiedad intelectual
                                            (ejemplos de los cuales son derechos de autor y marcas comerciales) en su
                                            contenido o que ha obtenido todos los derechos necesarios sobre su contenido que
                                            se requieren para el uso y otorgar licencias con respecto a su contenido a
                                            nosotros.
                                            <br> Esto incluye cualquier derecho requerido y as?? no infringir las normas
                                            nacionales e internacionales y en cualquier territorio en el que Smirrow sea
                                            accesible y, en particular, en los de la Organizaci??n de Estados Americanos,
                                            Estados Unidos de Am??rica, el Reino Unido y la Uni??n Europea.

                                            <br> El permiso que usted nos otorga es perpetua, no exclusiva, mundial, libre
                                            de regal??as, sublicenciable, asignable y transferible por nosotros. Esto
                                            significa que el permiso continuar?? incluso despu??s de que finalice su acuerdo
                                            con nosotros y deje de usar Smirrow, que no tenemos que pagarle por el permiso y
                                            que podemos usar su contenido para realizar publicidad y marketing digital para
                                            Smirrow dentro y fuera de la plataforma Smirrow. Este permiso nos permitir??, por
                                            ejemplo, agregar pegatinas, texto y marcas de agua a su contenido, para poner su
                                            contenido a disposici??n de Smirrow, as?? como utilizar su contenido para otras
                                            operaciones normales de Smirrow. Nunca venderemos su contenido a otras
                                            plataformas, aunque podemos vender o transferir cualquier permiso que nos
                                            otorgue en los T??rminos y condiciones de uso en caso de una venta de nuestra
                                            empresa o sus activos a un tercero.
                                            <br> Si bien no somos propietarios de su contenido, usted nos otorga el derecho
                                            limitado de enviar notificaciones de infracci??n (incluidos los derechos de autor
                                            o marca registrada) en su nombre a cualquier sitio web o servicio de terceros
                                            que aloje o se ocupe de la infracci??n de copias de su contenido sin su permiso.
                                            Aunque no tenemos ninguna obligaci??n de hacerlo, en cualquier momento podemos
                                            enviar o retirar dicha notificaci??n a cualquier sitio web o servicio de terceros
                                            cuando lo consideremos apropiado. Sin embargo, no tenemos ni tenemos la
                                            obligaci??n de vigilar las infracciones de su contenido. Usted acepta que, si lo
                                            solicitamos, nos proporcionar?? todos los consentimientos y otra informaci??n que
                                            razonablemente necesitemos para enviar notificaciones de infracci??n en su
                                            nombre.
                                            <br> Consulte nuestras pol??ticas de quejas y reclamos para saber c??mo presentar
                                            una queja sobre la infracci??n de los derechos de propiedad intelectual.
                                            <br> Usted renuncia a cualquier derecho moral que pueda tener bajo cualquier ley
                                            aplicable para oponerse al tratamiento despectivo de cualquier contenido
                                            publicado por usted en Smirrow. Esta renuncia no afecta de ninguna manera su
                                            propiedad de los derechos de propiedad intelectual sobre su contenido o los
                                            derechos que tiene para evitar que su contenido sea copiado sin su permiso. La
                                            renuncia est?? destinada a permitirnos, al tratar con su contenido para agregar
                                            marcas de agua, pegatinas o texto a su contenido.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_11">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_11" aria-expanded="false"
                                            aria-controls="collapse1_11">
                                            Exclusi??n de garant??as y responsabilidad
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_11" class="collapse" aria-labelledby="heading1_11"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                        <h4>
                                            <br> a. Disponibilidad y Continuidad del Portal y los Servicios
                                            <br>
                                            <br> Smirrow no garantiza la disponibilidad, el acceso y/o la continuidad del
                                            funcionamiento de la plataforma digital y de sus servicios. Asimismo, Smirrow no
                                            ser?? responsable, con los l??mites establecidos por la Ley, de los da??os y
                                            perjuicios causados al usuario como consecuencia de la indisponibilidad, fallos
                                            de acceso y falta de continuidad de la plataforma digital y de sus servicios.
                                            <br>
                                            <br> b. Contenidos y Servicios de un perfil.
                                            <br>
                                            <br> Smirrow responder?? ??nica y exclusivamente de los servicios que preste por
                                            s?? mismo y de los contenidos directamente originados por Smirrow e identificados
                                            con su copyright. Dicha responsabilidad quedar?? excluida en los casos en que
                                            concurran causas de fuerza mayor o en los supuestos en que la configuraci??n de
                                            los equipos del Usuario no sea la adecuada para permitir el correcto uso de los
                                            servicios que brinda la plataforma digital de Smirrow.
                                            <br>
                                            <br> El Portal no se hace responsable de la posible aparici??n de portales
                                            digitales indexadas en buscadores ajenos al portal, una vez se hayan dado de
                                            baja de nuestras bases de datos.



                                            </p>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="heading1_12">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_12" aria-expanded="false"
                                            aria-controls="collapse1_12">
                                            Contenidos y Servicios de Terceros
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_12" class="collapse" aria-labelledby="heading1_12"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Smirrow no revisa o controla previamente, aprueba ni hace propios los
                                            contenidos, productos, servicios, opiniones, comunicaciones, datos, archivos y
                                            cualquier clase de informaci??n de terceros recogidos en Smirrow. Asimismo, no
                                            garantiza la licitud, fiabilidad, utilidad, veracidad, exactitud, exhaustividad
                                            y actualidad de los contenidos, informaciones y servicios de terceros en
                                            Smirrow. Tampoco garantiza de ninguna forma que los usuarios de la plataforma
                                            utilicen los contenidos y/o servicios de este conforme con la ley, las
                                            normativas aplicables, el orden p??blico ni los presentes t??rminos y condiciones
                                            de uso.
                                            <br>
                                            <br> Smirrow no controla con car??cter previo y no garantiza la ausencia de virus
                                            y otros elementos en los contenidos y servicios prestados por terceros a trav??s
                                            del Portal que puedan introducir alteraciones en los equipos de acceso,
                                            documentos o ficheros guardados en ellos.
                                            <br>
                                            <br> Smirrow no se responsabiliza de los contenidos volcados o los actos
                                            cometidos por otros usuarios. Tampoco se responsabiliza de cualquier da??o o
                                            perjuicio como consecuencia de la presencia de virus u otros elementos en los
                                            contenidos y servicios prestados por terceros. Asimismo, Smirrow no responder??
                                            de los da??os y perjuicios de cualquier naturaleza derivados del uso negligente o
                                            malintencionado de las cuentas de correo electr??nico utilizadas para crear un
                                            perfil o responder.
                                            <br>
                                            <br> En cualquier caso, Smirrow no ser?? responsable, ni indirectamente ni
                                            subsidiariamente, de la p??rdida econ??mica o reputaci??n, ni de ninguna clase de
                                            da??os especiales, indirectos o emergentes, resultantes de la utilizaci??n de la
                                            plataforma digital por parte del usuario.
                                            <br>
                                            <br> La exoneraci??n de responsabilidad se??alada en el p??rrafo anterior ser?? de
                                            aplicaci??n en el caso de que Smirrow no tenga conocimiento efectivo de que la
                                            actividad o la informaci??n almacenada es il??cita o de que lesiona bienes o
                                            derechos de un tercero susceptibles de indemnizaci??n, o si la tuviesen act??e con
                                            diligencia para retirar los datos y contenidos o hacer imposible el acceso a
                                            ellos.


                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="heading1_13">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_13" aria-expanded="false"
                                            aria-controls="collapse1_13">
                                            Servicios de pago y seguridad
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_13" class="collapse" aria-labelledby="heading1_13"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                           <br>-  Smirrow cuenta con plataformas de pagos legales autorizadas, no se aceptan pagos por fuera de las plataformas. Smirrow cobra una tasa del 11% de comisi??n por uso de la plataforma a las personas ofertantes. Por obligatoriedad de impuestos de ley seg??n el pa??s donde reside la ofertante, Smirrow debe descontar estos impuestos al valor que cobra la ofertante, como impuesto de retenci??n, IVA, cuota de servicios entre otros, seg??n la normatividad aplicable. Al usuario adquisidor Smirrow cobra una tasa del 11%, por el uso de la plataforma, igualmente seg??n la ley aplicable seg??n el pa??s donde se encuentra el usuario adquisidor se deber?? descontar los impuestos obligatorios. El usuario acepta que el valor de los impuestos seg??n la legislaci??n, pueden ser modificados en cada pa??s.
                                           <br>-  El porcentaje que cobra Smirrow es para mejorar la seguridad, cubrir costos operacionales para el desarrollo, cubrir almacenamiento del contenido y manutenci??n de la tecnolog??a necesaria para el buen funcionamiento de la plataforma digital.


                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading1_14">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_14" aria-expanded="false"
                                            aria-controls="collapse1_14">
                                            Pol??ticas de Fraude, devoluciones y cumplimiento
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_14" class="collapse" aria-labelledby="heading1_14"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Smirrow se toma muy en serio cualquier uso fraudulento con tarjetas de
                                            cr??dito u operaciones bancarias realizadas por nuestros usuarios. Por ello, los
                                            usuarios responsables de este tipo de acciones ser??n bloqueados permanentemente
                                            de nuestro sitio y sus datos podr??n ser comunicados a las autoridades
                                            pertinentes.
                                            <br> Recordamos que, seg??n nuestras condiciones de servicio, podemos limitar o
                                            poner fin a nuestro servicio, eliminar los contenidos alojados en ??l y adoptar
                                            medidas t??cnicas y legales para mantener a los usuarios alejados de Smirrow si
                                            creemos que est??n creando problemas o actuando de mala fe o en contra de
                                            nuestras pol??ticas, todo ello con independencia de cualquier pago realizado por
                                            el uso de Smirrow o servicios complementarios
                                            <br>
                                            <br> El usuario ofertante recibir?? el dinero solo cuando el usuario adquisidor
                                            haya recibido completamente el servicio solicitado y marca dentro la plataforma
                                            la calificaci??n del servicio sobre estrellas (para m??s informaci??n lea la
                                            preguntas frecuentes), as?? mismo el usuario adquisidor debe pagar la tarifa que
                                            encuentra dentro de la plataforma antes de que el servicio sea entregado, el
                                            dinero queda en la cuenta Wompi de Smirrow, ya sea para hacer reembolso al
                                            usuario adquisidor si no recibi?? el servicio o para depositarla al usuario
                                            ofertante despu??s de completar el servicio.
                                            <br>
                                            <br> Si se presenta un caso fortuito o fuerza mayor al usuario ofertante y no
                                            puede cumplir el servicio, se le reprogramar?? una nueva fecha al usuario
                                            adquisidor, que seleccione otro usuario ofertante similar para esa misma fecha,
                                            o fecha posterior, si no acepta la anterior opci??n, se le har?? la devoluci??n
                                            completa de su dinero. Si el usuario ofertante no presenta excusa legal, m??dica,
                                            una v??lida que sustente con veracidad su incumplimiento, al correo
                                            legal@smirrow.com, podr?? acarrear sanciones de suspensi??n de su cuenta hasta por
                                            un (1) mes o de forma definitiva si incumple m??s de tres (3) veces un servicio
                                            sin presentar excusa o prueba. El usuario ofertante tendr?? un t??rmino de ocho
                                            (8) para presentar pruebas, contados a partir del d??a siguiente de la fecha del
                                            servicio incumplido. La excusa o pruebas presentadas por parte del usuario
                                            ofertante se estudiar??n dentro de un t??rmino de ocho (8) a quince (15) d??as
                                            contados a partir del d??a de su radicaci??n.
                                            <br>
                                            <br> Si se le presenta un caso fortuito o de fuerza mayor al usuario adquisidor
                                            y no puede cumplir para recibir el servicio, este deber?? presentar excusa legal,
                                            m??dica o pruebas contundentes de su caso. El usuario adquisidor podr?? presentar
                                            excusa o pruebas al correo legal@smirrow.com dentro de un t??rmino de ocho (8)
                                            d??as calendario contados a partir del d??a siguiente de la fecha del servicio no
                                            recibido. La excusa o pruebas presentadas por parte del usuario adquisidor se
                                            estudiar??n dentro de un t??rmino de ocho (8) d??as a quince (15) d??as contados a
                                            partir del d??a de su radicaci??n. Si el usuario adquisidor no presenta excusa o
                                            pruebas no se le har?? reembolso de su dinero, si presenta excusas y pruebas que
                                            justifican su incumplimiento por no recibir el servicio solicitado, se le
                                            descontar?? en su reembolso un 30% por el servicio que, si cumpli?? el usuario
                                            ofertante y solo se le regresar?? un 70% del pago realizado, 10% que ser??n
                                            pagados al usuario adquisidor del servicio y el otro 20% que ser??n pagados a
                                            Smirrow por gastos de servicios jur??dicos y de investigaci??n causados y
                                            generados.

                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="heading1_15">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_15" aria-expanded="false"
                                            aria-controls="collapse1_15">
                                            Modificaciones de Smirrow y suspensi??n
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_15" class="collapse" aria-labelledby="heading1_15"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                            <br> Smirrow, se reserva el derecho para que en cualquier momento efectuar las
                                            modificaciones que estime conveniente en Smirrow, organizando, suprimiendo o
                                            a??adiendo contenidos, datos o servicios. Las citadas modificaciones se llevar??n
                                            a cabo de forma unilateral y sin previo aviso. En relaci??n con las condiciones
                                            generales y particulares, Smirrow se reserva el derecho de modificarlas,
                                            alterarlas y/o redactar nuevas cl??usulas en funci??n de las nuevas actividades o
                                            servicios a las que vaya ampliando o para adaptarse a nuevas normativas y
                                            legislaciones que vayan surgiendo. Dichas modificaciones, solo ser??n
                                            obligatorias a partir de su entrada en vigor y ser??n de aplicaci??n para el
                                            usuario en el mismo instante en que se acceda a la plataforma.
                                            <br>
                                            <br> a. Suspensi??n del servicio.
                                            <br>
                                            <br> Smirrow se reserva el derecho de suspender de forma unilateral y sin
                                            preaviso el servicio, o, denegar el acceso a la plataforma, de forma temporal o
                                            indefinida, a todo aquel usuario que incumpla los presentes t??rminos y
                                            condiciones de uso, o lleve a cabo actos ilegales, il??citos y contrarios a la
                                            ley, al orden p??blico y a las buenas costumbres.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading1_16">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_16" aria-expanded="false"
                                            aria-controls="collapse1_16">
                                            Duraci??n, terminaci??n y resoluci??n.
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_16" class="collapse" aria-labelledby="heading1_16"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> La prestaci??n de los servicios del portal y su funcionamiento tiene, en
                                            principio, un car??cter indefinido. No obstante, Smirrow podr?? suspender
                                            temporalmente el servicio o darlo por finalizado de forma definitiva, en
                                            cualquier momento o instante, mediando causa justificada. En estos casos,
                                            Smirrow se compromete mediante avisos a informar a los usuarios de la suspensi??n
                                            o interrupci??n temporal o definitiva.
                                            <br>
                                            <br> En el caso de resoluci??n unilateral del servicio o de la baja forzada del
                                            portal, Smirrow le informar?? previamente de las causas de su resoluci??n. En
                                            estos casos, Smirrow se compromete a guardar la informaci??n almacenada en su
                                            servidor durante el periodo de diez d??as naturales, transcurrido los cuales,
                                            proceder?? al bloqueo de los mismos en la forma prevista en la normativa vigente
                                            en materia de protecci??n de datos de car??cter personal, sin que por este hecho
                                            pueda exigirle responsabilidad alguna.


                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="heading1_17">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_17" aria-expanded="false"
                                            aria-controls="collapse1_17">
                                            Ley de protecci??n de datos colombiana.
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_17" class="collapse" aria-labelledby="heading1_17"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Asimismo, para acceder a algunos de los servicios que la plataforma digital
                                            ofrece a trav??s de la web site deber?? proporcionar algunos datos de car??cter
                                            personal. En cumplimiento de lo establecido a la Ley, relativo a la protecci??n
                                            de las personas f??sicas en lo que respecta al tratamiento de datos personales y
                                            a la libre circulaci??n de estos datos le informamos que, mediante la
                                            cumplimentaci??n de la informaci??n de los perfiles creados, sus datos personales
                                            quedar??n incorporados y ser??n tratados en los ficheros de Smirrow. Con el fin de
                                            poderle prestar y ofrecer nuestros servicios, as?? como para informarle de las
                                            mejoras de la plataforma digital. Asimismo, le informamos de la posibilidad de
                                            que ejerza los derechos de acceso, rectificaci??n, cancelaci??n y oposici??n de sus
                                            datos de car??cter personal, manera gratuita mediante email a o correo postal, en
                                            los datos del punto expuestos.
                                            <br> Ingrese a la opci??n pol??tica de seguridad, manejo y prevenci??n del uso de
                                            datos personales.


                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="heading1_18">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_18" aria-expanded="false"
                                            aria-controls="collapse1_18">
                                            T??rminos relacionados con disputas
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_18" class="collapse" aria-labelledby="heading1_18"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> D??nde deben presentarse reclamaciones:
                                            <br>
                                            <br> a. Para usuarios adquisidores:
                                            <br>
                                            <br> Si usted es un usuario adquisidor de servicios residente en Colombia,
                                            cualquier reclamo que surja de o en conexi??n con su acuerdo con nosotros (ya sea
                                            por usted contra nosotros o nosotros contra usted, incluyendo disputas o
                                            reclamos no contractuales) puede ser llevado a los juzgados, tribunales o Cortes
                                            de Colombia o los tribunales del pa??s donde vive, solo si es un caso
                                            excepcional.
                                            <br> Si usted es un usuario adquisidor de servicios que reside fuera de
                                            Colombia, cualquier reclamo que surja de o en conexi??n con su acuerdo con
                                            nosotros (ya sea por usted contra nosotros o nosotros contra usted, e incluyendo
                                            disputas o reclamos no contractuales) debe ser llevado a los juzgados,
                                            tribunales o Cortes de Colombia, solo en caso excepcional que la ley avala,
                                            podr?? hacerlo en el pa??s donde reside.
                                            <br>
                                            <br> b. Usuarios ofertantes - Derecho:
                                            <br>
                                            <br> Si usted es un usuario ofertante, su acuerdo con nosotros y cualquier
                                            disputa o reclamaci??n (incluidas disputas o reclamaciones no contractuales) que
                                            surjan de o en conexi??n con ??l o su objeto o formaci??n se regir??n por la ley
                                            colombiana, sin tener en cuenta disposiciones sobre conflicto de leyes.
                                            <br>
                                            <br> c. Usuarios ofertantes: ??d??nde deben presentarse reclamaciones?:
                                            <br>
                                            <br> Si es un usuario ofertante, usted y nosotros acordamos que los juzgados,
                                            tribunales y Cortes de Colombia tendr??n jurisdicci??n exclusiva para resolver
                                            cualquier disputa o reclamaci??n (incluidas disputas o reclamaciones no
                                            contractuales) que tenga contra nosotros o que tengamos contra usted que surja
                                            de o en relaci??n con su acuerdo con nosotros o su objeto o formaci??n.
                                            <br> Per??odo de limitaci??n para presentar reclamos: Excepto donde lo proh??ba la
                                            ley aplicable, cualquier reclamo o causa de acci??n que tenga con respecto a
                                            Smirrow (incluidos los que surjan de o est??n relacionados con su acuerdo con
                                            nosotros) debe presentarse dentro de seis (6) meses despu??s de la fecha en que
                                            tal surgi?? el reclamo o la causa de la acci??n o la fecha en la que se enter?? de
                                            los hechos que dieron lugar a la causa de la acci??n (lo que ocurra primero), o
                                            ser?? excluido para siempre.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_19">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse1_19" aria-expanded="false"
                                            aria-controls="collapse1_19">
                                            Otros t??rminos que forman parte de su acuerdo con nosotros
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_19" class="collapse" aria-labelledby="heading1_19"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Estos t??rminos de uso para todos los usuarios rigen su acuerdo con
                                            nosotros.

                                            <br> Otros t??rminos o pol??ticas que forman parte de los t??rminos y condiciones
                                            de uso de servicio tambi??n se aplicar??n a usted y forman parte de su acuerdo con
                                            nosotros, de la siguiente manera:

                                            <br> - T??rminos de uso para usuarios adquisidores, que contienen t??rminos
                                            adicionales que se aplican si usa Smirrow como usuario adquisidor.
                                            <br> - T??rminos de uso para usuarios ofertantes, que contienen t??rminos
                                            adicionales que se aplican si utiliza Smirrow como usuario ofertante.
                                            <br> - Pol??ticas de manejo, seguridad y privacidad de datos personales, que se
                                            aplica a todos los usuarios y le informa c??mo usamos sus datos personales y otra
                                            informaci??n que recopilamos sobre usted.
                                            <br> - Pol??ticas de buena fe que se aplican a todos los usuarios y le indica lo
                                            que puede y no puede hacer en Smirrow.
                                            <br> - Pol??ticas de quejas y reclamos: establece el procedimiento para presentar
                                            una queja sobre cualquier aspecto de Smirrow y c??mo trataremos esa queja y
                                            reclamo.

                                            <br> Si existe alg??n conflicto entre estos t??rminos y condiciones de uso para
                                            todos los usuarios y cualquiera de los t??rminos o pol??ticas nombrados
                                            anteriormente, los t??rminos y condiciones de uso prevalecer??n para todos los
                                            usuarios y se aplicar??n en la medida del conflicto.

                                            <br> Todos los usuarios sin excepci??n alguna al aceptar los presentes t??rminos y
                                            condiciones de uso, quedan sujetos a ellos.



                                        </p>
                                    </div>
                                </div>
                            </div>
                                <div class="card">
                                    <div class="card-header" id="heading1_20">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed text-left" type="button"
                                                data-toggle="collapse" data-target="#collapse1_20" aria-expanded="false"
                                                aria-controls="collapse1_20">
                                                Legislaci??n y fuero:
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse1_20" class="collapse" aria-labelledby="heading1_20"
                                        data-parent="#accordion_general">
                                        <div class="card-body pl-4">
                                            <p>
                                              <br>  Todas las cuestiones relativas a Smirrow se rigen en todos y cada uno de sus extremos por las Leyes colombianas y se someten a la jurisdicci??n de los Juzgados y Tribunales competentes del territorio colombiano.
 
                                              <br>  Las partes, con expresa renuncia a su propio fuero, aceptan como legislaci??n rectora de los presentes t??rminos y condiciones de uso en caso de controversia acerca de la interpretaci??n o ejecuci??n de las presentes cl??usulas, la legislaci??n colombiana, y se someten para la resoluci??n de cuantos litigios pudieran derivarse del mismo a los Juzgados y Tribunales de Colombia. 
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="acordion_two d-none">


                            <h3>T??rminos y condiciones de uso para adquisidores</h3>
                            <h5>Al utilizar nuestra plataforma usted acepta estos t??rminos y condiciones de uso para
                                adquisidores</h5>
                            <div class="card ">
                                <div class="card-header" id="heading2_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_2" aria-expanded="false"
                                            aria-controls="collapse2_2">
                                            Introducci??n
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_2" class="collapse" aria-labelledby="heading2_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        <p>
                                            Estos T??rminos y condiciones de uso para adquisidores son t??rminos adicionales que se aplican si utiliza Smirrow como adquisidor (tambi??n denominados "usted" y "su" en estos T??rminos de uso para adquisidores). Estos t??rminos y condiciones de uso para adquisidores forman parte de su acuerdo con nosotros.
                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading2_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_3" aria-expanded="false"
                                            aria-controls="collapse2_3">
                                            Interpretaci??n
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_3" class="collapse" aria-labelledby="heading2_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        <p>
                                        <br>   En estos t??rminos y condiciones de uso para adquisidores, los t??rminos definidos tienen el mismo significado que se les da en los t??rminos y condiciones de uso para todos los usuarios. Adem??s:

                                        <br>   -	"Registrarse" significa registrarse en la plataforma en este caso en la opci??n de busco acompa??ante, lo que lo convierte en un usuario adquisidor dentro la plataforma de Smirrow.
                                        <br>   -	"IVA" hace referencia al impuesto sobre el valor a??adido de Colombia y cualquier otro impuesto que se le agregue o lo sustituya a la tasa que se imponga peri??dicamente y cualquier impuesto, cargo o impuesto indirecto gubernamental, estatal, federal, provincial o municipal equivalente o similar, deber, imposici??n o gravamen en cualquier otra jurisdicci??n.
                                        <br>   -	"Impuesto" incluir?? todas las formas de impuestos y cargos, aranceles, contribuciones, grav??menes, retenciones o pasivos estatutarios, gubernamentales, estatales, provinciales, locales o municipales, dondequiera que sean imputables y ya sea de Colombia o de cualquier otra jurisdicci??n.


                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading2_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_4" aria-expanded="false"
                                            aria-controls="collapse2_4">
                                            Otros t??rminos que se aplicar??n al uso de Smirrow:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_4" class="collapse" aria-labelledby="heading2_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <h4>Los siguientes t??rminos tambi??n se aplicar??n a su uso de Smirrow y usted los
                                            acepta:</h4>
                                        <p>
                                       <br>    Los siguientes t??rminos tambi??n se aplicar??n a su uso de Smirrow y usted los acepta:

                                       <br>    -	Nuestros t??rminos y condiciones de uso para todos los usuarios.
                                       <br>    -	Nuestras pol??ticas de seguridad, manejo y privacidad de datos personales. 
                                       <br>    -	Nuestras pol??ticas de uso aceptable, que le indica lo que puede y no puede hacer en Smirrow.
                                       <br>    -	Nuestras pol??ticas de quejas y reclamos, que establece el procedimiento para presentar una queja y reclamo sobre cualquier aspecto de Smirrow y c??mo trataremos esa queja.
                                       <br>    -	Gu??a de preguntas frecuentes.



                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading2_9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_9" aria-expanded="false"
                                            aria-controls="collapse2_9">
                                            Otros t??rminos que pueden aplicarse a su uso de Smirrow:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_9" class="collapse" aria-labelledby="heading2_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        Los siguientes t??rminos adicionales pueden aplicarse a su uso de Smirrow: <br>
 <br>
-	Si tambi??n es un usuario ofertante, los t??rminos de uso para ofertantes se aplicar??n a su uso de Smirrow como usuario ofertante. <br>

                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading2_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_5" aria-expanded="false"
                                            aria-controls="collapse2_5">
                                            Sus compromisos con nosotros:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_5" class="collapse" aria-labelledby="heading2_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                      <br>  Usted garantiza (lo que significa que hace una promesa legalmente exigible) que:
<br>
                                      <br>  -	Tienes al menos 18 a??os.
                                      <br>  -	Si las leyes del pa??s o estado / provincia donde vive estipulan que solo puede estar legalmente registrado a una plataforma como Smirrow a una edad que sea superior a 18 a??os, entonces tiene la edad suficiente para estar legalmente registrado por bajo las leyes del pa??s o estado / provincia donde vive.
                                      <br>  -	No se le proh??be el acceso a Smirrow seg??n las leyes que se apliquen a usted.
                                        
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading2_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_6" aria-expanded="false"
                                            aria-controls="collapse2_6">
                                            Contenido, t??rminos generales:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_6" class="collapse" aria-labelledby="heading2_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                      <p>
                                     <br>  Adem??s de los t??rminos establecidos en otras partes de los t??rminos y condiciones de uso (en particular en nuestra pol??tica de uso aceptable), los siguientes t??rminos se aplican al contenido publicado, mostrado, cargado o publicado por usted como usuario adquisidor en Smirrow:

                                     <br>  a.	Usted garantiza (lo que significa que nos hace una promesa legalmente exigible) que por cada elemento de contenido que publique, muestre, cargue o publique en Smirrow:
                                     <br>  
                                     <br>  -	El Contenido cumple en su totalidad con los t??rminos y condiciones de uso (y en particular nuestra pol??tica de uso aceptable).
                                     <br>  -	Usted es propietario de su contenido (y de todos los derechos de propiedad intelectual) o tiene una licencia v??lida para su contenido.
                                     <br>  -	Si su contenido incluye o utiliza cualquier material de terceros, ha obtenido todos los derechos, licencias, consentimientos por escrito y liberaciones que son necesarios para el uso de dicha propiedad de terceros en su contenido y para el uso y explotaci??n posteriores de ese contenido en Smirrow.
                                     <br>  
                                     <br>  b.	Usted acepta que ser?? responsable ante nosotros y nos indemnizar?? si falta a algunos de los puntos establecidos en estos t??rminos y condiciones de uso para adquisidores. Esto significa que usted ser?? responsable de cualquier p??rdida o da??o que suframos como resultado de que incumpla estos t??rminos y condiciones de uso para adquisidores.
                                     <br>  
                                     <br>  c.	No somos responsables, ni respaldamos ning??n aspecto de ning??n contenido y datos publicados por usted o cualquier otro usuario de Smirrow. No tenemos ninguna obligaci??n de monitorear ning??n contenido y no tenemos control directo sobre lo que puede comprender su contenido y sus datos personales.
                                        
                                      </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading2_7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_7" aria-expanded="false"
                                            aria-controls="collapse2_7">
                                            Material para adultos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_7" class="collapse" aria-labelledby="heading2_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        <p>
                                            Usted reconoce que sabe que parte del contenido de Smirrow contiene material para adultos y acepta tener esto en cuenta al decidir d??nde acceder y ver el contenido. No seremos responsables ante usted si sufre alguna p??rdida o da??o como resultado de su acceso o visualizaci??n de contenido que contenga material para adultos de una manera que lo coloque en incumplimiento de cualquier contrato que tenga con un tercero (por ejemplo, su contrato de trabajo) o en contravenci??n de cualquier ley aplicable.
                                        </p>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading2_8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_8" aria-expanded="false"
                                            aria-controls="collapse2_8">
                                            Transacciones e interacciones entre usuarios:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_8" class="collapse" aria-labelledby="heading2_8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
<br>                                         Esta secci??n describe los t??rminos que se aplican a las transacciones e interacciones entre adquisidor y ofertante:<br> 

<br> a.	Todas las transacciones e interacciones facilitadas por Smirrow son convenciones entre adquisidores y ofertantes. Aunque facilitamos transacciones e interacciones entre adquisidores y ofertantes proporcionando la plataforma Smirrow, almacenando datos, contenido y actuando como intermediario de pago, no somos parte de la convenci??n entre el adquisidor y el ofertante o cualquier otro convenio que pueda existir entre un adquisidor y ofertante, y no somos responsables de ninguna transacci??n o interacci??n personal entre adquisidores y ofertantes.<br> 

<br> b.	Los ofertantes son los ??nicos responsables de determinar (dentro de los par??metros de precios de Smirrow) los precios aplicables a las transacciones e interacciones y el contenido al que se le puede dar acceso al adquisidor. Todos los precios aparecen en pesos colombianos ??nicamente, por ahora. <br> 

<br> c.	Los pagos de los adquisidores no incluir??n el IVA, que se agregar?? a la tasa actual seg??n corresponda a los pagos del adquisidor y seg??n el pa??s donde reside.<br> 

<br> d.	Para ver el contenido de un ofertante puede ingresar a sus ??lbumes y perfil estando registrado como adquisidor y para utilizar la funci??n de interacci??n con los ofertantes en Smirrow, primero debe solicitar un servicio, realizar el pago a trav??s de Wompi, posterior a esto se activara el chat y mensajer??a dentro de la plataforma para que haya interactividad entre el adquisidor y la ofertante. <br> 

<br> e.	Usted nos autoriza a proporcionar los detalles de su tarjeta de pago a un proveedor de pago externo con el fin de procesar su pago de adquisidor. Todos los pagos de adquisidores se cobrar??n en pesos colombianos y d??lares. El proveedor de su tarjeta de pago puede cobrarle tarifas de conversi??n de moneda. No tenemos control sobre los tipos de cambio de divisas o los cargos impuestos por el proveedor de su tarjeta de pago o el banco y no somos responsables de pagar los cargos o tarifas impuestos por el proveedor de su tarjeta de pago o el banco.<br> 

<br> f.	Si elige proporcionar detalles de dos o m??s tarjetas de pago, si intenta realizar un pago de adquisidor desde la primera tarjeta y la tarjeta es rechazada por cualquier motivo, la otra tarjeta de pago se utilizar?? para cobrar el pago de adquisidor completo.<br> 

<br> g.	El proveedor de pagos no tomar?? pagos mensuales de su tarjeta de pago para los pagos de adquisiciones de servicios, cada vez que adquiera un servicio, deber?? realizar el pago nuevamente. <br> 

<br> h.	Smirrow solo autoriza pagos por medio de su proveedor Wompi, cualquier transacci??n que haga por fuera es solamente responsabilidad del adquisidor. <br> 

<br> i.	Usted acepta que no realizar?? solicitudes injustificadas de reembolso de ning??n tipo a una ofertante, ni solicitudes de devoluci??n de cargo injustificadas de su proveedor de tarjeta de pago en relaci??n con cualquier transacci??n entre usted y un ofertante. Si consideramos que usted realiz?? una solicitud de reembolso o devoluci??n de cargo de mala fe, tenemos derecho a suspender o eliminar su cuenta de adquisidor.<br> 

<br> j.	Usted acepta realizar razonablemente las solicitudes de reembolso de buena fe, de lo contrario tenemos derecho a suspender o eliminar su cuenta de adquisidor.

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



                        </div>
                        <div class="acordion_three d-none">

                            <h3>T??rminos y condiciones de uso para ofertantes</h3>

                            <h5>
                                Al utilizar nuestra plataforma como ofertante, usted acepta estos t??rminos y condiciones de
                                uso.
                            </h5>

                            <div class="card ">
                                <div class="card-header" id="heading3_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_1" aria-expanded="false"
                                            aria-controls="collapse3_1">
                                            Introducci??n
                                    </h2>
                                </div>
                                <div id="collapse3_1" class="collapse" aria-labelledby="heading3_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Estos t??rminos y condiciones de uso para ofertantes son t??rminos adicionales que se aplican si utiliza Smirrow como ofertante (tambi??n denominado "usted" y "su" en estos t??rminos de uso para ofertantes). Estos t??rminos y condiciones de uso para ofertantes forman parte de su acuerdo con nosotros

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_2" aria-expanded="false"
                                            aria-controls="collapse3_2">
                                            Interpretaci??n
                                    </h2>
                                </div>
                                <div id="collapse3_2" class="collapse" aria-labelledby="heading3_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                          <br> En estos t??rminos y condiciones de uso para ofertantes, los t??rminos definidos tienen el mismo significado que se les da en los t??rminos y condiciones de uso para todos los usuarios. Adem??s:

                                          <br> -	"IVA" hace referencia al impuesto sobre el valor a??adido de Colombia y cualquier otro impuesto que se le agregue o lo sustituya a la tasa que se imponga peri??dicamente y cualquier impuesto, cargo o impuesto indirecto gubernamental, estatal, federales, provincial o municipal equivalente o similar, deber, imposici??n o gravamen en cualquier otra jurisdicci??n.
                                          <br> -	"Impuesto" incluir?? todas las formas de impuestos y cargos, aranceles, impuestos, contribuciones, grav??menes, retenciones o pasivos estatutarios, gubernamentales, estatales, federales, provinciales, locales o municipales, dondequiera que sean imputables y ya sea de Colombia o de cualquier otra jurisdicci??n.
                                            

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_3" aria-expanded="false"
                                            aria-controls="collapse3_3">
                                            Otros t??rminos que se aplicar??n a su uso de Smirrow:
                                    </h2>
                                </div>
                                <div id="collapse3_3" class="collapse" aria-labelledby="heading3_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                        <br>    Los siguientes t??rminos tambi??n se aplicar??n a su uso de Smirrow y usted los acepta:
<br>
                                        <br>    -	Nuestras condiciones de uso para todos los usuarios.
                                        <br>    -	Nuestras pol??ticas de seguridad, manejo y privacidad de datos personales, que le indica c??mo usamos sus datos personales y otra informaci??n que recopilamos sobre usted.
                                        <br>    -	Nuestras pol??ticas de uso aceptable, que le indica lo que puede y no puede hacer en Smirrow.
                                        <br>    -	Nuestras pol??ticas de quejas y reclamos, que establece el procedimiento para presentar una queja sobre cualquier aspecto de Smirrow y c??mo trataremos esa queja y reclamo.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_4" aria-expanded="false"
                                            aria-controls="collapse3_4">
                                            Otros t??rminos que pueden aplicarse a su uso de Smirrow
                                    </h2>
                                </div>
                                <div id="collapse3_4" class="collapse" aria-labelledby="heading3_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                          <br>  Los siguientes t??rminos adicionales pueden aplicarse a su uso de Smirrow:
<br>
                                          <br>  Si tambi??n es un adquisidor, los t??rminos y condiciones de uso para adquisidores tambi??n se aplicar??n a su uso de Smirrow como adquisidor.
                                            
                                            



                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_5" aria-expanded="false"
                                            aria-controls="collapse3_5">
                                            ??Cu??les son las tarifas que cobramos a las ofertantes por el uso de Smirrow?
                                    </h2>
                                </div>
                                <div id="collapse3_5" class="collapse" aria-labelledby="heading3_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                         <br>  Smirrow cuenta con plataformas de pagos legales autorizadas, no se aceptan pagos por fuera de las plataformas. Smirrow cobra una tasa del 11% de comisi??n por uso de la plataforma a las personas ofertantes. Por obligatoriedad de impuestos de ley seg??n el pa??s donde reside la ofertante, Smirrow debe descontar estos impuestos al valor que cobra la ofertante, como impuesto de retenci??n, IVA, cuota de servicios entre otros, seg??n la normatividad aplicable. Al usuario adquisidor Smirrow cobra una tasa del 11%, por el uso de la plataforma, igualmente seg??n la ley aplicable seg??n el pa??s donde se encuentra el usuario adquisidor se deber?? descontar los impuestos obligatorios. El usuario acepta que el valor de los impuestos seg??n la legislaci??n, pueden ser modificados en cada pa??s.
                                         <br>  El porcentaje que cobra Smirrow es para mejorar la seguridad, cubrir costos operacionales para el desarrollo, cubrir almacenamiento del contenido y manutenci??n de la tecnolog??a necesaria para el buen funcionamiento de la plataforma digital.

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_6" aria-expanded="false"
                                            aria-controls="collapse3_6">
                                            C??mo configurar su cuenta como una cuenta de ofertante
                                    </h2>
                                </div>
                                <div id="collapse3_6" class="collapse" aria-labelledby="heading3_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                        <br>    Para configurar su cuenta como una cuenta de ofertante:
<br>
                                        <br>    -	Necesitar?? para que su cuenta de ofertante quede verificada deber?? subir una foto selfie actualizada en la opci??n ???verificaci??n??? de acuerdo con los requisitos establecidos en la plataforma.
                                        <br>    -	Necesitar?? en su cuenta de adquisidor, en la opci??n ???Cuentas Bancarias???, agregar los datos de su propia cuenta bancaria, como nombre del titular de la cuenta bancaria, n??mero de la cuenta bancar??a, nombre del banco o entidad corporativa a donde pertenece el n??mero de cuenta, identificaci??n del titular de la cuenta bancaria. 
                                        <br>    -	Smirrow no es responsable del registro de cuentas bancarias de terceros.
                                        <br>    -	Solo puede solicitar dos (2) transacciones por mes, si solicita una tercera transacci??n dentro del mismo mes, se le realizar??n descuentos y deducciones por manejo de su cuenta. 
                                        <br>    -	Tambi??n es posible que deba enviar informaci??n adicional seg??n el pa??s en el que viva.
                                        <br>    -	Es posible que le pidamos informaci??n adicional de verificaci??n de edad o identidad en cualquier momento. 
                                        <br>    -	Podemos rechazar su solicitud para configurar una cuenta de ofertante por cualquier motivo, incluidos los motivos indicados aqu??.
                                        <br>    -	Usted puede agregar todos los servicios y servicios especiales que quiera y agregar el valor que crea conveniente, si no sabe cu??nto cobrar, dir??jase a ???preguntas frecuentes???, al subt??tulo ???ganancias y pagos???, a la opci??n ??Cu??nto puedo cobrar por los servicios y servicios especiales?, ah?? tendr?? un ejemplo del promedio que puede cobrar. 
                                        <br>    -	Smirrow no tendr?? responsabilidad alguna por los acuerdos y pagos por fuera de la plataforma. 
                                        <br>    -	Puede agregar todo el contenido que desee, crear todos los ??lbumes y videos que desee crear.
                                        <br>    -	Smirrow siendo un sitio exclusivo, elegante, categ??rico y de clase, no acepta contenido con desnudos expl??citos dentro de la plataforma, por lo anterior, Smirrow espera la mejor versi??n de su contenido con sensualidad, erotismo, lujurioso y nada vulgar.  
                                        <br>    -	Si pierde el acceso a su cuenta, puede restablecer su contrase??a, pero necesitar?? saber la direcci??n de correo electr??nico con el que creo la cuenta. 
                                        <br>    -	Si no recuerda la direcci??n de correo electr??nico utilizada para configurar la cuenta, es posible que le solicitemos que proporcione documentos de identificaci??n y fotos, y cualquier prueba adicional que podamos requerir razonablemente para probar su identidad.
                                            


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_7">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_7" aria-expanded="false"
                                            aria-controls="collapse3_7">
                                            Las agencias de ofertantes:
                                    </h2>
                                </div>
                                <div id="collapse3_7" class="collapse" aria-labelledby="heading3_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                            Smirrow no acepta agencias en donde las ofertantes est??n usando la plataforma de Smirrow en contra de su voluntad, por lo anterior puede dirigirse a ???Declaraci??n??? sobre esclavitud moderna y trata de personas. Si usted es un ofertante y no es propietario de su propia cuenta y debe tener acceso a su cuenta en todo momento, si tiene un agente o agencia que lo asiste con el funcionamiento de su cuenta de ofertante (o la ??pera en su nombre), esto no afecta su responsabilidad legal personal. Nuestra relaci??n es con usted, y no con su agente o agencia, y usted ser?? legalmente responsable de garantizar que todo el contenido publicado y todo el uso de su cuenta cumpla con los t??rminos y condiciones de uso.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_8">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_8" aria-expanded="false"
                                            aria-controls="collapse3_8">
                                            Pagos a los ofertantes:
                                    </h2>
                                </div>
                                <div id="collapse3_8" class="collapse" aria-labelledby="heading3_8"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                       <p>
                                     <br>  -	Por lo general, los fondos tardan entre 3 d??as y 5 d??as h??biles en aparecer en su cuenta bancaria, en casos excepcionales tardar hasta 10 d??as h??biles. 

                                     <br>  -	Si ha pasado m??s de 10 d??as desde que su pago se registr?? como procesado, env??enos un correo electr??nico a pagos@smirrow.com ??? incluya una captura de pantalla de la opci??n de solicitud de pago, su n??mero ID, y los datos del titular de la cuenta bancaria, n??mero de cuenta y banco. 
                                     <br>  
                                     <br>  -	Tambi??n debe anexar certificaci??n bancaria donde demuestre que no ha recibido su pago. 
                                     <br>  
                                     <br>  -	Todos los pagos de adquisidores ser??n recibidos por un proveedor de pagos externo aprobado por nosotros.
                                     <br>  
                                     <br>  -	Actualmente tenemos un proveedor de plataforma de pago que es Wompi.
                                     <br>  
                                     <br>  -	Smirrow realizar?? los pagos exclusivamente a su cuenta bancaria registrada dentro de la plataforma, Smirrow no har?? pagos a cuentas bancarias que no se encuentren registradas dentro la plataforma.
                                     <br>  
                                     <br>  -	Smirrow no realiza pagos en efectivo a ofertantes, ni acepta pagos en efectivo de adquisidores a ofertantes, cualquier pago en efectivo realizado por fuera de los proveedores de pagos autorizados por Smirrow, por lo anterior Smirrow no es responsable de los pagos en que se realicen por fuera de las plataformas de proveedores autorizados. 
                                     <br>  
                                     <br>  -	Como ofertante usted tendr?? un casillero virtual en donde se reflejar?? sus ganancias y dinero acumulado.
                                     <br>  
                                     <br>  -	Deduciremos nuestras tarifas, tasas e impuestos del pago realizado del adquisidor y la ofertante.
                                     <br>  
                                     <br>  -	Su cuenta de Smirrow se actualizar?? constantemente dentro de un tiempo razonable con sus ganancias de ofertante. Sus ganancias de ofertante estar??n disponibles para que las retire de su cuenta y casillero virtual de Smirrow una vez que dichas ganancias de ofertante aparezcan en su cuenta y casillero de Smirrow.
                                     <br>  
                                     <br>  -	Para realizar un retiro de las ganancias del creador de su cuenta Smirrow, debes tener al menos el monto m??nimo de pago en su cuenta Smirrow que es un valor de "treinta mil pesos colombianos" ($30.000) o Diez d??lares norte americanos (US 10). 
                                     <br>  
                                     <br>  -	Haga clic en la p??gina ???Mi Dinero??? de su cuenta en Smirrow para ver cu??l es el monto que tiene guardado o acumulado en su casillero virtual y la opci??n de pago. 
                                     <br>  
                                     <br>  -	La cantidad que ves en tu "saldo actual" en tu cuenta de Smirrow son tus ganancias de ofertante en el momento relevante. 
                                     <br>  
                                     <br>  -	Todos los pagos de los adquisidores se realizan $ pesos colombianos y USD y las ganancias de las ofertantes se realizan ??nicamente en $ pesos colombianos o la moneda o divisa local, seg??n el pa??s donde reside. 
                                     <br>  
                                     <br>  -	Su banco puede cobrarle tarifas de conversi??n o transferencia de moneda para recibir el dinero. Adem??s, su compa????a de billetera electr??nica puede cobrarle una tarifa por acceder al dinero. 
                                     <br>  
                                     <br>  -	No tenemos control sobre los tipos de cambio de divisas o los cargos impuestos por su banco o su compa????a de billetera electr??nica, y no somos responsables de pagar ning??n cargo impuesto por su banco o su compa????a de billetera electr??nica. 
                                     <br>  
                                     <br>  -	A excepci??n de las opciones de pago que implican el pago mediante transferencia bancaria directa de nuestra parte, no almacenamos ning??n dato revelado por usted cuando registran sus opciones de pago con un proveedor de pago externo.
                                        
                                       </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_9">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_9" aria-expanded="false"
                                            aria-controls="collapse3_9">
                                            Solicitudes de servicios de adquisidores:
                                    </h2>
                                </div>
                                <div id="collapse3_9" class="collapse" aria-labelledby="heading3_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                     <p>
                                     <br>   Esta secci??n describe los t??rminos que se aplican a las transacciones e interacciones entre adquisidores y ofertantes:
                                     <br>   -	Todas las transacciones e interacciones facilitadas por Smirrow son convenios entre adquisidores y ofertantes. Aunque facilitamos transacciones e interacciones entre adquisidores y ofertantes proporcionando la plataforma Smirrow, almacenando contenido, brindando seguridad b??sica y actuando como intermediario de pago, no somos parte del convenio entre adquisidor y ofertante o cualquier otro convenio que pueda existir entre un adquisidor y ofertante, y no somos responsables de ninguna transacci??n o interacci??n entre adquisidor y ofertante.
                                     <br>   -	Los pagos de adquisidores no incluyen el IVA, que se agregar?? a la tasa actual seg??n el pa??s en donde resida el adquisidor.
                                     <br>   -	Cuando un adquisidor ha realizado el pago requerido para acceder a un servicio, para el uso de la funci??n de interacci??n con el adquisidor se activar?? un chat y mensajer??a en su cuenta. Usted acepta que Smirrow no tiene responsabilidad alguna por interacciones por fuera del chat y mensajer??a. Lo que significa que solo usted ser?? responsable de cualquier interacci??n por fuera de la plataforma.
                                        
                                     </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_10">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_10" aria-expanded="false"
                                            aria-controls="collapse3_10">
                                            Contenido, t??rminos generales
                                    </h2>
                                </div>
                                <div id="collapse3_10" class="collapse" aria-labelledby="heading3_10"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                     <p>
                                   <br>  Adem??s de los t??rminos establecidos en otras partes de los t??rminos y condiciones de uso (en particular en nuestras pol??ticas de uso aceptable), los siguientes t??rminos se aplican al contenido publicado, mostrado, cargado o publicado por usted como ofertante en Smirrow: 

                                   <br>  a.	Su contenido no es confidencial y usted autoriza a sus adquisidores a acceder y ver su contenido en Smirrow para poder adquirir servicios, por lo anterior Smirrow no es responsable del uso de mala fe, descargar, copias el contenido de la ofertante.
                                   <br>  b.	Usted garantiza (lo que significa que nos hace una promesa legalmente exigible) que por cada elemento de contenido que publique, muestre, cargue o publique en Smirrow: 
                                   <br>  -	El contenido cumple en su totalidad con los t??rminos y condiciones de servicios para todos los usuarios (y en particular nuestras pol??ticas de uso aceptable). 
                                   <br>  -	Usted es propietario de su contenido (y de todos los derechos de propiedad intelectual) o tiene una licencia v??lida para ofrecer y suministrar su contenido a sus adquisidores con la finalidad que sus adquisidores soliciten sus servicios. 
                                   <br>  -	Si su contenido incluye o utiliza cualquier material de terceros, acepta que ha obtenido todos los derechos, licencias, consentimientos por escrito y liberaciones que son necesarios para el uso de dicha propiedad de terceros en su contenido y para el uso y explotaci??n posteriores de ese contenido en Smirrow. 
                                   <br>  -	El contenido es: (i) De calidad satisfactoria, teniendo en cuenta cualquier descripci??n del contenido y todas las dem??s circunstancias relevantes, incluida cualquier declaraci??n o representaci??n que realice sobre la naturaleza del contenido en su cuenta o en cualquier publicidad; (ii) razonablemente adecuado para cualquier prop??sito que sea para ofertar sus servicios al adquisidor; (iii) seg??n lo descrito por usted. 
                                   <br>  c.	Usted acepta que ser?? responsable ante nosotros y nos indemnizar?? si alguna de los puntos del numeral diez (10) no lo cumple. Esto significa que usted ser?? responsable de cualquier p??rdida o da??o (incluida la p??rdida de beneficios) que suframos como resultado de que alguna de las garant??as no la cumpla. 
                                   <br>  d.	No somos responsables ni respaldamos ning??n aspecto de ning??n contenido publicado por usted o cualquier otro usuario de Smirrow. No tenemos ninguna obligaci??n de monitorear ning??n contenido y no tenemos control directo sobre lo que puede comprender su contenido. 
                                   <br>  e.	Tambi??n acepta actuar como custodio de los registros del contenido que carga en Smirrow. 
                                        
                                     </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_11">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_11" aria-expanded="false"
                                            aria-controls="collapse3_11">
                                            Contenido en coautor??a
                                    </h2>
                                </div>
                                <div id="collapse3_11" class="collapse" aria-labelledby="heading3_11"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                        <br>    a.	Si carga contenido en su cuenta de ofertante que muestra a alguien m??s que usted o adem??s de usted (incluso si esa persona no puede ser identificada en el contenido) ("contenido en coautor??a"), garantiza (lo que significa que hace una promesa) que cada individuo mostrado en cualquier contenido en coautor??a subido a su cuenta:
<br>
                                        <br>    -	Es un ofertante de Smirrow.
                                        <br>    -	Ha dado su consentimiento expreso, previo y plenamente informado para su aparici??n en el contenido en coautor??a.
                                        <br>    -	Ha dado su consentimiento para que el contenido en coautor??a en el que aparece se publique en Smirrow.
<br>
                                        <br>    b.	Adem??s de las confirmaciones del n??mero once (11) (a) anterior, usted acepta que si carga contenido en coautor??a donde la otra persona o personas que aparecen en el contenido pueden identificarse desde el contenido, etiquetar?? las cuentas de Smirrow de cualquier persona o personas que aparezcan en el contenido en coautor??a que pueda identificarse a partir de ??l.
                                        <br>    c.	No debe cargar ning??n contenido que contenga ninguna imagen, foto, video o audio de otra persona que no sea o que se le agregue a usted, a menos que dicha persona tambi??n sea un ofertante en Smirrow.
                                        <br>    d.	Si alg??n contenido en coautor??a es un trabajo de autor??a conjunta, usted es el ??nico responsable de obtener las licencias o consentimientos necesarios de cualquier otro autor conjunto del contenido que sea suficiente para permitir que dicho contenido se cargue y est?? disponible en Smirrow.
<br>
                                        <br>    e.	Usted acepta que solo pagaremos las ganancias del ofertante a la cuenta del ofertante en la que se carg?? el servicio en coautor??a. El ofertante que carg?? el contenido en coautor??a es el ??nico responsable de dividir y distribuir los ingresos generados por los servicios en coautor??a entre los ofertantes que se muestran en dicho contenido en coautor??a. Cualquier acuerdo de reparto de ingresos de este tipo ser?? un acuerdo privado e independiente entre los ofertantes, y no somos responsables de proporcionar o hacer cumplir dichos acuerdos. Usted comprende y acepta que no tiene derecho a las ganancias del ofertante obtenidas por los servicios en coautor??a en el que aparece, pero que est?? publicado en la cuenta de otro ofertante. Si publica contenido en coautor??a en su cuenta, es posible que le solicitemos que proporcione informaci??n legal v??lida y completa para todas las personas que aparecen en el contenido en coautor??a. Si no proporciona la informaci??n solicitada por nosotros a nuestra solicitud, podemos eliminar el contenido en coautor??a, restringir sus derechos y permisos para publicar como ofertante, cancelar su cuenta y / o retener la totalidad o una parte de las ganancias del ofertante obtenidas que a??n no se han depositado a la cuenta bancaria del ofertante.
<br>
                                        <br>    f.	Usted acepta liberarnos y no hacer ning??n reclamo contra nosotros que surja del contenido y servicios en coautor??a. Usted acepta que todas las reclamaciones que surjan del contenido y servicios en coautor??a se har??n contra el ofertante (es) que public?? el contenido y servicios en coautor??a o aparecieron en el servicio y contenido en coautor??a (seg??n corresponda).

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_12">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_12" aria-expanded="false"
                                            aria-controls="collapse3_12">
                                            Circunstancias en las que podemos retener las ganancias del Creador:


                                    </h2>
                                </div>
                                <div id="collapse3_12" class="collapse" aria-labelledby="heading3_12"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                       <p>
                                  <br>   a.	Es posible que retengamos la totalidad o parte de las ganancias del ofertante que se le adeuden, pero que a??n no se hayan pagado:

                                  <br>   -	Si creemos que ha infringido o puede haber infringido grave o repetidamente alguna parte de los t??rminos y condiciones de uso para todos los usuarios.
                                  <br>   -	Si intenta o amenaza con violar cualquier parte de los t??rminos y condiciones de uso de una manera que creemos que tiene o podr??a tener consecuencias graves para nosotros o para otro usuario (incluida la p??rdida real o posible que nos haya causado a nosotros o a otro usuario).
                                  <br>   -	Si sospechamos que la totalidad o parte de las ganancias del ofertante resultan de una actividad ilegal, ya sea por parte de usted o del adquisidor que realiz?? el pago sobre un servicio que result?? en las ganancias del adquisidor.
                                  <br>   
                                  <br>   b.	Durante el tiempo que sea necesario para investigar la infracci??n real, amenazada o sospechada por usted o la presunta actividad ilegal (seg??n corresponda). Si despu??s de nuestra investigaci??n, llegamos a la conclusi??n de que (i) ha incumplido grave o repetidamente cualquier parte de los t??rminos y condiciones de uso; (ii) ha intentado o amenazado con violar cualquier parte de los t??rminos y condiciones de uso de una manera que tiene o podr??a tener consecuencias graves para nosotros u otro usuario (incluida la p??rdida real o posible causada a nosotros o a otro usuario), y / o (iii) Las ganancias de ofertantes son el resultado de una actividad ilegal, podemos notificarle que ha perdido sus ganancias de ofertante.
                                  <br>   
                                  <br>   c.	No tendremos ninguna responsabilidad ante usted si retenemos o perdemos cualquiera de sus ganancias de ofertantes cuando tengamos derecho a hacerlo en virtud de estos t??rminos y condiciones de uso para ofertantes.
                                  <br>   
                                  <br>   d.	Si retenemos la totalidad o parte de las ganancias del ofertante que se le adeudan y determinamos que parte de las ganancias del ofertante retenida por nosotros no est?? relacionada con el incumplimiento por su parte de los t??rminos y condiciones de uso o la sospecha de actividad ilegal, entonces podemos pagarle el parte de las ganancias del ofertante que determinamos que no est??n relacionadas con incumplimientos por su parte de los t??rminos y condiciones de uso o sospecha de actividad ilegal. Sin embargo, acepta que si consideramos que su (s) incumplimiento (s) de los t??rminos y condiciones de uso nos ha causado o puede causarnos una p??rdida, podemos retener todas las ganancias del ofertante que se le adeuden, pero que a??n no se hayan pagado y podemos compensar dichos montos con las p??rdidas sufridas por nosotros.
                                  <br>   
                                  <br>   e.	Si una vez que hayamos terminado nuestra investigaci??n, determinamos que se perder??n las ganancias del ofertante, haremos todo lo posible para devolver los pagos de los adquisidores de buena fe, que resultaron en las ganancias del ofertante perdido a los adquisidores de buena fe relevantes que realizaron dichos pagos de los fan??ticos.
                                        
                                       </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card ">
                                <div class="card-header" id="heading3_13">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_13" aria-expanded="false"
                                            aria-controls="collapse3_13">
                                            Promoci??n del cumplimiento tributario y del IVA:
                                    </h2>
                                </div>
                                <div id="collapse3_13" class="collapse" aria-labelledby="heading3_13"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                      <br>   a.	General:

                                      <br>   -	Recomendamos que todos los creadores busquen asesoramiento profesional para asegurarse de que cumple con las normas fiscales y del IVA locales, seg??n sus circunstancias individuales y pa??s donde reside.
                                      <br>   -	Al usar Smirrow como ofertante, usted garantiza (lo que significa que hace una promesa legalmente ejecutable) que ha informado y en el futuro informar?? sobre la recepci??n de todos los pagos realizados en relaci??n con su uso de Smirrow a la autoridad fiscal correspondiente en su jurisdicci??n, seg??n lo requiera la ley, seg??n el pa??s donde resida.
                                      <br>   -	Al usar Smirrow como ofertante, usted garantiza (lo que significa que hace una promesa legalmente ejecutable) que cumplir?? en todo momento con todas las leyes y regulaciones relacionadas con los impuestos que se apliquen a usted. Si, en alg??n momento mientras tiene una cuenta Smirrow, se produce alg??n incumplimiento de impuestos en relaci??n con usted (incluido el incumplimiento por su parte de informar las ganancias o la imposici??n de cualquier multa o inter??s relacionado con los impuestos) o si se produce alg??n litigio, Si se inicia una consulta o investigaci??n en su contra que est?? relacionada con, o que pueda conducir a, cualquier caso de incumplimiento tributario, usted acepta que:
                                      <br>   
                                      <br>   ???	Notificarnos por correo electr??nico a legal@smirrow.com por escrito dentro de los 7 d??as posteriores a la ocurrencia del incumplimiento tributario o al comienzo del litigio, consulta o investigaci??n (seg??n corresponda).
                                      <br>   ???	Env??enos de inmediato por correo electr??nico a legal@smirrow.com con: (i) Detalles de los pasos que est?? tomando para abordar la ocurrencia del incumplimiento tributario y para evitar que vuelva a ocurrir, junto con los factores atenuantes que considere relevantes; y (ii) Cualquier otra informaci??n en relaci??n con la ocurrencia del incumplimiento tributario que podamos requerir razonablemente.
                                      <br>   
                                      <br>   -	Para evitar dudas, usted es responsable de sus propios asuntos fiscales y Smirrow no es responsable de ning??n impago de impuestos por parte de los ofertantes.
                                      <br>   -	Nos reservamos el derecho de cerrar su cuenta Smirrow si nos notifica o nos damos cuenta de cualquier incumplimiento fiscal por su parte.
                                      <br>   
                                      <br>   b.	IVA e impuestos de Colombia y ofertantes establecidos en Colombia:
                                      <br>   
                                      <br>   A los efectos del IVA de Colombia ??nicamente, se considera que los ofertantes prestan directamente sus servicios a los adquisidores y no a Smirrow. El IVA solo se aplica si su actividad y servicios est??n grabados por la ley tributaria, por lo anterior debe asesorarse. 
                                      <br>   
                                      <br>   Si eres un ofertante registrado para el IVA e impuestos en Colombia:
                                      <br>   
                                      <br>   A efectos del IVA e impuesto, usted acepta que Smirrow tiene la total libertad de hacer modificaciones en la aplicabilidad del IVA e impuestos, si as?? lo amerita por cambios y modificaciones en la ley tributaria colombiana, o cualquier otra norma legal vigente que as?? lo amerite.
                                      <br>   
                                      <br>   No supervisamos las ganancias que los ofertantes reciben de otras fuentes de ingresos. Sin embargo, supervisaremos las ganancias anuales de los ofertantes de  Colombia. 
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="footer">
            Smirrow
        </div>
    </section>


@endsection
