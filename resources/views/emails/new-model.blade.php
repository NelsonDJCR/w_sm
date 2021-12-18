<!doctype html>
<html lang="es_CO">
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Mensaje de notificación - Speho</title>
    @include('emails.common.styles')
</head>
<body class="">
<table border="0" cellpadding="0" cellspacing="0" class="body">
    <tr>
        <td>&nbsp;</td>
        <td class="container">
            <div class="content">
                <!-- START CENTERED WHITE CONTAINER -->
                <span class="preheader">Su usuario fue creado de forma exitosa</span>
                <img src="{{$message->embed(public_path().'/images/icon/smirrow-icon.png')}}" height="60" alt="Logo SPEHO">
                <table class="main">

                    <!-- START MAIN CONTENT AREA -->
                    <tr>
                        <td class="wrapper">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td>
                                        <p>¡Bienvenido(a) a Smirrow <strong>{{$user->name}}</strong>,</p>
                                        <p>
                                            Queremos que sepas que puedes completar tu perfil en
                                        </p>

                                        <p>
                                            Puedes terminar de completar tu perfil Ingresando a
                                        </p>
                                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-smirrow">
                                            <tbody>
                                            <tr>
                                                <td align="left">
                                                    <table border="0" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="{{route('login')}}" target="_blank">Ir a mi perfil</a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p>Por favor no responde este mensaje.</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- END MAIN CONTENT AREA -->
                </table>

                <!-- START FOOTER -->
                <div class="footer">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td class="content-block">
                                <span class="apple-link">SPEEHO, Bogotá Colombia</span>
                                <br> ¿Hubo algún error? <a href="{{route('landing')}}">Cancelar
                                    suscripción</a>.
                            </td>
                        </tr>
                        <tr>
                            <td class="content-block powered-by">
                                Powered by <a href="https://smirrow.com">smirrow</a>.
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- END FOOTER -->

                <!-- END CENTERED WHITE CONTAINER -->
            </div>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
</body>
</html>
