<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <!-- <script language="javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js"
        integrity="sha512-tcexmm0PBc+jOn9UwbgHVpjZIleEKXif1MCkzgNfVjhXKDxwYumrCOxhZ5tIaXHz2DpEE14hfjFn5J+tpaFSCg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main_counter.js') }}"></script>
    <link rel="stylesheet" id="css-main" href="{{ asset('/css/oneui.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="manifest" href="./manifest.json">
</head>
<script>
    if ('serviceWorker' in navigator){navigator.serviceWorker.register('./sw.js')}
    $(document).ready(function() {
        $('.icon_logo').attr('src','Null.gif')
        $('.icon_logo').attr('src','images/icon/smirrow_gif.gif')
        setTimeout(function() {
            $('.father_preload').addClass('animate__fadeOut')
            
        }, 3500);
        setTimeout(function() {
            $('.father_preload').remove()
            $('.body').removeClass('d-none').addClass('animate__fadeIn')
        }, 3550)
});
</script>
<style>
    body {

        background: black;
    }

    .body {
        margin: 0;
        padding: 0;
        text-align: center;
        overflow: hidden;
    }

    #container {
        margin: 20px auto;
        color: #555;
    }

    #countdown_dashboard {
        height: 110px;
    }

    .dash {
        width: 110px;
        height: 114px;
        background: transparent url('{{ asset("images/generics/card_preload.jpg") }}') 0 0 no-repeat;
        float: left;
        margin-left: 20px;
        position: relative;
    }

    .dash .digit {
        font-size: 55pt;
        font-weight: bold;
        float: left;
        width: 55px;
        text-align: center;
        font-family: 'smirrowRegular';
        color: rgb(0, 0, 0);
        position: relative;
    }

    .dash_title {
        position: absolute;
        display: block;
        bottom: 0px;
        right: 6px;
        left: 6px;
        color: rgb(255, 255, 255);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-family: 'smirrowThin';
    }

    .btn-smirrow {
        background: #f73a92 !important;
        color: white !important;
        padding: 10px 50px;
        font-family: 'smirrowThin';
        font-weight: 700;
    }

    .btn-smirrow:hover {
        background: #E61879 !important;
        color: white !important;
    }

    .row-counter {
        margin-top: 20vh;
        padding: 40px;
    }

    .container-counter {
        background: #E61879;
        padding: 25px;
        border-radius: 30px;
    }

    .content-btn {
        margin-top: 0px;
    }

    h1,
    h2,
    h4 {
        color: white;
        font-family: 'smirrowThin';
    }

    h1 {
        font-family: 'smirrow';
    }

    @media screen and (max-width:480px) {
        .row-counter {
            padding: 0px;
            margin: 5vh 10px;
        }

        .content-btn {
            margin-top: 0px;
        }

        .container-counter {
            background: #000000;
            padding: 25px;
            border-radius: 30px;
        }
    }
    .father_preload{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .icon_logo {
        width: 300px;
        height: 300px;
        
        
    }
   

    .preload {
        position: absolute;
        margin-top: 20vh;
    }

    .aaa {
        bottom: 0;
    }

</style>

<div class="animate__animated father_preload">
    <img class="icon_logo" title="logo_smirrow" alt="Logo Smirrow">
</div>
<div class="body d-none animate__animated">
    <div class="contaner-general" style="background: rgb(0, 0, 0);">

        <div class="row justify-content-center  row-counter">
            <div class="col-12 mb-2">
                <img src="{{ URL::asset('images/icon/smirrow-icon-png.png') }}" width="50" alt="">
                <h1 class="mb-2">Smirrow</h1>
                <h4>Encuentra y sé encontrado ...</h4>
            </div>
            <div class=" container-counter">
                <div id="countdown_dashboard" class="col-12 ">
                    <div class="dash weeks_dash text-center">
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                        <span class="dash_title text-center">Semanas</span>
                    </div>
                    <div class="dash days_dash text-center">
                        <span class="dash_title ">Dias</span>
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                    </div>
                    <div class="dash hours_dash">
                        <span class="dash_title">Horas</span>
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                    </div>
                    <div class="dash minutes_dash">
                        <span class="dash_title">Minutos</span>
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                    </div>
                    <div class="dash seconds_dash">
                        <span class="dash_title">Segundos</span>
                        <div class="digit">0</div>
                        <div class="digit">0</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row content-btn justify-content-center ">
            {{-- /offerors/register --}}
            <button onclick="location.href = '{{ url('/offerors/register') }}'" type="button" class="btn btn-smirrow">
                ¿Quieres ofrecer tus servicios con nosotros?, ingresa aquí
            </button>
        </div>
    </div>
    <script language="javascript" type="text/javascript">
        if (navigator.onLine) {
            // el navegador está conectado a la red
        } else {
            // el navegador NO está conectado a la red
            alert("no");
        }
        jQuery(document).ready(function() {

            $('#countdown_dashboard').countDown({
                targetDate: {
                    'day': 30,
                    'month': 8,
                    'year': 2021,
                    'hour': 0,
                    'min': 0,
                    'sec': 0
                }
            });

        });
    </script>
</div>

</html>
