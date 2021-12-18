@extends('layouts.simple')
@section('js_after')
    <script>
        $(document).ready(function() {
            $('#one-signup-terms').modal('show')
        });
    </script>
@endsection
@section('title')@lang('messages.title_login')@endsection
@section('meta_description')@lang('messages.meta_description')@endsection
@section('head')
    <meta name="facebook-domain-verification" content="ua8rdssst1tj7mqknouhcivup9umbp" />
    <meta name="theme-color" content="#E71C79">
@endsection

@section('css_before')
    <style>
        body {
            background: black !important;
        }

    </style>
@endsection
@section('content')
<!-- IMG for SMS -->
<img src="{{ asset('images/icon/icon-banner.jpg') }}" alt="logo Smirrow"
                                            title="Logo de Smirrow" style="height: 1px; position: absolute;">
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
                        alt="Bandera de colombia" title="Es"> @lang('messages.spanish')</a></li>
                <a href="{{ route('setlocale', 'en') }}" class="dropdown-item" href="#"><img width="25px"
                        src="https://i.postimg.cc/zf3XKxbC/1200px-Flag-of-the-United-States-svg.png"
                        alt="Bandera de Estados Unidos" title="En"> @lang('messages.english')</a>
            </div>
        </div>
    </div>
    <a class="hide-p" href="https://www.facebook.com/sharer/sharer.php?u=https://smirrow.com">Comparte en
        Facebook</a>
    <a class="hide-p"
        href="https://twitter.com/intent/tweet?text= escola%20inform%C3%A1tica%20i%20disseny&url=https://smirrow.com&hashtags=Secsi">
        Compartir en twitter</a>
    <a class="hide-p" href="https://api.whatsapp.com/send?text=Hello">whatsapp</a>
    <section id="section_login" class="animate__animated " style="overflow: hidden;">
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
                            <p class="small" style="color:gray;"><b>@lang('messages.exclusive_age')</b></p>
                            <p class="small color-message" style="color:gray;"><b>@lang('messages.accept_age')</b></p>
                        </div>
                        <div class="block-content block-content-full text-center">
                            <button type="button" class="btn btn-sm btn-smirrow" data-dismiss="modal"> <i
                                    class="fa fa-sign-in-alt"> </i> @lang('buttons.enter')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php($introVideo = 'intro1')
        <div class="font-size-sm text-center text-muted">
            <div class="hero-static d-flex align-items-center ">
                <video class="d-md-block d-none" autoplay muted loop
                    poster="{{ asset('videos/snap' . $introVideo . '.png') }}">
                    <source src="{{ asset('videos/' . $introVideo . '.webm') }}" type="video/webm">
                    <source src="{{ asset('videos/' . $introVideo . '.mp4') }}" type="video/mp4">
                </video>
                <div class="tint sy-background-image d-md-block d-none"
                    style="background-image: url({{ asset('images/generics/texture.png') }})">
                </div>
                <div class="w-100">
                    <div class="content content-full bg-black-opacity sy-background-color mt-md-5">
                        <div class="row justify-content-center sy-opacity  mt-5">
                            <div class="col-md-8 col-lg-5 col-xl-4 ">

                                <div class="text-center">
                                    <p class="mb-2">
                                        <img class="rounded max-height-50"
                                            src="{{ URL::asset('images/icon/smirrow-icon-png.png') }}" alt="logo Smirrow"
                                            title="Logo de Smirrow" style="height: 80px;">
                                    </p>
                                    <h1 class=" text-white " style="font-family: smirrow">
                                        Smirrow <i class="hide-p">Prepagos Putas Prepagos</i>
                                    </h1>
                                </div>
                                <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input id="email" autocomplete="off" type="email"
                                            placeholder="{{ __('generics.email') }}"
                                            class="form-control form-control-lg form-control-alt {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                            name="email" value="{{ old('email') }}" >
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password"
                                            class="form-control form-control-lg form-control-alt {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            id="password" name="password" placeholder="{{ __('generics.password') }}">
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
                                        <!--  <div class="col-md-6">
                                            <a href="{{ route('socialLogin', 'facebook') }}"
                                                class="btn btn-outline-secondary btn-block"><i class="fab fa-facebook"></i>
                                                Facebook</a>
                                        </div> -->
                                        <div class="col-md-12 mt-3  mt-md-0">
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
                                <div class="container pl-5 ">
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <div class="col-12 ">
                                            <a href="/terms_and_conditions"
                                                class="text-white">@lang('auth.terms_and_conditions')</a> &nbsp;&nbsp;
                                            <a href="/privacy" class="text-white">@lang('auth.privacy')</a> &nbsp;&nbsp;
                                            <a href="/frecuency"
                                                class="text-white open-frecuency_questions">@lang('auth.frecuency_questions')</a>&nbsp;&nbsp;
                                            <a href="/about"
                                                class="text-white open-obout">@lang('auth.about')</a>&nbsp;&nbsp;
                                            <a href="/declaration" class="text-white open-obout">@lang('auth.slavery')</a>
                                        </div>
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2"></div>
                                        <p class="col-12 text-white" class="fab fa-facebook">{{ config('app.name') }} &copy; <span
                                                class="text-white" data-toggle="year-copy"></span></p> &nbsp;&nbsp;
                                        <div class="col-2"></div>
                                    </div>
                                    <div class="row text-center font-size-sm  text-muted py-2">
                                        <div class="col-12 mb-5 mt-3">
                                            <a href="https://www.facebook.com/smirrow.co/"
                                                class="btn btn-sm  text-smirrow border-smirrow" target="_blank">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                            &nbsp;
                                            <a href="https://twitter.com/Smirrow_co"
                                                class="btn btn-sm text-smirrow border-smirrow" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            &nbsp;
                                            <a href="https://www.tiktok.com/@smirrow_co"
                                                class="btn btn-sm text-smirrow border-smirrow" target="_blank">
                                                <img src="https://i.postimg.cc/XvCN8h69/Tik-Tok-Mesa-de-trabajo-1.png"
                                                    title="TikTok" alt="Logo TikTok" width="15">
                                            </a>
                                            &nbsp;
                                            <a href="https://www.youtube.com/channel/UCjZROr9orGQMxsje7gtQSYw"
                                                class="btn btn-sm text-smirrow border-smirrow" target="_blank">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                            &nbsp;
                                            <a href="https://www.instagram.com/smirrow.co/"
                                                class="btn btn-sm text-smirrow border-smirrow" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
