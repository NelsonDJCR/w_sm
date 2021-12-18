@extends('layouts.simple')
@section('title')@lang('messages.title_register')@endsection
@section('meta_description')Smirrow | Registrate en nuestro portal y tendrás las escorts más exclusivas de toda Colombia, registrate en smirrow @endsection
@section('content')
    @php($idRecruiter = rand(1,3))
    @php($idModel = rand(1,5))
    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">
        <video autoplay muted loop poster="{{ asset('videos/snapintro.png') }}">
            <source src="{{ asset('videos/intro1.webm') }}" type="video/webm">
            <source src="{{ asset('videos/intro1.mp4') }}" type="video/mp4">
        </video>
        <div class="tint" style="background-image:url({{ asset('images/generics/texture.png') }});background-repeat:repeat;background-position:center center;opacity:1;"></div>
        <div class="w-100">

            <!-- Sign Up Section -->
            <div class="content content-full bg-white" style="background-color: #000000 !important; opacity: 80%">
                <div class="row justify-content-center" style="opacity: 100%">
                    <div class="col-md-10 offset-md-1">
                        <!-- Header -->
                        <div class="text-center">
                            <p class="mb-2">
                                <img class="rounded" style="max-height: 50px" src="{{URL::asset('images/icon/smirrow-icon.png')}}" alt="logo">
                            </p>
                            <h1 class="h4 mb-1 text-white">
                                @lang('messages.create_account')
                            </h1>
                        </div>

                        <div class="row" style="margin:3%">
                            <!-- END Header -->
                            <div class="col-md-12">
                                <!-- Glass on Background Color -->
                                <a href="{{ route('offerors.register')}}">

                                    <div class="block block-rounded">
                                        <div class="bg-image" style="background-image: url('{{asset('media/register/register-model'.$idModel.'.jpg')}}');">
                                            <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                                <div class="ribbon-box">
                                                    <i class="fa fa-dot-circle"></i>
                                                </div>
                                                <div class="text-center py-6">
                                                    <h4 class="font-w600 text-white mb-0">{{__('generics.i_am_an_artist')}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                                <!-- END Glass on Background Color -->
                            </div>
                            <div class="col-md-12">
                                <!-- Glass on Background Color -->
                                <a href="{{ route('customers.register')}}">
                                    <div class="block block-rounded">
                                        <div class="bg-image" style="background-image: url('{{asset('media/register/register-looking'.$idRecruiter.'.jpg')}}');">
                                            <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                                <div class="ribbon-box">
                                                    <i class="fa fa-bullseye"></i>
                                                </div>
                                                <div class="text-center py-6">
                                                    <h4 class="font-w600 text-white mb-0">{{__('generics.looking_talent')}}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Glass on Background Color -->
                            </div>
                            <div class="col-md-12">
                                <!-- Glass on Background Color -->
                                <a href="{{ route('agency.register')}}">
                                    <div class="block block-rounded">
                                        <div class="bg-image" style="background-image: url('https://i.postimg.cc/hPxrP779/Screenshot-1.jpg');">
                                            <div class="block-content block-content-full bg-black-50 ribbon ribbon-glass">
                                                <div class="ribbon-box">
                                                    <i class="fa fa-bullseye"></i>
                                                </div>
                                                <div class="text-center py-6">
                                                    <h4 class="font-w600 text-white mb-0">Registrar agencia</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <!-- END Glass on Background Color -->
                            </div>
                            <div class="col-md-12" style="text-align: center">
                                <a class="font-size-sm text-smirrow" href="{{ route('login') }}"><i class="fa fa fa-reply"> </i> {{ __('buttons.return') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
