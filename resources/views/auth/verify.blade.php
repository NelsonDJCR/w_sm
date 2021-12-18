@extends('layouts.simple')


@section('content')
    @php($introVideo = 'intro'.rand(1,4))
    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">
        <video autoplay muted loop poster="{{ asset('videos/snap'.$introVideo.'.png') }}">
            <source src="{{ asset('videos/'.$introVideo.'.webm') }}" type="video/webm">
            <source src="{{ asset('videos/'.$introVideo.'.mp4') }}" type="video/mp4">
        </video>
        <div class="tint" style="background-image:url({{ asset('images/generics/texture.png') }});background-repeat:repeat;background-position:center center;opacity:1;"></div>
        <div class="w-100">
            <!-- Sign In Section -->

            <div class="content content-full bg-white" style="background-color: #ffffffe3 !important">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-body">
                                <div class="text-center">
                                    <p class="mb-2">
                                        <img class="rounded" style="max-height: 50px" src="{{URL::asset('images/icon/smirrow-icon.png')}}" alt="logo">
                                    </p>
                                    <h2 class="h6 font-w400 text-muted mb-3">
                                        {{ __('auth.Verify Your Email Address') }}
                                    </h2>
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('auth.A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    <p>{{ __('auth.Before proceeding, please request the verification button and check your email for a verification link.') }}</p>
                                    <a  class="btn btn-smirrow" href="{{ route('verification.resend') }}">{{ __('auth.click here to request the verification email') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center pt-4">
                    <a class="font-size-sm" href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa fa-reply"> </i> {{ __('generics.return_login') }}
                    </a>
                </div>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            <!-- END Sign In Section -->

            <!-- Footer -->
            <div class="font-size-sm text-center text-muted py-3">
                <strong>{{config('app.name')}}</strong> &copy; <span data-toggle="year-copy"></span>
            </div>
            <!-- END Footer -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
