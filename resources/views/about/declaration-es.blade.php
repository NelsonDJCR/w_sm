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
    </script>
@endsection
@section('meta_description')@lang('messages.meta_description')@endsection
@section('title')Smirrow | Declaracion @endsection
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
                            <a href="/"><img class="rounded max-height-25" style="padding: 15px; width: 110px;height: 110px;"
                                src="{{ URL::asset('images/icon/smirrow-icon.png') }}" alt="Logo Smirrow"
                                title="Logo de Smirrow"></a>
                            <h2 class="text-light mt-4 title-header">@lang('auth.slavery')</h2>
                        </div>
                    </div>
                </div>
            </a>
        </nav>
        <div class="container">
            <div class="row mt-5">

                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  position-static mb-5">

                    <ul class="list-group ">
                        <li class="list-group-item item-one smirrow-active c-pointer">@lang('auth.slavery_text')
                        </li>   
                        
                    </ul>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8  res bg-light">
                    <div class="accordion  " id="accordion_general">
                        <div class="acordion_one">
                            <h3>@lang('auth.terms_and_conditions')</h3>

                            <div class="card">
                                <div class="card-header" id="heading1_">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse1_" aria-expanded="false" aria-controls="collapse1_">
                                            Declaraci??n
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_" class="collapse" aria-labelledby="heading1_"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Esta declaraci??n se realiza de conformidad con Ley 985 de 2005 por medio de cual se adoptan medidas contra la esclavitud moderna y la trata de personas y a los convenios internacionales como el protocolo de Palermo. Esta declaraci??n establece los pasos que debe tomar Smirrow y constituye nuestra declaraci??n contra la esclavitud y trata de personas.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_1">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse1_1" aria-expanded="false" aria-controls="collapse1_1">
                                            Nosotros
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_1" class="collapse" aria-labelledby="heading1_1"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Smirrow es la plataforma que protege y revoluciona la conexi??n entre usuarios y personas prestadoras de servicios. El sitio incluye personas prestadoras de servicios y creadores de contenido de todos los g??neros y les permite desarrollar relaciones con base en la libertad, seguridad y confianza con sus usuarios. Smirrow brinda a las personas prestadoras de servicios la oportunidad de monetizar de forma libre e independiente y realizado en un entorno seguro que garantiza el pleno cumplimiento de las leyes, reglas y regulaciones pertinentes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_2">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse1_2" aria-expanded="false" aria-controls="collapse1_2">
                                            Pol??ticas
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_2" class="collapse" aria-labelledby="heading1_2"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            La esclavitud moderna y la trata de personas es un crimen y una violaci??n de los derechos humanos fundamentales. Adopta diversas formas como la esclavitud, la servidumbre, el trabajo forzoso y obligatorio y la trata de personas, todas las cuales tienen en com??n la privaci??n de la libertad de una persona por otra para explotarla en beneficio personal o comercial. Tenemos un enfoque de tolerancia cero hacia la esclavitud moderna y trata de personas y estamos comprometidos a actuar de manera ??tica e ??ntegra en todos nuestros tratos y relaciones comerciales y, teniendo en cuenta la estructura de nuestra plataforma de econom??a colaborativa para implementar y hacer cumplir sistemas efectivos para garantizar que la esclavitud moderna y trata de personas no se est?? haciendo. Es por eso que no permitimos que las personas est??n en contra de su propia voluntad dentro de plataforma. 
                                           <br> Nos comprometemos a garantizar que no se realicen actividades modernas de esclavitud o trata de personas en nuestra plataforma o a trav??s de nuestros proveedores externos. Nuestra Pol??tica contra la esclavitud y la trata de personas refleja nuestro compromiso de actuar de manera ??tica y con integridad en todas nuestras relaciones comerciales y de implementar y hacer cumplir sistemas y controles efectivos para garantizar que la esclavitud y la trata de personas no tengan lugar dentro de la comunidad Smirrow.
                                           <br> La prevenci??n, detecci??n y denuncia de la esclavitud moderna y trata de personas en cualquier parte donde opere nuestra plataforma de econom??a colaborativa es responsabilidad de todos aquellos que trabajan para nosotros, con nosotros o bajo nuestro control. Nuestro personal est?? obligado a evitar cualquier actividad que pueda conducir a, o sugerir, un incumplimiento de esta declaraci??n. Se requiere que todos los empleados lean, comprendan y cumplan en su totalidad con nuestra Pol??tica contra la esclavitud y la trata de personas. Internamente, informamos y alentamos a nuestro personal a informar cualquier inquietud o irregularidad que se extienda a cualquier violaci??n de los derechos humanos como la esclavitud moderna y la trata de personas. Todos los informes se investigar??n a fondo y se tomar??n las medidas correctivas adecuadas. Para nuestros usuarios, tenemos un proceso de informes de la comunidad que permite a cualquier persona interesada informar cualquier incumplimiento de las pol??ticas, las regulaciones y la ley. Esto se puede hacer contactando al correo seguridad@smirrow.com .
                                           <br> Tenemos unas pol??ticas de denuncia de irregularidades que alienta a nuestro personal a informar cualquier inquietud o irregularidad que se extienda a violaciones de derechos humanos como la esclavitud moderna y la trata de personas. Todos los informes se investigan y se toman las medidas adecuadas. Si alguien del personal, usuario o tercero presenta una preocupaci??n genuina, no sufrir?? ning??n perjuicio como resultado de hacerlo, incluso si resulta estar equivocado.
                                           <br> Entendemos que nuestra mayor exposici??n a la esclavitud moderna y trata de personas se puede dar dentro de nuestra plataforma. Estamos comprometidos a informar sobre los puntos clave de acci??n que pretendemos llevar a cabo en el futuro para la seguridad y libertad de nuestros usuarios. 
                                           <br> Las ??reas en las que operamos podr??an contener regiones de alto riesgo y somos conscientes de ello.
                                           <br> Existen riesgos relacionados con la prestaci??n de servicios y el riesgo de que sean utilizados contra su voluntad por un tercero e infrinja las normas nacionales, tratados, convenios y protocolos internacionales. Con el fin de interrumpir y prevenir da??os, monitoreamos todos los medios cargados en la plataforma y eliminamos, e informamos cuando sea necesario, cualquier contenido que facilite o coordine la explotaci??n de humanos, incluida la trata de personas. Definimos la trata de personas como el negocio de privar a alguien de la libertad con fines de lucro. Es explotaci??n de seres humanos para obligarlos a participar en actividades sexuales, laborales u otras actividades comerciales en contra de su voluntad. Se basa en la fuerza enga??osa o la coacci??n.
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_3">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse1_3" aria-expanded="false" aria-controls="collapse1_3">
                                            Personal
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_3" class="collapse" aria-labelledby="heading1_3"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Nuestros personal y proveedores especifican regularmente la Ley como una obligaci??n contractual que deben cumplir y promoveremos el requisito de que cualquier personal y proveedor confirme su cumplimiento de la Ley. Dicho esto, tenemos un n??mero limitado de personal y proveedores debido a la naturaleza de nuestra industria. Estamos implementando capacitaci??n en toda la plataforma sobre la esclavitud moderna y trata de personas para todo el personal que se enfrentan a los usuarios y un repaso anual para todos. La capacitaci??n es obligatoria. 
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_4">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse1_4" aria-expanded="false" aria-controls="collapse1_4">
                                            ??reas de riesgo
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_4" class="collapse" aria-labelledby="heading1_4"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Seguridad. Tenemos un s??lido proceso de registro cuando los usuarios se unen a la plataforma para brindar o solicitar servicios. Esta es una parte fundamental de nuestras pol??ticas de tolerancia cero contra la esclavitud moderna y la trata de personas. Tenemos m??todos de verificaci??n de usuarios para que la cuenta sea activada.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_5">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse1_5" aria-expanded="false" aria-controls="collapse1_5">
                                            Moderaci??n de contenido
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_5" class="collapse" aria-labelledby="heading1_5"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            Hemos desarrollado la profundidad y la sofisticaci??n de nuestra moderaci??n de contenido en donde no est?? permitido desnudos expl??citos. Esto ha incluido la incorporaci??n personal de servicio al cliente para revisar el contenido, adem??s de nuestros servicios automatizados.
                                         <br>   Supervisamos para asegurarnos de que solo un usuario pueda crear una cuenta en su propio nombre. Adem??s, aplicamos esta regla a lo largo de su uso de la plataforma. Revisamos cualquier discrepancia entre los ID agregados y el nombre legal proporcionado.
                                         <br>   Protegemos la identidad de los usuarios, tanto de aquellos que brindan servicios, como los que solicitan servicios. En ning??n caso la plataforma expone datos personales, ni sus identidades. 
                                         <br>   Constantemente realizamos informes con la finalidad de ampliar significativamente nuestras funciones de soporte para atender cualquier inquietud o queja de nuestros usuarios y de la comunidad en general. Nuestros moderadores revisan internamente cualquier informe derivado de nuestra plataforma.
                                         <br>   Siempre estaremos identificando y evaluando otras ??reas de riesgo dentro de nuestra plataforma para ir mejorando en la seguridad y libertad de nuestros usuarios. 
                                         <br>   Mitigar el riesgo de esclavitud y trata de personas que llegue a ocurrir en nuestra plataforma.
                                         <br>   Proteger a los denunciantes de irregularidades dentro de nuestra plataforma y tomar las medidas correctivas adecuadas seg??n sea necesario.
                                         <br>   Como usuario y parte de la comunidad debe mantenerse actualizado con los cambios reconocidos respecto a la legislaci??n nacional, convenios, tratados y protocolos internacionales relacionados. Estamos comprometidos con la transparencia de nuestra plataforma y en nuestro enfoque para abordar la esclavitud moderna y la trata de personas y cualquier cadena de suministro que sea coherente con nuestras obligaciones en virtud de la legislaci??n nacional, convenios, tratados y protocolos internacionales. Esperamos est??ndares muy altos dentro de nuestra plataforma y de nuestros usuarios, contratistas, proveedores y nuestro personal e incluimos una prohibici??n espec??fica contra el uso de la fuerza, el trabajo forzoso o de tr??fico o cualquier sometimiento a la esclavitud y trata de personas, ya sean adultos o ni??os.
                                         <br>   Monitorear las ??reas de riesgo potencial y las posibles soluciones para garantizar que el personal, usuarios y cualquier tercero est??n a salvo del riesgo de esclavitud y trata de personas.
                                         <br>   Alentamos a cualquier persona que encuentre contenido en Smirrow que indique que alguien est?? en peligro f??sico inmediato relacionado con la trata de personas a que nos informe de inmediato sobre el contenido a seguridad@smirrow.com . 
                                         <br>   Responsabilidad por la declaraci??n
                                         <br>   Nuestra Gerencia Ejecutiva tiene la responsabilidad general de asegurar que todos aquellos bajo nuestro control cumplan con esta declaraci??n y nuestras pol??ticas relacionadas. La gerencia en todos los niveles es responsable de garantizar que sus equipos comprendan esta declaraci??n y cumplan con nuestra Pol??tica contra la esclavitud y la trata. El equipo legal de Smirrow tiene la responsabilidad principal y diaria de tratar esta declaraci??n y cualquier consulta al respecto y considerar los sistemas y procedimientos de control interno para garantizar que sean efectivos en la lucha contra la esclavitud moderna y la trata de personas.
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading1_6">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapse1_6" aria-expanded="false" aria-controls="collapse1_6">
                                            Cumplimiento
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse1_6" class="collapse" aria-labelledby="heading1_6"
                                    data-parent="#accordion_general">
                                    <div class="card-body pl-4">
                                        <p>
                                            El cumplimento sobre los riesgos que enfrenta nuestra plataforma debido a la esclavitud moderna y trata de personas, es obligatoria para todos, incluye nuestro personal, usuarios, contratistas y proveedores, seg??n la legislaci??n nacional, los tratados, convenios y protocolos internacionales, nuestro personal siempre estar?? obligado a su cumplimiento. 
                                          <br>  Nuestro enfoque contra la esclavitud moderna y trata de personas continuar?? comunic??ndose en toda nuestra plataforma y a cualquier proveedor al comienzo de cualquier relaci??n comercial con ellos y se reforzar?? seg??n corresponda a partir de entonces.
                                          <br>  Estamos comprometidos a mantener y mejorar nuestras pr??cticas para combatir la esclavitud y la trata de personas.
                                            
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
