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
                        src="https://i.postimg.cc/zf3XKxbC/1200px-Flag-of-the-United-States-svg.png" alt="">
                    @lang('messages.english')</a>
            </div>
        </div>
    </div>

    <div class="btn-float btn-smirrow btn-back c-pointer " onclick="location.href = 'https://smirrow.com/';"><i
            class="fa fa-times" aria-hidden="true"></i></div>

    <section id="section_about" class="animate__animated " style="overflow: hidden;" len="5583">
        <nav class="navbar  navbar-dark bg-black" len="476"><a href="#" class="navbar-brand" len="0"></a>
            <div class="row" len="416"><a href="#" class="navbar-brand" len="0"></a>
                <div class="container" len="350"><a href="#" class="navbar-brand" len="0"></a>
                    <div class="row " len="289"><a href="#" class="navbar-brand" len="0"></a><a href="/"
                            len="187"><img src="http://127.0.0.1:8000/images/icon/smirrow-icon.png" alt="Logo Smirrow"
                                title="Logo de Smirrow" class="rounded max-height-25"
                                style="padding: 15px; width: 110px; height: 110px;" len="0"></a>
                        <h2 class="text-light mt-4 " len="14" lang="en">About us</h2>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5" len="4968">
            <div class="row" len="1029">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" len="512">
                    <h2 len="6" lang="en">Mission</h2>
                    <p len="489">
                        <font lang="en"> Smirrow is the platform that is changing the way adult entertainment service
                            providers connect with their users. </font>
                        <font lang="en">The site is shaping up providing security in the payment and handling of money,
                            security to service providers and users in their displacements. </font>
                        <font lang="en">It includes content creation of all genres and for all tastes. </font>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" len="390">
                    <h2 len="6" lang="en" style="">Vision</h2>
                    <p len="367" lang="en"> Smirrow is the platform that is created to become the first international site
                        where the taboo, stigmatization and double standards about adult entertainment services are
                        eliminated and become a common, recognized and universally accepted part. </p>
                </div>
            </div>
            <h2 len="8" lang="en">History</h2>
            <p len="1090">
                <font lang="en"> It was founded in 2020 by a group of young entrepreneurs, the vision of these young
                    entrepreneurs was to develop a digital platform where people who provide adult entertainment services
                    could monetize without any intermediaries and obtaining from the platform prerogatives such as security
                    in payments, security in the handling of money, </font>
                <font lang="en">security in displacements, security in the handling of their personal data, having the
                    freedom to work managing their own schedules, freedom to charge freely what they believe fair for their
                    services, reflect the cultural biodiversity accepting people who provide entertainment services for
                    adults of all genders. </font>
                <font lang="en">These young entrepreneurs since then with their technical and creative team gave life to
                    this vision. </font>
                <font lang="en">Smirrow arrived consolidating its importance as a superior platform with glamour and
                    elegance. </font>
            </p>
            <div class="row" len="946">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" len="169"><img
                        src="https://images.pexels.com/photos/3194519/pexels-photo-3194519.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260"
                        alt="PROYECCIÓN" class="mt-1 img-about" len="0"></div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-5" len="645">
                    <h2 len="11" lang="en">Projection</h2>
                    <p len="617">
                        <font lang="en"> Smirrow is a platform created to become the largest platform in the Americas, where
                            adult entertainment providers can generate income consistently and safely. </font>
                        <font lang="en">Site that will become the most solity, safe and guaranteed platform for users.
                        </font>
                        <font lang="en">Smirrow will obtain thousands of service providers and millions of users around the
                            world and become an international reference site. </font>
                    </p>
                </div>
            </div>
            <div class="row" len="1806">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" len="1479">
                    <h2 len="31" lang="en">Interactivity and participation </h2>
                    <p len="1431">
                        <font lang="en"> Unlike places where you find people who provide entertainment services for adults
                            where they do not receive all genders and only sell spaces, Smirrow welcomes cultural
                            biodiversity, it is a place where you can find people who provide entertainment services for
                            adults of all genres. </font>
                        <font lang="en">The platform is designed to create a history of your preferred services, generate a
                            list of preferred adult entertainment service providers, rate the service of service providers
                            and users, leave comments between the adult entertainment service provider and the user,
                            verification of the profile of the service provider and user. </font>
                        <font lang="en">The more complete the user profile of the person providing adult entertainment
                            services, the better ratings and good comments the person providing adult entertainment services
                            receives, the platform will position it in the search results or in better recommended services.
                        </font>
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" len="200"><img
                        src="https://images.pexels.com/photos/6853468/pexels-photo-6853468.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=650&amp;w=940"
                        alt="INTERACTIVIDAD Y PARTICIPACIÓN" class="mt-1 img-about-2" len="0"></div>
            </div>
        </div>
        <div class="footer" len="29" lang="en"> Smirrow </div>
    </section>


@endsection
