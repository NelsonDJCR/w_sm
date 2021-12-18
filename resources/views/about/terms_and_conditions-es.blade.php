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
                                            Smirrow – WhatSapp 322 378 1478.
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
                                            Aceptación de las condiciones de uso
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_2" class="collapse" aria-labelledby="heading1_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                            <br>
                                            Este SITIO WEB es titularidad de la empresa reseñada en el punto uno de este
                                            documento.
                                            <br><br>
                                            Estos términos y condiciones de uso para todos los usuarios rigen su uso en
                                            Smirrow y su acuerdo con nosotros.
                                            <br><br>


                                            a. En los términos de servicio:
                                            <br>

                                            <br> Nos referimos a nuestro sitio web como Smirrow, incluso cuando accede a
                                            través de la URL www.smirrow.com o mediante cualquier navegador web.
                                            <br>
                                            <br> Aclaramos que al decir contenido, significa cualquier material subido a
                                            Smirrow por cualquier usuario (ya sea una ofertante o un adquiriente) incluidas
                                            fotos, videos, audio, (música y sonidos), material de transmisión, datos, texto,
                                            metadatos, imágenes, funciones interactivas emojis, GIF, memes y cualquier otro
                                            material.
                                            <br>
                                            <br> El servicio que provee la plataforma digital Smirrow es el de hosting o
                                            alojamiento web en un servidor con una conexión segura a internet y un software
                                            para poder publicar servicios de carácter personal, las cuales desarrollan una
                                            actividad de tipo informativa de forma gratuita.
                                            <br>
                                            <br> Smirrow, no participa en la creación de ninguno de los perfiles de este
                                            sitio, son perfiles creados por los usuarios, en donde Smirrow, solo los aloja.
                                            <br>
                                            <br> La utilización del portal atribuye la condición de usuario e implica la
                                            aceptación de todas las disposiciones incluidas en estos términos y condiciones
                                            de uso.
                                            <br>
                                            <br> La inserción de perfiles en el portal implica la aceptación de todas las
                                            disposiciones de los términos y condiciones de uso.
                                            <br>
                                            <br> Smirrow no puede asumir ninguna responsabilidad derivada del uso
                                            incorrecto, inapropiado o ilícito de la información aparecida en los perfiles de
                                            Internet de la plataforma digital.
                                            <br>
                                            <br> Con los límites establecidos en la ley, Smirrow no asume ninguna
                                            responsabilidad derivada de la falta de veracidad, integridad, actualización y
                                            precisión de los datos o informaciones que se contienen en su plataforma digital
                                            por parte de los usuarios, quienes están obligados a actuar de buena fe y con
                                            información verídica.
                                            <br>
                                            <br> La plataforma digital Smirrow puede contener enlaces (links) a otras
                                            páginas de terceras partes que Smirrow no puede controlar. Por lo tanto, Smirrow
                                            no puede asumir responsabilidades por el contenido que pueda aparecer en páginas
                                            de terceros.
                                            <br>
                                            <br> Los textos, imágenes, sonidos, animaciones, software y el resto de
                                            contenidos incluidos en Smirrow son propiedad exclusiva de sus licenciantes.
                                            Cualquier acto de transmisión, distribución, cesión, reproducción,
                                            almacenamiento o comunicación pública total o parcial, debe contar con el
                                            consentimiento expreso de Smirrow.
                                            <br>
                                            <br> Asimismo, para acceder a algunos de los servicios que Smirrow ofrece a
                                            través de la plataforma digital se deberá proporcionar algunos datos de carácter
                                            personal. En cumplimiento de lo establecido en la Ley de Protección de Datos le
                                            informamos que, mediante la cumplimentación de los presentes formularios, sus
                                            datos personales quedarán incorporados y serán tratados en los ficheros de
                                            Smirrow, con el fin de poderle prestar y ofrecer nuestros servicios, así como
                                            para informarle de las mejoras de Smirrow. Puede obtener más información en las
                                            políticas de seguridad, manejo y privacidad de datos personales.
                                            <br>
                                            <br> Además, le informamos de la posibilidad de que ejerza los derechos de
                                            acceso, rectificación, cancelación y oposición de sus datos de carácter
                                            personal, manera gratuita mediante email o por correo ordinario a Smirrow
                                            propietario de la plataforma digital y establece las siguientes condiciones de
                                            uso.
                                            <br>
                                            <br> b. Quienes somos y como contactarnos:
                                            <br>
                                            <br> Somos una sociedad registrada legalmente en Colombia, para contactarnos con
                                            cualquier pregunta sobre Smirrow, envié un correo electrónico a
                                            ayuda@smirrow.com, si no puede contactarse con nosotros por correo electrónico,
                                            escribanos al WhatsApp No 322 378 1478.
                                            <br>
                                            <br> c. Cambio de los términos y condiciones de uso:
                                            <br>
                                            <br> Smirrow se reserva el derecho de modificar las condiciones de uso de la
                                            plataforma digital. Por ello, es obligación del usuario leerlas periódicamente.
                                            <br>
                                            <br> Podemos cambiar cualquier parte de los términos y condiciones de uso sin
                                            avisarles de antemano en las siguientes circunstancias:
                                            <br>
                                            <br> - Para reflejar los cambios en las leyes y los requerimientos
                                            reglamentarios que se aplican a Smirrow y los servicios, característica y
                                            programas de Smirrow donde se requiere dichos cambios en donde no nos permite
                                            dar avisos urgentes.
                                            <br> - Para abordar un peligro imprevisto e inminente relacionado con la defensa
                                            de Smirrow, por cambios de normatividad según el país donde opere, por los
                                            usuarios al cometer fraudes o delitos, por malware, spam, violaciones de datos u
                                            otros riesgos de ciberseguridad.
                                            <br> - También podemos realizar otros cambios en cualquier parte de los términos
                                            de servicio y avisaremos a través de Smirrow.
                                            <br> - Puede darse de baja en cualquier momento, si al momento de entrar en
                                            vigencia los cambios, usted sigue usando Smirrow, estará sujeto a los nuevos
                                            términos y condiciones de uso.
                                            <br>
                                            <br> d. Realización de cambios, suspensiones y retiros:
                                            <br>
                                            <br> - Podemos actualizar y cambiar Smirrow en cualquier momento y por cualquier
                                            motivo, incluso para reflejar cambios en nuestros servicios, las necesidades de
                                            los usuarios, nuestras prácticas comerciales o para mejorar el rendimiento, la
                                            funcionalidad y la seguridad.
                                            <br> - Intentaremos avisarle con tiempo de cualquier cambio importante.
                                            <br> - Podemos suspender, retirar, restringir la disponibilidad de todo o parte
                                            de Smirrow por razones comerciales u operativas.
                                            <br> - No garantizamos que Smirrow, o cualquier contenido en él, estará siempre
                                            disponible o accesible sin interrupciones.
                                            <br> - Trataremos de darle un aviso razonable de cualquier suspensión o retiro
                                            si le afecta.
                                            <br>
                                            <br> e. Registrarse en Smirrow:
                                            <br>
                                            <br> - Primero debe registrarse seleccionando una de las dos opciones si es
                                            acompañante, ósea un usuario ofertante de servicios de entretenimiento para
                                            adultos o si busca compañía, ósea un usuario adquisidor de servicios.
                                            <br> - Debe proporcionar una dirección de correo electrónico válida, su nombre,
                                            un nombre de usuario y contraseña, aceptar términos y condiciones de uso o
                                            autenticarse con una cuenta válida de Facebook o Google.
                                            <br> - Su contraseña debe ser única y diferente para mayor seguridad.
                                            <br> - Debe cumplir con los requisitos de composición de contraseñas en Smirrow.
                                            <br> - Para registrarse debe tener al menos 18 años de edad y se le solicitará
                                            que lo confirme al ingresar a www.smirrow.com y aceptar que es mayor de edad.
                                            <br> - Solo se le permitirá estar vinculado con Smirrow si es mayor de edad.
                                            <br> - No se le prohíbe el acceso a la plataforma según las leyes que apliquen a
                                            usted según el país donde resida.
                                            <br> - Si no cumple con los requisitos de mayoría de edad, no debe acceder, ni
                                            utilizar Smirrow.
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br> f. Su compromiso con nosotros cuando se registra y usa Smirrow:
                                            <br>
                                            <br> - Asume y asegurará que toda la información que nos envíe es veraz, precisa
                                            y completa.
                                            <br> - Actualizará de inmediato cualquier información que nos haya enviado a
                                            medida que cambie.
                                            <br> - Usted acepta recibir comunicaciones nuestras de forma electrónica,
                                            incluidos correos electrónicos y mensajes publicados en Smirrow y sobre el
                                            procesamiento de sus datos personales como se encuentra en nuestras políticas de
                                            seguridad, manejo y privacidad de datos personales.
                                            <br> - Mantendrá su cuenta, datos de inicio de sesión confidenciales y seguros,
                                            incluidos sus datos de usuario, contraseñas y cualquier otra información que
                                            forme parte de nuestros procedimientos de seguridad y no los revelará a nadie
                                            más.
                                            <br> - Se pondrá en contacto con ayuda@smirrow.com de inmediato si cree que
                                            alguien ha usado o está usando su cuenta al final de cada sesión.
                                            <br> - Asume que tendrá especial cuidado al acceder a su cuenta desde una
                                            computadora pública o compartida, asegurando que otros no podrán acceder a su
                                            cuenta, evitando dejar su contraseña u otra información personal.
                                            <br> - Usted es responsable de toda actividad en su cuenta, incluso si,
                                            contrariamente a los términos y condiciones de uso, otra persona usa su cuenta.
                                            <br> - Usted acepta y cumplirá en su totalidad con estos términos y condiciones
                                            de uso para todos los usuarios.
                                            <br>
                                            <br> g. Derecho que tienen los usuarios para suspender, cancelar y eliminar su
                                            cuenta:
                                            <br>
                                            <br> - Podemos, pero no estamos obligados a moderar o revisar su contenido para
                                            verificar el cumplimiento de los términos y condiciones de uso.
                                            <br> - Es nuestra política el suspender el acceso a cualquier contenido que
                                            publique en Smirrow del que tengamos conocimientos que puede no cumplir con los
                                            términos y condiciones de uso.
                                            <br> - Si suspendemos el acceso a cualquiera de sus contenidos, puede solicitar
                                            una revisión de nuestra decisión de suspender su contenido a ayuda@smirros.com.
                                            <br> - Luego de nuestra sospecha o ilegalidad de contenido relevante, podemos
                                            tomar cualquier acción que consideremos apropiada, incluyendo restablecer el
                                            acceso al contenido, eliminar o deshabilitar permanentemente el acceso al
                                            contenido sin necesidad de obtener consentimiento de usted y sin avisarle
                                            previamente.
                                            <br> - Usted acepta que nos brindará toda la información requerida y asistencia
                                            razonable proporcionándonos copia de solicitudes que le requiramos para
                                            investigaciones pertinentes.
                                            <br> - No seremos responsables de ninguna perdida sufrida por usted, derivada de
                                            la suspensión del acceso a su contenido o a su cuenta o perfil, o de cualquier
                                            otro paso que tomemos de buena fe para investigar cualquier sospecha a
                                            incumplimientos o ilegalidad de su contenido según esta sección.
                                            <br> - Si suspendemos el acceso a su contenido o lo eliminamos, se lo
                                            notificaremos por correo electrónico o mensaje electrónico a su cuenta de
                                            Smirrrow, pero no estamos obligados a notificarle previamente dicha eliminación.
                                            <br> - Nos reservamos el derecho, a nuestro exclusivo criterio, de prescindir su
                                            acuerdo con nosotros y su acceso a Smirrow por cualquier motivo, notificándole
                                            con 30 días de anticipación por correo electrónico o mensaje electrónico a su
                                            cuenta de Smirrow. También podemos suspender el acceso a su cuenta de usuario o
                                            rescindir su acuerdo con nosotros y su acceso a Smirrow de inmediato y sin
                                            previo aviso.
                                            <br> - Si creemos que ha infringido o puede haber infringido grave o
                                            repetidamente alguna parte de los términos de servicio (incluida, en particular,
                                            nuestros términos y condiciones de uso), o si intenta o amenaza con infringir
                                            cualquier parte de los Términos de una manera que haya o podría tener
                                            consecuencias graves para nosotros u otro usuario.
                                            <br> - Si realiza alguna acción que, en nuestra opinión, haya causado o sea
                                            razonablemente probable que nos haga sufrir una pérdida o que de otro modo dañe
                                            la reputación de Smirrow.
                                            <br> - Si suspendemos el acceso a su cuenta de usuario o prescindimos su acuerdo
                                            con nosotros y su acceso a Smirrow, se lo haremos saber.
                                            <br> - Durante cualquier período en el que se suspenda el acceso a su cuenta de
                                            usuario, se suspenderán los pagos hasta que se aclare todo.
                                            <br> - Podemos retener la totalidad o parte de las ganancias de su casillero “mi
                                            dinero” que se le adeuden, pero que aún no se hayan pagado, si ha infringido,
                                            incumpliendo o cometido algún acto o hecho contra la ley y los términos y
                                            condiciones de uso.
                                            <br> - Tras la cancelación de su cuenta, podemos tratar su contenido de la
                                            manera adecuada de acuerdo con nuestras Políticas de seguridad, manejo y
                                            privacidad de datos personales (incluso eliminándola) y ya no tendrá derecho a
                                            acceder a su contenido. No existe ninguna función técnica en Smirrow para que
                                            pueda acceder a su cuenta después de la cancelación de su cuenta.
                                            <br> - Podemos investigar cualquier presunto o presunto mal uso, abuso o uso
                                            ilegal de Smirrow y cooperar con las entidades legales competentes de aplicación
                                            de la ley en dicha investigación.
                                            <br> - Podemos divulgar cualquier información o registros que tengamos o
                                            controlemos sobre su uso de Smirrow a las entidades legales competentes de
                                            aplicación de la ley en relación con cualquier investigación policial de
                                            cualquier actividad ilegal presunta, o en respuesta a una orden judicial.
                                            <br> - Podemos cambiar los proveedores de pago de terceros que utilizamos y, si
                                            lo hacemos, le notificaremos y almacenaremos los detalles correspondientes en su
                                            cuenta de Smirrow.
                                            <br> - Aparte del contenido, todos los derechos sobre y para Smirrow y todo su
                                            contenido, características, bases de datos, código fuente y funcionalidad son
                                            propiedad nuestra y / o de nuestros licenciantes. Dicho material está protegido
                                            por derechos de autor y puede estar protegido por marcas registradas, secretos
                                            comerciales y otras leyes de propiedad intelectual.
                                            <br> - Smirrow tendrá permiso de todos los usuarios de usar su contenido, si así
                                            lo creemos conveniente para publicidad.
                                            <br> - Somos los propietarios únicos y exclusivos de todos y cada uno de los
                                            datos anonimizados relacionados con su uso de Smirrow y dichos datos anónimos
                                            pueden ser utilizados por nosotros para cualquier propósito, incluso con fines
                                            comerciales, de desarrollo e investigación.
                                            <br>
                                            <br> h. De qué no somos responsables:
                                            <br> - Usaremos el cuidado y la habilidad razonable para entregar el mejor uso
                                            de la plataforma Smirrow, pero hay ciertas cosas de las que no somos
                                            responsables, como se indica a continuación:
                                            <br> - No autorizamos, ni aprobamos el contenido en Smirrow, ni las opiniones
                                            expresadas por todos los usuarios de Smirrow porque no representan
                                            necesariamente nuestras opiniones.
                                            <br> - No le otorgamos ningún derecho en relación con el contenido a ningún
                                            usuario. Estos derechos solo pueden ser otorgados a usted por uno de usuarios
                                            ofertantes de servicios.
                                            <br> - Su contenido puede ser visto por personas que reconozcan su identidad. No
                                            seremos responsables de ninguna manera ante usted si se lo identifica a partir
                                            de su contenido. Si bien podemos, de vez en cuando y a nuestra entera
                                            discreción, ofrecer cierta tecnología de geolocalización o geolocalización en
                                            Smirrow, usted comprende y acepta que no garantizamos la precisión o efectividad
                                            de dicha tecnología, y no tendrá ningún reclamo contra nosotros que surja de su
                                            uso o dependencia de cualquier tecnología de geolocalización, geovallas, marca
                                            de agua en Smirrow.
                                            <br> - Todo el contenido es creado, seleccionado y proporcionado por los
                                            usuarios y no por nosotros. No somos responsables de revisar o moderar el
                                            contenido, y no seleccionamos ni modificamos el contenido que se almacena o
                                            transmite a través de Smirrow. No tenemos la obligación de monitorear el
                                            Contenido o detectar incumplimientos de los términos y condiciones de uso.
                                            <br> - Usted acepta que no tiene la obligación de seguir ninguna sugerencia,
                                            comentario, revisión o instrucción recibida de otro usuario de Smirrow y que, si
                                            elige hacerlo, lo hace bajo su propio riesgo.
                                            <br> - No nos hacemos responsables del tipo de usuario que lleguen a Smirrow por
                                            referencias de otro usuario.
                                            <br> - No prometemos que Smirrow sea compatible con todos los dispositivos y
                                            sistemas operativos. Usted es responsable de configurar la tecnología de la
                                            información, el dispositivo y los programas informáticos para acceder a Smirrow.
                                            <br> - Debe utilizar su propio software de protección antivirus.
                                            <br> - No somos responsables de la disponibilidad de Internet o de cualquier
                                            error en sus conexiones, dispositivo u otro equipo o software que pueda ocurrir
                                            en relación con su uso de Smirrow.
                                            <br> - Si bien tratamos de asegurarnos de que Smirrow sea seguro y esté libre de
                                            errores y virus, no podemos prometer que lo será y no tenemos control sobre el
                                            contenido proporcionado por los usuarios.
                                            <br> - No somos responsables de ninguna cuenta de usuario, contraseñas, cuentas
                                            de correo electrónico perdidas, robadas o comprometidas, o cualquier actividad
                                            no autorizada resultante o pagos no autorizados o retiros de fondos resultantes.
                                            <br> - Usted reconoce que una vez que su contenido y servicios se publiquen en
                                            Smirrow, no podemos controlar y no seremos responsables ante usted por el uso
                                            que otros usuarios o terceros hagan de dicho contenido.
                                            <br> - Puede eliminar su cuenta en cualquier momento, pero reconoce que la
                                            eliminación de su cuenta no impedirá por sí misma la circulación de su contenido
                                            que pueda haber sido registrado por otros usuarios en violación de los términos
                                            y condiciones de uso o por terceros antes de la eliminación de su cuenta.
                                            <br> - Smirrow no se hace responsable si usted como usuario usa un número y
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
                                            Mayoría de edad.
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_3" class="collapse" aria-labelledby="heading1_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> En la presente plataforma digital está destinada exclusivamente a personas
                                            mayores de edad. Por ello, queda expresamente prohibida la utilización de
                                            Smirrow y navegación a través del mismo por menores de edad. Asimismo, no
                                            admitimos menores con permiso paterno, ni menores legalmente emancipados. Si
                                            eres menor de edad, abandona inmediatamente Smirrow.
                                            <br>
                                            <br> Smirrow se reserva el derecho de borrar, bloquear y no permitir nuevas
                                            publicaciones a cualquier usuario sobre el cual existiese sospechas o indicios
                                            de que es menor de edad.
                                            <br>
                                            <br> Smirrow se reserva el derecho de pedir a cualquier usuario un documento
                                            legal acreditativo (C.C., C.E., NIT, PASAPORTE) donde se muestre su edad y una
                                            fotografía identificativa para reanudar el servicio.
                                            <br>
                                            <br> Smirrow no acepta menores de edad que quieran prestar servicios dentro de
                                            la plataforma, para esto también solicita una foto selfie, número de
                                            identificación y número de cuenta bancaria.
                                            <br>
                                            <br> Los perfiles creados cuentan con la seguridad que brinda Smirrow por medio
                                            de su plataforma web.
                                            <br>
                                            <br> Nos tomamos muy en serio el control de la mayoría de edad de los usuarios,
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
                                            Vinculación desde y hacia Smirrow
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_4" class="collapse" aria-labelledby="heading1_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                        <h4>Enlaces a Smirrow:</h4>

                                        <br> Puede vincular sus redes sociales en configuración de perfil de Smirrow, en la
                                        casilla de descripción, siempre que lo haga de una manera que sea justa y legal y no
                                        dañe nuestra reputación ni se aproveche de ella, pero no debe establecer un vínculo
                                        de tal manera que sugiera cualquier forma de asociación, aprobación o respaldo de
                                        nuestra parte.
                                        <br> Si es un usuario ofertante, al promocionar su cuenta, debe cumplir con nuestros
                                        términos y condiciones de uso y los términos de servicio de cualquier otro sitio web
                                        donde coloque un enlace o promocione su cuenta y servicios. Al promocionar su cuenta
                                        y servicios, no debe hacerse pasar por Smirrow, ni dar la impresión de que
                                        promocionamos su cuenta y servicios, si este no es el caso.
                                        <br> No debe promocionar su cuenta de Smirrow mediante el uso de Google Ads o
                                        cualquier plataforma publicitaria similar o servicio de publicidad en motores de
                                        búsqueda.
                                        <br> Si Smirrow contiene enlaces a otros sitios y recursos proporcionados por
                                        terceros, estos enlaces se proporcionan solo para su conveniencia. Dichos enlaces no
                                        deben interpretarse como una aprobación por nuestra parte de esos sitios web
                                        vinculados o información que pueda obtener de ellos. No tenemos control sobre el
                                        contenido de esos sitios o recursos y no aceptamos responsabilidad por ellos o por
                                        cualquier pérdida o daño que pueda surgir por su uso de ellos. Si decide acceder a
                                        cualquiera de los sitios web de terceros vinculados a Smirrow, lo hace bajo su
                                        propio riesgo y sujeto a los términos y condiciones de uso de dichos sitios web.


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
                                            ¿Cómo borro mi cuenta?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_5" class="collapse" aria-labelledby="heading1_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Si desea eliminar su cuenta de Smirrow, puede hacerlo en la opción
                                            “Eliminar Cuenta” de su cuenta de Smirrow.
                                            <br> Si es un usuario adquisidor o un usuario ofertante, la eliminación de su
                                            cuenta se llevará a cabo dentro de un tiempo razonable después de su solicitud.
                                            <br> Sí es ambos, usuario adquisidor y usuario ofertante, su cuenta se eliminará
                                            en dos etapas (primero el usuario adquisidor y después el de usuario ofertante).
                                            <br> Una vez que se haya eliminado su cuenta, no se le cobrará ningún monto
                                            adicional ni tendrá acceso a su cuenta anterior de Smirrow, y el registro se
                                            eliminará y no podrá renovarse posteriormente.
                                            <br> Recibirá una confirmación por correo electrónico después de la eliminación
                                            exitosa de su cuenta. Una vez que se haya eliminado su cuenta, podemos tratar su
                                            Contenido de la manera adecuada de acuerdo con nuestra política de seguridad,
                                            manejo y privacidad de datos personales (incluso eliminándola) y ya no tendrá
                                            derecho a acceder a su cuenta. No existe ninguna función técnica en Smirrow para
                                            que pueda acceder a su cuenta después de la cancelación.


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
                                            ¿Quién es responsable de cualquier pérdida o daño sufrido por usted?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_6" class="collapse" aria-labelledby="heading1_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> a. Si es un Usuario adquisidor: Si es un Usuario adquisidor, acepta que:
                                            <br> Nosotros y nuestras compañías subsidiarias, empleados, propietarios,
                                            representantes y agentes no seremos responsables ante usted por ninguna pérdida
                                            de ganancias, pérdida de negocios o ingresos, interrupción de negocios, pérdida
                                            de oportunidades comerciales o pérdida de ahorros anticipados que usted sufra
                                            debido a o en relación con su uso de Smirrow.
                                            <br> b. Si es un usuario ofertante: si es un usuario ofertante, acepta que:
                                            <br> Nosotros y nuestras empresas subsidiarias, empleados, propietarios,
                                            representantes y agentes quedamos excluidos (en la medida permitida por la ley)
                                            de todas las condiciones implícitas, garantías, representaciones u otros
                                            términos que puedan aplicarse a Smirrow o cualquier contenido de este. Esto
                                            significa que, si los términos y condiciones de uso no incluyen expresamente una
                                            promesa o compromiso por nuestra parte, entonces no estamos implícitos por ley.
                                            <br> No somos responsables ante usted por ninguna pérdida o daño sufrido por
                                            usted que no sea un resultado previsible de nuestro incumplimiento de los
                                            términos y condiciones de uso o de nuestra falta de cuidado y habilidad
                                            razonables. La pérdida o daño es previsible si es obvio que sucederá o si, en el
                                            momento en que aceptó los términos y condiciones de uso, tanto nosotros como
                                            usted sabíamos que podría suceder.
                                            <br> No somos responsables ante usted por ninguna pérdida o daño, ya sea por
                                            contrato, agravio (incluida la negligencia), incumplimiento de la obligación
                                            legal o de otro modo, incluso si es previsible, que surja de o en conexión con:
                                            <br>
                                            <br> - Su incapacidad para utilizar Smirrow o cualquiera de sus servicios,
                                            funciones o programas.
                                            <br> - Su uso o dependencia de cualquier contenido (incluido el Contenido)
                                            almacenado en Smirrow.
                                            <br> - No somos responsables ante usted por, lucro cesante, pérdida de ventas,
                                            negocios o ingresos, interrupción del negocio, pérdida de ahorros anticipados,
                                            pérdida de oportunidades comerciales, buena voluntad o reputación, pérdida de
                                            datos o información, incluido cualquier contenido, pérdida o daño indirecto o
                                            consecuente.
                                            <br> No somos responsables ante usted por ninguna pérdida o daño causado por un
                                            ataque distribuido de denegación de servicio, virus, ransomware u otro material
                                            tecnológicamente dañino que pueda infectar su equipo informático, programas
                                            informáticos, datos u otro material patentado debido a su uso de Smirrow o
                                            cualquiera de sus servicios, funciones o programas, o debido a la descarga de
                                            cualquier material publicado en Smirrow, o en cualquier sitio web vinculado a
                                            Smirrow.
                                            <br> No somos responsables ante usted si su contenido se copia, distribuye,
                                            vuelve a publicar en otro lugar o si otro usuario o un tercero infringe sus
                                            derechos de autor.
                                            <br> No somos responsables ante usted por cualquier divulgación de su identidad,
                                            o cualquier divulgación o publicación de su información personal por parte de
                                            otros usuarios o terceros sin su consentimiento (también conocido como
                                            "doxing").
                                            <br> No somos responsables ante usted por cualquier falla o demora por nuestra
                                            parte en el cumplimiento de cualquier parte de los términos y condiciones de uso
                                            que surja de eventos fuera de nuestro control razonable. Si hay alguna falla o
                                            demora por nuestra parte en el cumplimiento de cualquier parte de los términos y
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
                                            Definición del servicio de Smirrow
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_7" class="collapse" aria-labelledby="heading1_7"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            El servicio de la plataforma digital consiste en la suministración de un
                                            software gratuito para la creación de perfiles prestadores de servicios que
                                            pueden ser adquiridos por usuarios que dispongan de un dispositivo electrónico
                                            digital y una conexión segura a internet.
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
                                            perfil, el cual estará sujeto a verificación y validación por parte de Smirrow,
                                            una vez aceptado recibirá un email por la activación de la cuenta para empezar a
                                            usarla.

                                            <br> Una vez creado el perfil, el usuario podrá administrar su cuenta desde su
                                            panel, si este pierde su acceso puede recuperarlo en la opción recuperar
                                            contraseña.
                                            <br>
                                            <br> Smirrow, bajo la petición de modificación, borrado u otras sobre un perfil,
                                            solo las aceptará cuando provengan del email de gestión de usuario propietario
                                            del perfil, nunca de otro.
                                            <br>
                                            <br> Un perfil permanecerá publicado hasta que el usuario decida borrarlo, si el
                                            usuario no actualiza su perfil en dos (2) años, Smirrow se reserva el derecho a
                                            eliminarla.
                                            <br>
                                            <br> Smirrow se define como un portal digital que suministra un software para
                                            que los usuarios puedan ofertar servicios y adquirir servicios con unas bases
                                            aceptables de seguridad y garantías. Smirrow se reserva el derecho de borrar
                                            cualquier perfil con datos erróneos.
                                            <br>
                                            <br> El usuario es responsable de todo lo que publica, de sus actos y de todo
                                            daño que pudiera ocasionar. Smirrow pondrá a disposición inmediata de la
                                            policía, juzgados o entidades gubernamentales y judiciales cualquier información
                                            que le sea requerida.
                                            <br>
                                            <br> Smirrow no es responsable de lo que pueda publicar un usuario, asimismo,
                                            Smirrow no es responsable de los contenidos que transmiten o alojan o a los que
                                            facilita el acceso, si no participa en su elaboración o no tiene conocimiento de
                                            la ilegalidad de estos.
                                            <br>
                                            <br> Smirrow será responsable si conoce la ilicitud de un contenido que publica
                                            un usuario y no actúa rápidamente para retirarlo o imposibilitar el acceso al
                                            mismo, de modo que, si un usuario proporciona información y documenta la
                                            ilicitud de algún contenido, Smirrow habilitará cuantos medios informáticos
                                            tenga para que no se repita.
                                            <br>
                                            <br> En el supuesto de que Smirrow reciba denuncia por una supuesta infracción
                                            de copyright o tenga constancia a través de denuncia de la publicación de un
                                            teléfono falso o no veraz en un usuario, Smirrow podrá solicitar documentación
                                            que pruebe dicha denuncia.
                                            <br>
                                            <br> El usuario se compromete a utilizar el portal, sus contenidos y servicios
                                            conforme con:
                                            <br>
                                            <br> - La Ley o cualesquiera otras normas del ordenamiento jurídico aplicable.
                                            <br> - Los presentes términos y condiciones de uso.
                                            <br> - Las Normas de Publicación.
                                            <br> - Las buenas costumbres.
                                            <br> - El orden público.
                                            <br> - La buena fe.
                                            <br>
                                            <br> El usuario deberá crear su perfil en la categoría adecuada y la localidad
                                            en la que se encuentre y comprometerse a:
                                            <br> No cometer a través de la plataforma digital de Smirrow ningún delito
                                            recogido en el código penal o en cualquier otra normativa aplicable nacional. En
                                            concreto, y sin carácter limitativo, sino ejemplificativo, queda estrictamente
                                            prohibido en la plataforma digital de Smirrow:
                                            <br>
                                            <br> - La trata de seres humanos.
                                            <br> - La esclavitud moderna.
                                            <br> - El tráfico de órganos.
                                            <br> - El tráfico de drogas.
                                            <br> - La comisión de delitos contra la libertad e indemnidad sexuales.
                                            <br> - No incitar a actuar de forma ilegal.
                                            <br> - No difundir difamaciones, calumnias, injurias y/o contenidos o propaganda
                                            de carácter racista, xenófobo, de apología del terrorismo o que atenten contra
                                            los derechos humanos.
                                            <br> - No manifestar falsedades o inducir a error.
                                            <br> - No suplantar a otros usuarios utilizando sus claves de acceso a los
                                            distintos servicios y/o contenidos del Portal.
                                            <br> - No abusar del sistema de “denunciar”.
                                            <br> - No difundir comunicaciones no solicitadas o autorizadas.
                                            <br> - No difundir mensajes que atenten contra la dignidad de terceros o que
                                            sean groseros o falten el respeto.
                                            <br> - No usar robots, spiders, “scrapers” o cualquier otro medio automático
                                            para acceder al Portal para copiar, retirar, renovar o publicar contenido sin
                                            previo consentimiento escrito por Smirrow.
                                            <br> - No almacenar o en cualquier forma recabar información o datos personales
                                            de terceros sin su consentimiento, incluidas las direcciones de correo
                                            electrónico.
                                            <br> - No esquivar, evitar o “saltar” las medidas utilizadas para impedir o
                                            restringir el acceso al Portal.
                                            <br> - Es necesario completar todos los campos obligatorios del perfil para
                                            activar una cuenta.
                                            <br> - Hay que respetar las categorías y las secciones (demanda vs oferta).
                                            <br> - No está permitido crear un perfil idéntico o similar a otro ya publicado.
                                            <br> - No está permitido utilizar correos ficticios para crear un perfil.
                                            <br> - No está permitido escribir información falsa en el perfil creado.
                                            <br> - No está permitido utilizar palabras clave (“Keyword Spamming”).
                                            <br> - No está permitido utilizar sistemas o herramientas para la publicación o
                                            renovación masiva y/o automática, sin el previo consentimiento escrito por
                                            Smirrow.
                                            <br> - No está permitido copiar, procesar o distribuir el texto y/o las fotos o
                                            imágenes de terceros sin su previa autorización.
                                            <br> - No está permitido incluir el número de teléfono o el correo electrónico
                                            fuera de los campos explícitamente previstos para incluir está información en el
                                            perfil creado.
                                            <br>
                                            <br> Smirrow pondrá en inmediato conocimiento de las autoridades competentes
                                            cualquier sospecha o indicio que tenga de la comisión de un delito a través de
                                            la plataforma Smirrow, reservándose el derecho a restringir total y
                                            permanentemente el acceso al mismo por parte de los presuntos implicados.
                                            <br>
                                            <br> La información proporcionada por el usuario deberá en todo momento ser
                                            veraz, respondiendo el usuario por todas aquellas manifestaciones, datos,
                                            contenidos, informaciones y detalles que sean falsos, vagos o inexactos.
                                            <br>
                                            <br> En el caso de la comunicación de datos de carácter personal en el
                                            cumplimiento de los cuestionarios de alta como usuario y la publicación de una
                                            oferta, esta información habrá de ser cierta, exacta y coincidente.
                                            <br>
                                            <br> El usuario se compromete y se obliga a comunicar cualquier cambio o
                                            modificación futura de sus datos de carácter personal, adaptándolos, en
                                            consecuencia, a su situación real.
                                            <br>
                                            <br> La inexactitud de la información exime a Smirrow de cualquier
                                            responsabilidad por la falta de información del usuario en relación con las
                                            ofertas y los servicios, siempre que Smirrow, hubiese actuado con la debida
                                            diligencia en sus comunicaciones. En todo caso, el usuario será el único
                                            responsable de las manifestaciones falsas o inexactas que realice y de los
                                            perjuicios que cause a Smirrow, a otros usuarios o a terceros por la información
                                            que facilite.
                                            <br>
                                            <br> A los efectos del presente acuerdo de términos y condiciones de uso, no se
                                            considerará falta de veracidad la utilización de apodos o pseudónimos para
                                            identificar a los usuarios en el portal, siempre y cuando esto no suponga un
                                            obstáculo para conocer la identidad real de los mismos o llevar a cabo los
                                            cobros correspondientes a los servicios adquiridos por usuarios.
                                            <br>
                                            <br> a. General: Usted acepta que
                                            <br> - Si algún aspecto de su acuerdo con nosotros no se puede hacer cumplir, el
                                            resto permanecerá en vigor.
                                            <br> - Si no hacemos cumplir algún aspecto de su acuerdo con nosotros, no será
                                            una renuncia.
                                            <br> - Nos reservamos todos los derechos que no se le otorguen expresamente.
                                            <br> - No se le otorgan licencias implícitas u otros derechos en relación con
                                            ninguna parte de Smirrow, salvo lo establecido expresamente en los términos y
                                            condiciones de uso.
                                            <br> - Su acuerdo con nosotros no otorga derechos a terceros, excepto las
                                            exclusiones y limitaciones de responsabilidad en la sección titulada ¿Quién es
                                            responsable de cualquier pérdida o daño sufrido por usted? puede ser ejecutado
                                            por nuestras empresas subsidiarias, empleados, propietarios, representantes y
                                            agentes.
                                            <br> - No puede transferir sus derechos u obligaciones en virtud de su acuerdo
                                            con nosotros sin nuestro consentimiento previo por escrito.
                                            <br> - Nuestros derechos y obligaciones en virtud de su acuerdo con nosotros
                                            pueden ser cedidos o transferidos por nosotros a otros. Por ejemplo, esto podría
                                            ocurrir si nuestra propiedad cambia (como en una fusión, adquisición o venta de
                                            activos) o por ley. Además, podemos optar por delegar el cumplimiento de
                                            cualquiera de nuestras obligaciones en virtud de su acuerdo con nosotros a
                                            cualquier tercero, pero seguiremos siendo responsables ante usted por el
                                            cumplimiento de dichas obligaciones.
                                            <br> - Los términos de servicio forman el acuerdo completo entre nosotros y
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
                                            Procedimiento en caso de realización de actividades de carácter <br> indebido,
                                            de datos incorrectos o fraudulentos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_9" class="collapse" aria-labelledby="heading1_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> En el caso de que cualquier usuario o un tercero considere que existen
                                            hechos o circunstancias que revelen el carácter indebido de cualquier contenido
                                            y/o de la realización de cualquier actividad en la plataforma digital y, en
                                            particular, la publicación de imágenes incontenidas, violación de derechos de
                                            propiedad intelectual, el incumplimiento de los deberes y obligaciones previstas
                                            en estos términos y condiciones de uso o la vulneración de cualesquiera otros
                                            derechos, deberá enviar una notificación a Smirrow al correo legal@smirrow.com
                                            en la que se contengan los siguientes extremos:
                                            <br>
                                            <br> - Datos personales del reclamante: nombre, dirección, número de teléfono y
                                            dirección de correo electrónico.
                                            <br> - Especificación de la supuesta actividad ilícita llevada a cabo en la
                                            plataforma web y, en particular, cuando se trate de una supuesta violación de
                                            derechos, indicación precisa y concreta de los contenidos protegidos, así como
                                            de su localización en el Sitio Web.
                                            <br> - Hechos o circunstancias que revelan el carácter ilícito de dicha
                                            actividad.-
                                            <br> - En el supuesto de violación de derechos, firma manuscrita o equivalente,
                                            con los datos personales del titular de los derechos supuestamente infringidos o
                                            de la persona autorizada para actuar en nombre y por cuenta de esta.
                                            <br> - Declaración expresa, clara y bajo la responsabilidad del reclamante de
                                            que la información proporcionada en la notificación es exacta y del carácter
                                            indebido de la utilización de los contenidos o de la realización de las
                                            actividades descritas.
                                            <br>
                                            <br> Smirrow procederá de inmediato a adoptar las medidas para la subsanación o
                                            la eliminación, en su caso, de los citados contenidos.

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
                                            industrial, incluyendo, de modo enumerativo y no limitativo, código fuente,
                                            textos, imágenes, logos, marcas y diseños.

                                            <br> Salvo que fuera autorizado por Smirrow o a menos que ello resulte
                                            legalmente permitido, el usuario no podrá copiar, modificar, distribuir, vender,
                                            alquilar o explotar de cualquier otra forma contenidos de Smirrow (excepción
                                            hecha del propio contenido del usuario). Asimismo, el usuario no puede llevar a
                                            cabo operaciones de desensamblaje o descompilación, ingeniería inversa o
                                            cualquier otra operación destinada a obtener cualquier código fuente contenido
                                            perteneciente a la plataforma digital Smirrow.
                                            <br>
                                            <br> Con la publicación de un perfil, el usuario concede a Smirrow un derecho no
                                            exclusivo, mundial, perpetuo, irrevocable, gratuito, sublicenciable y cedible
                                            para la explotación del perfil creado (incluyendo, sin limitación, su
                                            reproducción, distribución, comunicación pública, transformación y puesta a
                                            disposición del público) de manera que Smirrow podrá utilizarlo en todos los
                                            medios y modalidades de explotación. Smirrow se reserva el derecho de retirar
                                            contenidos en caso de que vulneren la ley, estos términos y condiciones de uso o
                                            los derechos de terceras personas.

                                            <br> Usted confirma que posee todos los derechos de propiedad intelectual
                                            (ejemplos de los cuales son derechos de autor y marcas comerciales) en su
                                            contenido o que ha obtenido todos los derechos necesarios sobre su contenido que
                                            se requieren para el uso y otorgar licencias con respecto a su contenido a
                                            nosotros.
                                            <br> Esto incluye cualquier derecho requerido y así no infringir las normas
                                            nacionales e internacionales y en cualquier territorio en el que Smirrow sea
                                            accesible y, en particular, en los de la Organización de Estados Americanos,
                                            Estados Unidos de América, el Reino Unido y la Unión Europea.

                                            <br> El permiso que usted nos otorga es perpetua, no exclusiva, mundial, libre
                                            de regalías, sublicenciable, asignable y transferible por nosotros. Esto
                                            significa que el permiso continuará incluso después de que finalice su acuerdo
                                            con nosotros y deje de usar Smirrow, que no tenemos que pagarle por el permiso y
                                            que podemos usar su contenido para realizar publicidad y marketing digital para
                                            Smirrow dentro y fuera de la plataforma Smirrow. Este permiso nos permitirá, por
                                            ejemplo, agregar pegatinas, texto y marcas de agua a su contenido, para poner su
                                            contenido a disposición de Smirrow, así como utilizar su contenido para otras
                                            operaciones normales de Smirrow. Nunca venderemos su contenido a otras
                                            plataformas, aunque podemos vender o transferir cualquier permiso que nos
                                            otorgue en los Términos y condiciones de uso en caso de una venta de nuestra
                                            empresa o sus activos a un tercero.
                                            <br> Si bien no somos propietarios de su contenido, usted nos otorga el derecho
                                            limitado de enviar notificaciones de infracción (incluidos los derechos de autor
                                            o marca registrada) en su nombre a cualquier sitio web o servicio de terceros
                                            que aloje o se ocupe de la infracción de copias de su contenido sin su permiso.
                                            Aunque no tenemos ninguna obligación de hacerlo, en cualquier momento podemos
                                            enviar o retirar dicha notificación a cualquier sitio web o servicio de terceros
                                            cuando lo consideremos apropiado. Sin embargo, no tenemos ni tenemos la
                                            obligación de vigilar las infracciones de su contenido. Usted acepta que, si lo
                                            solicitamos, nos proporcionará todos los consentimientos y otra información que
                                            razonablemente necesitemos para enviar notificaciones de infracción en su
                                            nombre.
                                            <br> Consulte nuestras políticas de quejas y reclamos para saber cómo presentar
                                            una queja sobre la infracción de los derechos de propiedad intelectual.
                                            <br> Usted renuncia a cualquier derecho moral que pueda tener bajo cualquier ley
                                            aplicable para oponerse al tratamiento despectivo de cualquier contenido
                                            publicado por usted en Smirrow. Esta renuncia no afecta de ninguna manera su
                                            propiedad de los derechos de propiedad intelectual sobre su contenido o los
                                            derechos que tiene para evitar que su contenido sea copiado sin su permiso. La
                                            renuncia está destinada a permitirnos, al tratar con su contenido para agregar
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
                                            Exclusión de garantías y responsabilidad
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
                                            será responsable, con los límites establecidos por la Ley, de los daños y
                                            perjuicios causados al usuario como consecuencia de la indisponibilidad, fallos
                                            de acceso y falta de continuidad de la plataforma digital y de sus servicios.
                                            <br>
                                            <br> b. Contenidos y Servicios de un perfil.
                                            <br>
                                            <br> Smirrow responderá única y exclusivamente de los servicios que preste por
                                            sí mismo y de los contenidos directamente originados por Smirrow e identificados
                                            con su copyright. Dicha responsabilidad quedará excluida en los casos en que
                                            concurran causas de fuerza mayor o en los supuestos en que la configuración de
                                            los equipos del Usuario no sea la adecuada para permitir el correcto uso de los
                                            servicios que brinda la plataforma digital de Smirrow.
                                            <br>
                                            <br> El Portal no se hace responsable de la posible aparición de portales
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
                                            cualquier clase de información de terceros recogidos en Smirrow. Asimismo, no
                                            garantiza la licitud, fiabilidad, utilidad, veracidad, exactitud, exhaustividad
                                            y actualidad de los contenidos, informaciones y servicios de terceros en
                                            Smirrow. Tampoco garantiza de ninguna forma que los usuarios de la plataforma
                                            utilicen los contenidos y/o servicios de este conforme con la ley, las
                                            normativas aplicables, el orden público ni los presentes términos y condiciones
                                            de uso.
                                            <br>
                                            <br> Smirrow no controla con carácter previo y no garantiza la ausencia de virus
                                            y otros elementos en los contenidos y servicios prestados por terceros a través
                                            del Portal que puedan introducir alteraciones en los equipos de acceso,
                                            documentos o ficheros guardados en ellos.
                                            <br>
                                            <br> Smirrow no se responsabiliza de los contenidos volcados o los actos
                                            cometidos por otros usuarios. Tampoco se responsabiliza de cualquier daño o
                                            perjuicio como consecuencia de la presencia de virus u otros elementos en los
                                            contenidos y servicios prestados por terceros. Asimismo, Smirrow no responderá
                                            de los daños y perjuicios de cualquier naturaleza derivados del uso negligente o
                                            malintencionado de las cuentas de correo electrónico utilizadas para crear un
                                            perfil o responder.
                                            <br>
                                            <br> En cualquier caso, Smirrow no será responsable, ni indirectamente ni
                                            subsidiariamente, de la pérdida económica o reputación, ni de ninguna clase de
                                            daños especiales, indirectos o emergentes, resultantes de la utilización de la
                                            plataforma digital por parte del usuario.
                                            <br>
                                            <br> La exoneración de responsabilidad señalada en el párrafo anterior será de
                                            aplicación en el caso de que Smirrow no tenga conocimiento efectivo de que la
                                            actividad o la información almacenada es ilícita o de que lesiona bienes o
                                            derechos de un tercero susceptibles de indemnización, o si la tuviesen actúe con
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

                                           <br>-  Smirrow cuenta con plataformas de pagos legales autorizadas, no se aceptan pagos por fuera de las plataformas. Smirrow cobra una tasa del 11% de comisión por uso de la plataforma a las personas ofertantes. Por obligatoriedad de impuestos de ley según el país donde reside la ofertante, Smirrow debe descontar estos impuestos al valor que cobra la ofertante, como impuesto de retención, IVA, cuota de servicios entre otros, según la normatividad aplicable. Al usuario adquisidor Smirrow cobra una tasa del 11%, por el uso de la plataforma, igualmente según la ley aplicable según el país donde se encuentra el usuario adquisidor se deberá descontar los impuestos obligatorios. El usuario acepta que el valor de los impuestos según la legislación, pueden ser modificados en cada país.
                                           <br>-  El porcentaje que cobra Smirrow es para mejorar la seguridad, cubrir costos operacionales para el desarrollo, cubrir almacenamiento del contenido y manutención de la tecnología necesaria para el buen funcionamiento de la plataforma digital.


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
                                            Políticas de Fraude, devoluciones y cumplimiento
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_14" class="collapse" aria-labelledby="heading1_14"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Smirrow se toma muy en serio cualquier uso fraudulento con tarjetas de
                                            crédito u operaciones bancarias realizadas por nuestros usuarios. Por ello, los
                                            usuarios responsables de este tipo de acciones serán bloqueados permanentemente
                                            de nuestro sitio y sus datos podrán ser comunicados a las autoridades
                                            pertinentes.
                                            <br> Recordamos que, según nuestras condiciones de servicio, podemos limitar o
                                            poner fin a nuestro servicio, eliminar los contenidos alojados en él y adoptar
                                            medidas técnicas y legales para mantener a los usuarios alejados de Smirrow si
                                            creemos que están creando problemas o actuando de mala fe o en contra de
                                            nuestras políticas, todo ello con independencia de cualquier pago realizado por
                                            el uso de Smirrow o servicios complementarios
                                            <br>
                                            <br> El usuario ofertante recibirá el dinero solo cuando el usuario adquisidor
                                            haya recibido completamente el servicio solicitado y marca dentro la plataforma
                                            la calificación del servicio sobre estrellas (para más información lea la
                                            preguntas frecuentes), así mismo el usuario adquisidor debe pagar la tarifa que
                                            encuentra dentro de la plataforma antes de que el servicio sea entregado, el
                                            dinero queda en la cuenta Wompi de Smirrow, ya sea para hacer reembolso al
                                            usuario adquisidor si no recibió el servicio o para depositarla al usuario
                                            ofertante después de completar el servicio.
                                            <br>
                                            <br> Si se presenta un caso fortuito o fuerza mayor al usuario ofertante y no
                                            puede cumplir el servicio, se le reprogramará una nueva fecha al usuario
                                            adquisidor, que seleccione otro usuario ofertante similar para esa misma fecha,
                                            o fecha posterior, si no acepta la anterior opción, se le hará la devolución
                                            completa de su dinero. Si el usuario ofertante no presenta excusa legal, médica,
                                            una válida que sustente con veracidad su incumplimiento, al correo
                                            legal@smirrow.com, podrá acarrear sanciones de suspensión de su cuenta hasta por
                                            un (1) mes o de forma definitiva si incumple más de tres (3) veces un servicio
                                            sin presentar excusa o prueba. El usuario ofertante tendrá un término de ocho
                                            (8) para presentar pruebas, contados a partir del día siguiente de la fecha del
                                            servicio incumplido. La excusa o pruebas presentadas por parte del usuario
                                            ofertante se estudiarán dentro de un término de ocho (8) a quince (15) días
                                            contados a partir del día de su radicación.
                                            <br>
                                            <br> Si se le presenta un caso fortuito o de fuerza mayor al usuario adquisidor
                                            y no puede cumplir para recibir el servicio, este deberá presentar excusa legal,
                                            médica o pruebas contundentes de su caso. El usuario adquisidor podrá presentar
                                            excusa o pruebas al correo legal@smirrow.com dentro de un término de ocho (8)
                                            días calendario contados a partir del día siguiente de la fecha del servicio no
                                            recibido. La excusa o pruebas presentadas por parte del usuario adquisidor se
                                            estudiarán dentro de un término de ocho (8) días a quince (15) días contados a
                                            partir del día de su radicación. Si el usuario adquisidor no presenta excusa o
                                            pruebas no se le hará reembolso de su dinero, si presenta excusas y pruebas que
                                            justifican su incumplimiento por no recibir el servicio solicitado, se le
                                            descontará en su reembolso un 30% por el servicio que, si cumplió el usuario
                                            ofertante y solo se le regresará un 70% del pago realizado, 10% que serán
                                            pagados al usuario adquisidor del servicio y el otro 20% que serán pagados a
                                            Smirrow por gastos de servicios jurídicos y de investigación causados y
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
                                            Modificaciones de Smirrow y suspensión
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_15" class="collapse" aria-labelledby="heading1_15"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                            <br> Smirrow, se reserva el derecho para que en cualquier momento efectuar las
                                            modificaciones que estime conveniente en Smirrow, organizando, suprimiendo o
                                            añadiendo contenidos, datos o servicios. Las citadas modificaciones se llevarán
                                            a cabo de forma unilateral y sin previo aviso. En relación con las condiciones
                                            generales y particulares, Smirrow se reserva el derecho de modificarlas,
                                            alterarlas y/o redactar nuevas cláusulas en función de las nuevas actividades o
                                            servicios a las que vaya ampliando o para adaptarse a nuevas normativas y
                                            legislaciones que vayan surgiendo. Dichas modificaciones, solo serán
                                            obligatorias a partir de su entrada en vigor y serán de aplicación para el
                                            usuario en el mismo instante en que se acceda a la plataforma.
                                            <br>
                                            <br> a. Suspensión del servicio.
                                            <br>
                                            <br> Smirrow se reserva el derecho de suspender de forma unilateral y sin
                                            preaviso el servicio, o, denegar el acceso a la plataforma, de forma temporal o
                                            indefinida, a todo aquel usuario que incumpla los presentes términos y
                                            condiciones de uso, o lleve a cabo actos ilegales, ilícitos y contrarios a la
                                            ley, al orden público y a las buenas costumbres.

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
                                            Duración, terminación y resolución.
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_16" class="collapse" aria-labelledby="heading1_16"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> La prestación de los servicios del portal y su funcionamiento tiene, en
                                            principio, un carácter indefinido. No obstante, Smirrow podrá suspender
                                            temporalmente el servicio o darlo por finalizado de forma definitiva, en
                                            cualquier momento o instante, mediando causa justificada. En estos casos,
                                            Smirrow se compromete mediante avisos a informar a los usuarios de la suspensión
                                            o interrupción temporal o definitiva.
                                            <br>
                                            <br> En el caso de resolución unilateral del servicio o de la baja forzada del
                                            portal, Smirrow le informará previamente de las causas de su resolución. En
                                            estos casos, Smirrow se compromete a guardar la información almacenada en su
                                            servidor durante el periodo de diez días naturales, transcurrido los cuales,
                                            procederá al bloqueo de los mismos en la forma prevista en la normativa vigente
                                            en materia de protección de datos de carácter personal, sin que por este hecho
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
                                            Ley de protección de datos colombiana.
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_17" class="collapse" aria-labelledby="heading1_17"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Asimismo, para acceder a algunos de los servicios que la plataforma digital
                                            ofrece a través de la web site deberá proporcionar algunos datos de carácter
                                            personal. En cumplimiento de lo establecido a la Ley, relativo a la protección
                                            de las personas físicas en lo que respecta al tratamiento de datos personales y
                                            a la libre circulación de estos datos le informamos que, mediante la
                                            cumplimentación de la información de los perfiles creados, sus datos personales
                                            quedarán incorporados y serán tratados en los ficheros de Smirrow. Con el fin de
                                            poderle prestar y ofrecer nuestros servicios, así como para informarle de las
                                            mejoras de la plataforma digital. Asimismo, le informamos de la posibilidad de
                                            que ejerza los derechos de acceso, rectificación, cancelación y oposición de sus
                                            datos de carácter personal, manera gratuita mediante email a o correo postal, en
                                            los datos del punto expuestos.
                                            <br> Ingrese a la opción política de seguridad, manejo y prevención del uso de
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
                                            Términos relacionados con disputas
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_18" class="collapse" aria-labelledby="heading1_18"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Dónde deben presentarse reclamaciones:
                                            <br>
                                            <br> a. Para usuarios adquisidores:
                                            <br>
                                            <br> Si usted es un usuario adquisidor de servicios residente en Colombia,
                                            cualquier reclamo que surja de o en conexión con su acuerdo con nosotros (ya sea
                                            por usted contra nosotros o nosotros contra usted, incluyendo disputas o
                                            reclamos no contractuales) puede ser llevado a los juzgados, tribunales o Cortes
                                            de Colombia o los tribunales del país donde vive, solo si es un caso
                                            excepcional.
                                            <br> Si usted es un usuario adquisidor de servicios que reside fuera de
                                            Colombia, cualquier reclamo que surja de o en conexión con su acuerdo con
                                            nosotros (ya sea por usted contra nosotros o nosotros contra usted, e incluyendo
                                            disputas o reclamos no contractuales) debe ser llevado a los juzgados,
                                            tribunales o Cortes de Colombia, solo en caso excepcional que la ley avala,
                                            podrá hacerlo en el país donde reside.
                                            <br>
                                            <br> b. Usuarios ofertantes - Derecho:
                                            <br>
                                            <br> Si usted es un usuario ofertante, su acuerdo con nosotros y cualquier
                                            disputa o reclamación (incluidas disputas o reclamaciones no contractuales) que
                                            surjan de o en conexión con él o su objeto o formación se regirán por la ley
                                            colombiana, sin tener en cuenta disposiciones sobre conflicto de leyes.
                                            <br>
                                            <br> c. Usuarios ofertantes: ¿dónde deben presentarse reclamaciones?:
                                            <br>
                                            <br> Si es un usuario ofertante, usted y nosotros acordamos que los juzgados,
                                            tribunales y Cortes de Colombia tendrán jurisdicción exclusiva para resolver
                                            cualquier disputa o reclamación (incluidas disputas o reclamaciones no
                                            contractuales) que tenga contra nosotros o que tengamos contra usted que surja
                                            de o en relación con su acuerdo con nosotros o su objeto o formación.
                                            <br> Período de limitación para presentar reclamos: Excepto donde lo prohíba la
                                            ley aplicable, cualquier reclamo o causa de acción que tenga con respecto a
                                            Smirrow (incluidos los que surjan de o estén relacionados con su acuerdo con
                                            nosotros) debe presentarse dentro de seis (6) meses después de la fecha en que
                                            tal surgió el reclamo o la causa de la acción o la fecha en la que se enteró de
                                            los hechos que dieron lugar a la causa de la acción (lo que ocurra primero), o
                                            será excluido para siempre.

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
                                            Otros términos que forman parte de su acuerdo con nosotros
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_19" class="collapse" aria-labelledby="heading1_19"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            <br> Estos términos de uso para todos los usuarios rigen su acuerdo con
                                            nosotros.

                                            <br> Otros términos o políticas que forman parte de los términos y condiciones
                                            de uso de servicio también se aplicarán a usted y forman parte de su acuerdo con
                                            nosotros, de la siguiente manera:

                                            <br> - Términos de uso para usuarios adquisidores, que contienen términos
                                            adicionales que se aplican si usa Smirrow como usuario adquisidor.
                                            <br> - Términos de uso para usuarios ofertantes, que contienen términos
                                            adicionales que se aplican si utiliza Smirrow como usuario ofertante.
                                            <br> - Políticas de manejo, seguridad y privacidad de datos personales, que se
                                            aplica a todos los usuarios y le informa cómo usamos sus datos personales y otra
                                            información que recopilamos sobre usted.
                                            <br> - Políticas de buena fe que se aplican a todos los usuarios y le indica lo
                                            que puede y no puede hacer en Smirrow.
                                            <br> - Políticas de quejas y reclamos: establece el procedimiento para presentar
                                            una queja sobre cualquier aspecto de Smirrow y cómo trataremos esa queja y
                                            reclamo.

                                            <br> Si existe algún conflicto entre estos términos y condiciones de uso para
                                            todos los usuarios y cualquiera de los términos o políticas nombrados
                                            anteriormente, los términos y condiciones de uso prevalecerán para todos los
                                            usuarios y se aplicarán en la medida del conflicto.

                                            <br> Todos los usuarios sin excepción alguna al aceptar los presentes términos y
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
                                                Legislación y fuero:
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapse1_20" class="collapse" aria-labelledby="heading1_20"
                                        data-parent="#accordion_general">
                                        <div class="card-body pl-4">
                                            <p>
                                              <br>  Todas las cuestiones relativas a Smirrow se rigen en todos y cada uno de sus extremos por las Leyes colombianas y se someten a la jurisdicción de los Juzgados y Tribunales competentes del territorio colombiano.
 
                                              <br>  Las partes, con expresa renuncia a su propio fuero, aceptan como legislación rectora de los presentes términos y condiciones de uso en caso de controversia acerca de la interpretación o ejecución de las presentes cláusulas, la legislación colombiana, y se someten para la resolución de cuantos litigios pudieran derivarse del mismo a los Juzgados y Tribunales de Colombia. 
                                               
                                            </p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="acordion_two d-none">


                            <h3>Términos y condiciones de uso para adquisidores</h3>
                            <h5>Al utilizar nuestra plataforma usted acepta estos términos y condiciones de uso para
                                adquisidores</h5>
                            <div class="card ">
                                <div class="card-header" id="heading2_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse2_2" aria-expanded="false"
                                            aria-controls="collapse2_2">
                                            Introducción
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_2" class="collapse" aria-labelledby="heading2_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        <p>
                                            Estos Términos y condiciones de uso para adquisidores son términos adicionales que se aplican si utiliza Smirrow como adquisidor (también denominados "usted" y "su" en estos Términos de uso para adquisidores). Estos términos y condiciones de uso para adquisidores forman parte de su acuerdo con nosotros.
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
                                            Interpretación
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_3" class="collapse" aria-labelledby="heading2_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        <p>
                                        <br>   En estos términos y condiciones de uso para adquisidores, los términos definidos tienen el mismo significado que se les da en los términos y condiciones de uso para todos los usuarios. Además:

                                        <br>   -	"Registrarse" significa registrarse en la plataforma en este caso en la opción de busco acompañante, lo que lo convierte en un usuario adquisidor dentro la plataforma de Smirrow.
                                        <br>   -	"IVA" hace referencia al impuesto sobre el valor añadido de Colombia y cualquier otro impuesto que se le agregue o lo sustituya a la tasa que se imponga periódicamente y cualquier impuesto, cargo o impuesto indirecto gubernamental, estatal, federal, provincial o municipal equivalente o similar, deber, imposición o gravamen en cualquier otra jurisdicción.
                                        <br>   -	"Impuesto" incluirá todas las formas de impuestos y cargos, aranceles, contribuciones, gravámenes, retenciones o pasivos estatutarios, gubernamentales, estatales, provinciales, locales o municipales, dondequiera que sean imputables y ya sea de Colombia o de cualquier otra jurisdicción.


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
                                            Otros términos que se aplicarán al uso de Smirrow:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_4" class="collapse" aria-labelledby="heading2_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <h4>Los siguientes términos también se aplicarán a su uso de Smirrow y usted los
                                            acepta:</h4>
                                        <p>
                                       <br>    Los siguientes términos también se aplicarán a su uso de Smirrow y usted los acepta:

                                       <br>    -	Nuestros términos y condiciones de uso para todos los usuarios.
                                       <br>    -	Nuestras políticas de seguridad, manejo y privacidad de datos personales. 
                                       <br>    -	Nuestras políticas de uso aceptable, que le indica lo que puede y no puede hacer en Smirrow.
                                       <br>    -	Nuestras políticas de quejas y reclamos, que establece el procedimiento para presentar una queja y reclamo sobre cualquier aspecto de Smirrow y cómo trataremos esa queja.
                                       <br>    -	Guía de preguntas frecuentes.



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
                                            Otros términos que pueden aplicarse a su uso de Smirrow:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_9" class="collapse" aria-labelledby="heading2_9"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                        Los siguientes términos adicionales pueden aplicarse a su uso de Smirrow: <br>
 <br>
-	Si también es un usuario ofertante, los términos de uso para ofertantes se aplicarán a su uso de Smirrow como usuario ofertante. <br>

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
                                      <br>  -	Tienes al menos 18 años.
                                      <br>  -	Si las leyes del país o estado / provincia donde vive estipulan que solo puede estar legalmente registrado a una plataforma como Smirrow a una edad que sea superior a 18 años, entonces tiene la edad suficiente para estar legalmente registrado por bajo las leyes del país o estado / provincia donde vive.
                                      <br>  -	No se le prohíbe el acceso a Smirrow según las leyes que se apliquen a usted.
                                        
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
                                            Contenido, términos generales:
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse2_6" class="collapse" aria-labelledby="heading2_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">

                                      <p>
                                     <br>  Además de los términos establecidos en otras partes de los términos y condiciones de uso (en particular en nuestra política de uso aceptable), los siguientes términos se aplican al contenido publicado, mostrado, cargado o publicado por usted como usuario adquisidor en Smirrow:

                                     <br>  a.	Usted garantiza (lo que significa que nos hace una promesa legalmente exigible) que por cada elemento de contenido que publique, muestre, cargue o publique en Smirrow:
                                     <br>  
                                     <br>  -	El Contenido cumple en su totalidad con los términos y condiciones de uso (y en particular nuestra política de uso aceptable).
                                     <br>  -	Usted es propietario de su contenido (y de todos los derechos de propiedad intelectual) o tiene una licencia válida para su contenido.
                                     <br>  -	Si su contenido incluye o utiliza cualquier material de terceros, ha obtenido todos los derechos, licencias, consentimientos por escrito y liberaciones que son necesarios para el uso de dicha propiedad de terceros en su contenido y para el uso y explotación posteriores de ese contenido en Smirrow.
                                     <br>  
                                     <br>  b.	Usted acepta que será responsable ante nosotros y nos indemnizará si falta a algunos de los puntos establecidos en estos términos y condiciones de uso para adquisidores. Esto significa que usted será responsable de cualquier pérdida o daño que suframos como resultado de que incumpla estos términos y condiciones de uso para adquisidores.
                                     <br>  
                                     <br>  c.	No somos responsables, ni respaldamos ningún aspecto de ningún contenido y datos publicados por usted o cualquier otro usuario de Smirrow. No tenemos ninguna obligación de monitorear ningún contenido y no tenemos control directo sobre lo que puede comprender su contenido y sus datos personales.
                                        
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
                                            Usted reconoce que sabe que parte del contenido de Smirrow contiene material para adultos y acepta tener esto en cuenta al decidir dónde acceder y ver el contenido. No seremos responsables ante usted si sufre alguna pérdida o daño como resultado de su acceso o visualización de contenido que contenga material para adultos de una manera que lo coloque en incumplimiento de cualquier contrato que tenga con un tercero (por ejemplo, su contrato de trabajo) o en contravención de cualquier ley aplicable.
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
<br>                                         Esta sección describe los términos que se aplican a las transacciones e interacciones entre adquisidor y ofertante:<br> 

<br> a.	Todas las transacciones e interacciones facilitadas por Smirrow son convenciones entre adquisidores y ofertantes. Aunque facilitamos transacciones e interacciones entre adquisidores y ofertantes proporcionando la plataforma Smirrow, almacenando datos, contenido y actuando como intermediario de pago, no somos parte de la convención entre el adquisidor y el ofertante o cualquier otro convenio que pueda existir entre un adquisidor y ofertante, y no somos responsables de ninguna transacción o interacción personal entre adquisidores y ofertantes.<br> 

<br> b.	Los ofertantes son los únicos responsables de determinar (dentro de los parámetros de precios de Smirrow) los precios aplicables a las transacciones e interacciones y el contenido al que se le puede dar acceso al adquisidor. Todos los precios aparecen en pesos colombianos únicamente, por ahora. <br> 

<br> c.	Los pagos de los adquisidores no incluirán el IVA, que se agregará a la tasa actual según corresponda a los pagos del adquisidor y según el país donde reside.<br> 

<br> d.	Para ver el contenido de un ofertante puede ingresar a sus álbumes y perfil estando registrado como adquisidor y para utilizar la función de interacción con los ofertantes en Smirrow, primero debe solicitar un servicio, realizar el pago a través de Wompi, posterior a esto se activara el chat y mensajería dentro de la plataforma para que haya interactividad entre el adquisidor y la ofertante. <br> 

<br> e.	Usted nos autoriza a proporcionar los detalles de su tarjeta de pago a un proveedor de pago externo con el fin de procesar su pago de adquisidor. Todos los pagos de adquisidores se cobrarán en pesos colombianos y dólares. El proveedor de su tarjeta de pago puede cobrarle tarifas de conversión de moneda. No tenemos control sobre los tipos de cambio de divisas o los cargos impuestos por el proveedor de su tarjeta de pago o el banco y no somos responsables de pagar los cargos o tarifas impuestos por el proveedor de su tarjeta de pago o el banco.<br> 

<br> f.	Si elige proporcionar detalles de dos o más tarjetas de pago, si intenta realizar un pago de adquisidor desde la primera tarjeta y la tarjeta es rechazada por cualquier motivo, la otra tarjeta de pago se utilizará para cobrar el pago de adquisidor completo.<br> 

<br> g.	El proveedor de pagos no tomará pagos mensuales de su tarjeta de pago para los pagos de adquisiciones de servicios, cada vez que adquiera un servicio, deberá realizar el pago nuevamente. <br> 

<br> h.	Smirrow solo autoriza pagos por medio de su proveedor Wompi, cualquier transacción que haga por fuera es solamente responsabilidad del adquisidor. <br> 

<br> i.	Usted acepta que no realizará solicitudes injustificadas de reembolso de ningún tipo a una ofertante, ni solicitudes de devolución de cargo injustificadas de su proveedor de tarjeta de pago en relación con cualquier transacción entre usted y un ofertante. Si consideramos que usted realizó una solicitud de reembolso o devolución de cargo de mala fe, tenemos derecho a suspender o eliminar su cuenta de adquisidor.<br> 

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

                            <h3>Términos y condiciones de uso para ofertantes</h3>

                            <h5>
                                Al utilizar nuestra plataforma como ofertante, usted acepta estos términos y condiciones de
                                uso.
                            </h5>

                            <div class="card ">
                                <div class="card-header" id="heading3_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-left" type="button"
                                            data-toggle="collapse" data-target="#collapse3_1" aria-expanded="false"
                                            aria-controls="collapse3_1">
                                            Introducción
                                    </h2>
                                </div>
                                <div id="collapse3_1" class="collapse" aria-labelledby="heading3_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Estos términos y condiciones de uso para ofertantes son términos adicionales que se aplican si utiliza Smirrow como ofertante (también denominado "usted" y "su" en estos términos de uso para ofertantes). Estos términos y condiciones de uso para ofertantes forman parte de su acuerdo con nosotros

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
                                            Interpretación
                                    </h2>
                                </div>
                                <div id="collapse3_2" class="collapse" aria-labelledby="heading3_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                          <br> En estos términos y condiciones de uso para ofertantes, los términos definidos tienen el mismo significado que se les da en los términos y condiciones de uso para todos los usuarios. Además:

                                          <br> -	"IVA" hace referencia al impuesto sobre el valor añadido de Colombia y cualquier otro impuesto que se le agregue o lo sustituya a la tasa que se imponga periódicamente y cualquier impuesto, cargo o impuesto indirecto gubernamental, estatal, federales, provincial o municipal equivalente o similar, deber, imposición o gravamen en cualquier otra jurisdicción.
                                          <br> -	"Impuesto" incluirá todas las formas de impuestos y cargos, aranceles, impuestos, contribuciones, gravámenes, retenciones o pasivos estatutarios, gubernamentales, estatales, federales, provinciales, locales o municipales, dondequiera que sean imputables y ya sea de Colombia o de cualquier otra jurisdicción.
                                            

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
                                            Otros términos que se aplicarán a su uso de Smirrow:
                                    </h2>
                                </div>
                                <div id="collapse3_3" class="collapse" aria-labelledby="heading3_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                        <br>    Los siguientes términos también se aplicarán a su uso de Smirrow y usted los acepta:
<br>
                                        <br>    -	Nuestras condiciones de uso para todos los usuarios.
                                        <br>    -	Nuestras políticas de seguridad, manejo y privacidad de datos personales, que le indica cómo usamos sus datos personales y otra información que recopilamos sobre usted.
                                        <br>    -	Nuestras políticas de uso aceptable, que le indica lo que puede y no puede hacer en Smirrow.
                                        <br>    -	Nuestras políticas de quejas y reclamos, que establece el procedimiento para presentar una queja sobre cualquier aspecto de Smirrow y cómo trataremos esa queja y reclamo.


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
                                            Otros términos que pueden aplicarse a su uso de Smirrow
                                    </h2>
                                </div>
                                <div id="collapse3_4" class="collapse" aria-labelledby="heading3_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                          <br>  Los siguientes términos adicionales pueden aplicarse a su uso de Smirrow:
<br>
                                          <br>  Si también es un adquisidor, los términos y condiciones de uso para adquisidores también se aplicarán a su uso de Smirrow como adquisidor.
                                            
                                            



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
                                            ¿Cuáles son las tarifas que cobramos a las ofertantes por el uso de Smirrow?
                                    </h2>
                                </div>
                                <div id="collapse3_5" class="collapse" aria-labelledby="heading3_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>

                                         <br>  Smirrow cuenta con plataformas de pagos legales autorizadas, no se aceptan pagos por fuera de las plataformas. Smirrow cobra una tasa del 11% de comisión por uso de la plataforma a las personas ofertantes. Por obligatoriedad de impuestos de ley según el país donde reside la ofertante, Smirrow debe descontar estos impuestos al valor que cobra la ofertante, como impuesto de retención, IVA, cuota de servicios entre otros, según la normatividad aplicable. Al usuario adquisidor Smirrow cobra una tasa del 11%, por el uso de la plataforma, igualmente según la ley aplicable según el país donde se encuentra el usuario adquisidor se deberá descontar los impuestos obligatorios. El usuario acepta que el valor de los impuestos según la legislación, pueden ser modificados en cada país.
                                         <br>  El porcentaje que cobra Smirrow es para mejorar la seguridad, cubrir costos operacionales para el desarrollo, cubrir almacenamiento del contenido y manutención de la tecnología necesaria para el buen funcionamiento de la plataforma digital.

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
                                            Cómo configurar su cuenta como una cuenta de ofertante
                                    </h2>
                                </div>
                                <div id="collapse3_6" class="collapse" aria-labelledby="heading3_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                        <br>    Para configurar su cuenta como una cuenta de ofertante:
<br>
                                        <br>    -	Necesitará para que su cuenta de ofertante quede verificada deberá subir una foto selfie actualizada en la opción “verificación” de acuerdo con los requisitos establecidos en la plataforma.
                                        <br>    -	Necesitará en su cuenta de adquisidor, en la opción “Cuentas Bancarias”, agregar los datos de su propia cuenta bancaria, como nombre del titular de la cuenta bancaria, número de la cuenta bancaría, nombre del banco o entidad corporativa a donde pertenece el número de cuenta, identificación del titular de la cuenta bancaria. 
                                        <br>    -	Smirrow no es responsable del registro de cuentas bancarias de terceros.
                                        <br>    -	Solo puede solicitar dos (2) transacciones por mes, si solicita una tercera transacción dentro del mismo mes, se le realizarán descuentos y deducciones por manejo de su cuenta. 
                                        <br>    -	También es posible que deba enviar información adicional según el país en el que viva.
                                        <br>    -	Es posible que le pidamos información adicional de verificación de edad o identidad en cualquier momento. 
                                        <br>    -	Podemos rechazar su solicitud para configurar una cuenta de ofertante por cualquier motivo, incluidos los motivos indicados aquí.
                                        <br>    -	Usted puede agregar todos los servicios y servicios especiales que quiera y agregar el valor que crea conveniente, si no sabe cuánto cobrar, diríjase a “preguntas frecuentes”, al subtítulo “ganancias y pagos”, a la opción ¿Cuánto puedo cobrar por los servicios y servicios especiales?, ahí tendrá un ejemplo del promedio que puede cobrar. 
                                        <br>    -	Smirrow no tendrá responsabilidad alguna por los acuerdos y pagos por fuera de la plataforma. 
                                        <br>    -	Puede agregar todo el contenido que desee, crear todos los álbumes y videos que desee crear.
                                        <br>    -	Smirrow siendo un sitio exclusivo, elegante, categórico y de clase, no acepta contenido con desnudos explícitos dentro de la plataforma, por lo anterior, Smirrow espera la mejor versión de su contenido con sensualidad, erotismo, lujurioso y nada vulgar.  
                                        <br>    -	Si pierde el acceso a su cuenta, puede restablecer su contraseña, pero necesitará saber la dirección de correo electrónico con el que creo la cuenta. 
                                        <br>    -	Si no recuerda la dirección de correo electrónico utilizada para configurar la cuenta, es posible que le solicitemos que proporcione documentos de identificación y fotos, y cualquier prueba adicional que podamos requerir razonablemente para probar su identidad.
                                            


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

                                            Smirrow no acepta agencias en donde las ofertantes estén usando la plataforma de Smirrow en contra de su voluntad, por lo anterior puede dirigirse a “Declaración” sobre esclavitud moderna y trata de personas. Si usted es un ofertante y no es propietario de su propia cuenta y debe tener acceso a su cuenta en todo momento, si tiene un agente o agencia que lo asiste con el funcionamiento de su cuenta de ofertante (o la ópera en su nombre), esto no afecta su responsabilidad legal personal. Nuestra relación es con usted, y no con su agente o agencia, y usted será legalmente responsable de garantizar que todo el contenido publicado y todo el uso de su cuenta cumpla con los términos y condiciones de uso.
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
                                     <br>  -	Por lo general, los fondos tardan entre 3 días y 5 días hábiles en aparecer en su cuenta bancaria, en casos excepcionales tardar hasta 10 días hábiles. 

                                     <br>  -	Si ha pasado más de 10 días desde que su pago se registró como procesado, envíenos un correo electrónico a pagos@smirrow.com – incluya una captura de pantalla de la opción de solicitud de pago, su número ID, y los datos del titular de la cuenta bancaria, número de cuenta y banco. 
                                     <br>  
                                     <br>  -	También debe anexar certificación bancaria donde demuestre que no ha recibido su pago. 
                                     <br>  
                                     <br>  -	Todos los pagos de adquisidores serán recibidos por un proveedor de pagos externo aprobado por nosotros.
                                     <br>  
                                     <br>  -	Actualmente tenemos un proveedor de plataforma de pago que es Wompi.
                                     <br>  
                                     <br>  -	Smirrow realizará los pagos exclusivamente a su cuenta bancaria registrada dentro de la plataforma, Smirrow no hará pagos a cuentas bancarias que no se encuentren registradas dentro la plataforma.
                                     <br>  
                                     <br>  -	Smirrow no realiza pagos en efectivo a ofertantes, ni acepta pagos en efectivo de adquisidores a ofertantes, cualquier pago en efectivo realizado por fuera de los proveedores de pagos autorizados por Smirrow, por lo anterior Smirrow no es responsable de los pagos en que se realicen por fuera de las plataformas de proveedores autorizados. 
                                     <br>  
                                     <br>  -	Como ofertante usted tendrá un casillero virtual en donde se reflejará sus ganancias y dinero acumulado.
                                     <br>  
                                     <br>  -	Deduciremos nuestras tarifas, tasas e impuestos del pago realizado del adquisidor y la ofertante.
                                     <br>  
                                     <br>  -	Su cuenta de Smirrow se actualizará constantemente dentro de un tiempo razonable con sus ganancias de ofertante. Sus ganancias de ofertante estarán disponibles para que las retire de su cuenta y casillero virtual de Smirrow una vez que dichas ganancias de ofertante aparezcan en su cuenta y casillero de Smirrow.
                                     <br>  
                                     <br>  -	Para realizar un retiro de las ganancias del creador de su cuenta Smirrow, debes tener al menos el monto mínimo de pago en su cuenta Smirrow que es un valor de "treinta mil pesos colombianos" ($30.000) o Diez dólares norte americanos (US 10). 
                                     <br>  
                                     <br>  -	Haga clic en la página “Mi Dinero” de su cuenta en Smirrow para ver cuál es el monto que tiene guardado o acumulado en su casillero virtual y la opción de pago. 
                                     <br>  
                                     <br>  -	La cantidad que ves en tu "saldo actual" en tu cuenta de Smirrow son tus ganancias de ofertante en el momento relevante. 
                                     <br>  
                                     <br>  -	Todos los pagos de los adquisidores se realizan $ pesos colombianos y USD y las ganancias de las ofertantes se realizan únicamente en $ pesos colombianos o la moneda o divisa local, según el país donde reside. 
                                     <br>  
                                     <br>  -	Su banco puede cobrarle tarifas de conversión o transferencia de moneda para recibir el dinero. Además, su compañía de billetera electrónica puede cobrarle una tarifa por acceder al dinero. 
                                     <br>  
                                     <br>  -	No tenemos control sobre los tipos de cambio de divisas o los cargos impuestos por su banco o su compañía de billetera electrónica, y no somos responsables de pagar ningún cargo impuesto por su banco o su compañía de billetera electrónica. 
                                     <br>  
                                     <br>  -	A excepción de las opciones de pago que implican el pago mediante transferencia bancaria directa de nuestra parte, no almacenamos ningún dato revelado por usted cuando registran sus opciones de pago con un proveedor de pago externo.
                                        
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
                                     <br>   Esta sección describe los términos que se aplican a las transacciones e interacciones entre adquisidores y ofertantes:
                                     <br>   -	Todas las transacciones e interacciones facilitadas por Smirrow son convenios entre adquisidores y ofertantes. Aunque facilitamos transacciones e interacciones entre adquisidores y ofertantes proporcionando la plataforma Smirrow, almacenando contenido, brindando seguridad básica y actuando como intermediario de pago, no somos parte del convenio entre adquisidor y ofertante o cualquier otro convenio que pueda existir entre un adquisidor y ofertante, y no somos responsables de ninguna transacción o interacción entre adquisidor y ofertante.
                                     <br>   -	Los pagos de adquisidores no incluyen el IVA, que se agregará a la tasa actual según el país en donde resida el adquisidor.
                                     <br>   -	Cuando un adquisidor ha realizado el pago requerido para acceder a un servicio, para el uso de la función de interacción con el adquisidor se activará un chat y mensajería en su cuenta. Usted acepta que Smirrow no tiene responsabilidad alguna por interacciones por fuera del chat y mensajería. Lo que significa que solo usted será responsable de cualquier interacción por fuera de la plataforma.
                                        
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
                                            Contenido, términos generales
                                    </h2>
                                </div>
                                <div id="collapse3_10" class="collapse" aria-labelledby="heading3_10"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                     <p>
                                   <br>  Además de los términos establecidos en otras partes de los términos y condiciones de uso (en particular en nuestras políticas de uso aceptable), los siguientes términos se aplican al contenido publicado, mostrado, cargado o publicado por usted como ofertante en Smirrow: 

                                   <br>  a.	Su contenido no es confidencial y usted autoriza a sus adquisidores a acceder y ver su contenido en Smirrow para poder adquirir servicios, por lo anterior Smirrow no es responsable del uso de mala fe, descargar, copias el contenido de la ofertante.
                                   <br>  b.	Usted garantiza (lo que significa que nos hace una promesa legalmente exigible) que por cada elemento de contenido que publique, muestre, cargue o publique en Smirrow: 
                                   <br>  -	El contenido cumple en su totalidad con los términos y condiciones de servicios para todos los usuarios (y en particular nuestras políticas de uso aceptable). 
                                   <br>  -	Usted es propietario de su contenido (y de todos los derechos de propiedad intelectual) o tiene una licencia válida para ofrecer y suministrar su contenido a sus adquisidores con la finalidad que sus adquisidores soliciten sus servicios. 
                                   <br>  -	Si su contenido incluye o utiliza cualquier material de terceros, acepta que ha obtenido todos los derechos, licencias, consentimientos por escrito y liberaciones que son necesarios para el uso de dicha propiedad de terceros en su contenido y para el uso y explotación posteriores de ese contenido en Smirrow. 
                                   <br>  -	El contenido es: (i) De calidad satisfactoria, teniendo en cuenta cualquier descripción del contenido y todas las demás circunstancias relevantes, incluida cualquier declaración o representación que realice sobre la naturaleza del contenido en su cuenta o en cualquier publicidad; (ii) razonablemente adecuado para cualquier propósito que sea para ofertar sus servicios al adquisidor; (iii) según lo descrito por usted. 
                                   <br>  c.	Usted acepta que será responsable ante nosotros y nos indemnizará si alguna de los puntos del numeral diez (10) no lo cumple. Esto significa que usted será responsable de cualquier pérdida o daño (incluida la pérdida de beneficios) que suframos como resultado de que alguna de las garantías no la cumpla. 
                                   <br>  d.	No somos responsables ni respaldamos ningún aspecto de ningún contenido publicado por usted o cualquier otro usuario de Smirrow. No tenemos ninguna obligación de monitorear ningún contenido y no tenemos control directo sobre lo que puede comprender su contenido. 
                                   <br>  e.	También acepta actuar como custodio de los registros del contenido que carga en Smirrow. 
                                        
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
                                            Contenido en coautoría
                                    </h2>
                                </div>
                                <div id="collapse3_11" class="collapse" aria-labelledby="heading3_11"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                        <br>    a.	Si carga contenido en su cuenta de ofertante que muestra a alguien más que usted o además de usted (incluso si esa persona no puede ser identificada en el contenido) ("contenido en coautoría"), garantiza (lo que significa que hace una promesa) que cada individuo mostrado en cualquier contenido en coautoría subido a su cuenta:
<br>
                                        <br>    -	Es un ofertante de Smirrow.
                                        <br>    -	Ha dado su consentimiento expreso, previo y plenamente informado para su aparición en el contenido en coautoría.
                                        <br>    -	Ha dado su consentimiento para que el contenido en coautoría en el que aparece se publique en Smirrow.
<br>
                                        <br>    b.	Además de las confirmaciones del número once (11) (a) anterior, usted acepta que si carga contenido en coautoría donde la otra persona o personas que aparecen en el contenido pueden identificarse desde el contenido, etiquetará las cuentas de Smirrow de cualquier persona o personas que aparezcan en el contenido en coautoría que pueda identificarse a partir de él.
                                        <br>    c.	No debe cargar ningún contenido que contenga ninguna imagen, foto, video o audio de otra persona que no sea o que se le agregue a usted, a menos que dicha persona también sea un ofertante en Smirrow.
                                        <br>    d.	Si algún contenido en coautoría es un trabajo de autoría conjunta, usted es el único responsable de obtener las licencias o consentimientos necesarios de cualquier otro autor conjunto del contenido que sea suficiente para permitir que dicho contenido se cargue y esté disponible en Smirrow.
<br>
                                        <br>    e.	Usted acepta que solo pagaremos las ganancias del ofertante a la cuenta del ofertante en la que se cargó el servicio en coautoría. El ofertante que cargó el contenido en coautoría es el único responsable de dividir y distribuir los ingresos generados por los servicios en coautoría entre los ofertantes que se muestran en dicho contenido en coautoría. Cualquier acuerdo de reparto de ingresos de este tipo será un acuerdo privado e independiente entre los ofertantes, y no somos responsables de proporcionar o hacer cumplir dichos acuerdos. Usted comprende y acepta que no tiene derecho a las ganancias del ofertante obtenidas por los servicios en coautoría en el que aparece, pero que está publicado en la cuenta de otro ofertante. Si publica contenido en coautoría en su cuenta, es posible que le solicitemos que proporcione información legal válida y completa para todas las personas que aparecen en el contenido en coautoría. Si no proporciona la información solicitada por nosotros a nuestra solicitud, podemos eliminar el contenido en coautoría, restringir sus derechos y permisos para publicar como ofertante, cancelar su cuenta y / o retener la totalidad o una parte de las ganancias del ofertante obtenidas que aún no se han depositado a la cuenta bancaria del ofertante.
<br>
                                        <br>    f.	Usted acepta liberarnos y no hacer ningún reclamo contra nosotros que surja del contenido y servicios en coautoría. Usted acepta que todas las reclamaciones que surjan del contenido y servicios en coautoría se harán contra el ofertante (es) que publicó el contenido y servicios en coautoría o aparecieron en el servicio y contenido en coautoría (según corresponda).

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
                                  <br>   a.	Es posible que retengamos la totalidad o parte de las ganancias del ofertante que se le adeuden, pero que aún no se hayan pagado:

                                  <br>   -	Si creemos que ha infringido o puede haber infringido grave o repetidamente alguna parte de los términos y condiciones de uso para todos los usuarios.
                                  <br>   -	Si intenta o amenaza con violar cualquier parte de los términos y condiciones de uso de una manera que creemos que tiene o podría tener consecuencias graves para nosotros o para otro usuario (incluida la pérdida real o posible que nos haya causado a nosotros o a otro usuario).
                                  <br>   -	Si sospechamos que la totalidad o parte de las ganancias del ofertante resultan de una actividad ilegal, ya sea por parte de usted o del adquisidor que realizó el pago sobre un servicio que resultó en las ganancias del adquisidor.
                                  <br>   
                                  <br>   b.	Durante el tiempo que sea necesario para investigar la infracción real, amenazada o sospechada por usted o la presunta actividad ilegal (según corresponda). Si después de nuestra investigación, llegamos a la conclusión de que (i) ha incumplido grave o repetidamente cualquier parte de los términos y condiciones de uso; (ii) ha intentado o amenazado con violar cualquier parte de los términos y condiciones de uso de una manera que tiene o podría tener consecuencias graves para nosotros u otro usuario (incluida la pérdida real o posible causada a nosotros o a otro usuario), y / o (iii) Las ganancias de ofertantes son el resultado de una actividad ilegal, podemos notificarle que ha perdido sus ganancias de ofertante.
                                  <br>   
                                  <br>   c.	No tendremos ninguna responsabilidad ante usted si retenemos o perdemos cualquiera de sus ganancias de ofertantes cuando tengamos derecho a hacerlo en virtud de estos términos y condiciones de uso para ofertantes.
                                  <br>   
                                  <br>   d.	Si retenemos la totalidad o parte de las ganancias del ofertante que se le adeudan y determinamos que parte de las ganancias del ofertante retenida por nosotros no está relacionada con el incumplimiento por su parte de los términos y condiciones de uso o la sospecha de actividad ilegal, entonces podemos pagarle el parte de las ganancias del ofertante que determinamos que no están relacionadas con incumplimientos por su parte de los términos y condiciones de uso o sospecha de actividad ilegal. Sin embargo, acepta que si consideramos que su (s) incumplimiento (s) de los términos y condiciones de uso nos ha causado o puede causarnos una pérdida, podemos retener todas las ganancias del ofertante que se le adeuden, pero que aún no se hayan pagado y podemos compensar dichos montos con las pérdidas sufridas por nosotros.
                                  <br>   
                                  <br>   e.	Si una vez que hayamos terminado nuestra investigación, determinamos que se perderán las ganancias del ofertante, haremos todo lo posible para devolver los pagos de los adquisidores de buena fe, que resultaron en las ganancias del ofertante perdido a los adquisidores de buena fe relevantes que realizaron dichos pagos de los fanáticos.
                                        
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
                                            Promoción del cumplimiento tributario y del IVA:
                                    </h2>
                                </div>
                                <div id="collapse3_13" class="collapse" aria-labelledby="heading3_13"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                      <br>   a.	General:

                                      <br>   -	Recomendamos que todos los creadores busquen asesoramiento profesional para asegurarse de que cumple con las normas fiscales y del IVA locales, según sus circunstancias individuales y país donde reside.
                                      <br>   -	Al usar Smirrow como ofertante, usted garantiza (lo que significa que hace una promesa legalmente ejecutable) que ha informado y en el futuro informará sobre la recepción de todos los pagos realizados en relación con su uso de Smirrow a la autoridad fiscal correspondiente en su jurisdicción, según lo requiera la ley, según el país donde resida.
                                      <br>   -	Al usar Smirrow como ofertante, usted garantiza (lo que significa que hace una promesa legalmente ejecutable) que cumplirá en todo momento con todas las leyes y regulaciones relacionadas con los impuestos que se apliquen a usted. Si, en algún momento mientras tiene una cuenta Smirrow, se produce algún incumplimiento de impuestos en relación con usted (incluido el incumplimiento por su parte de informar las ganancias o la imposición de cualquier multa o interés relacionado con los impuestos) o si se produce algún litigio, Si se inicia una consulta o investigación en su contra que esté relacionada con, o que pueda conducir a, cualquier caso de incumplimiento tributario, usted acepta que:
                                      <br>   
                                      <br>   •	Notificarnos por correo electrónico a legal@smirrow.com por escrito dentro de los 7 días posteriores a la ocurrencia del incumplimiento tributario o al comienzo del litigio, consulta o investigación (según corresponda).
                                      <br>   •	Envíenos de inmediato por correo electrónico a legal@smirrow.com con: (i) Detalles de los pasos que está tomando para abordar la ocurrencia del incumplimiento tributario y para evitar que vuelva a ocurrir, junto con los factores atenuantes que considere relevantes; y (ii) Cualquier otra información en relación con la ocurrencia del incumplimiento tributario que podamos requerir razonablemente.
                                      <br>   
                                      <br>   -	Para evitar dudas, usted es responsable de sus propios asuntos fiscales y Smirrow no es responsable de ningún impago de impuestos por parte de los ofertantes.
                                      <br>   -	Nos reservamos el derecho de cerrar su cuenta Smirrow si nos notifica o nos damos cuenta de cualquier incumplimiento fiscal por su parte.
                                      <br>   
                                      <br>   b.	IVA e impuestos de Colombia y ofertantes establecidos en Colombia:
                                      <br>   
                                      <br>   A los efectos del IVA de Colombia únicamente, se considera que los ofertantes prestan directamente sus servicios a los adquisidores y no a Smirrow. El IVA solo se aplica si su actividad y servicios están grabados por la ley tributaria, por lo anterior debe asesorarse. 
                                      <br>   
                                      <br>   Si eres un ofertante registrado para el IVA e impuestos en Colombia:
                                      <br>   
                                      <br>   A efectos del IVA e impuesto, usted acepta que Smirrow tiene la total libertad de hacer modificaciones en la aplicabilidad del IVA e impuestos, si así lo amerita por cambios y modificaciones en la ley tributaria colombiana, o cualquier otra norma legal vigente que así lo amerite.
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
