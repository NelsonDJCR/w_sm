@extends('layouts.simple')

@section('content')
    @php($introVideo = 'intro'.rand(1,1))
    @php($idRecruiter = rand(1,3))
    @php($idModel = rand(1,5))
    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">
        <video autoplay muted loop poster="{{ asset('videos/snap'.$introVideo.'.png') }}">
            <source src="{{ asset('videos/intro1.webm') }}" type="video/webm">
            <source src="{{ asset('videos/intro1.mp4') }}" type="video/mp4">
        </video>
        <div class="tint" style="background-image:url({{ asset('images/generics/texture.png') }});background-repeat:repeat;background-position:center center;opacity:1;"></div>
        <div class="w-100">

            <!-- Reminder Section -->
            <div class="content content-full bg-red" style="background-color: #000000 !important; opacity: 80%">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7 col-xl-7 py-5">
                        <!-- Header -->
                        <div class="text-center">
                            <p class="mb-2">
                                <img class="rounded" style="max-height: 50px" src="{{URL::asset('images/icon/smirrow-icon.png')}}" alt="logo">
                            </p>
                            <h1 class="h4 mb-1">
                                {{ __('passwords.reset_password') }}
                            </h1>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>
                        <!-- END Header -->

                        <!-- Reminder Form -->
                        <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.min.js which was auto compiled from _es6/pages/op_auth_reminder.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <form method="POST" action="{{ route('password.request') }}">
                            @csrf
                            <div class="form-group row justify-content-center">
                                <div class="col-md-9 col-lg-7 col-xl-7 py-4">
                                    <input type="hidden" name="token" value="{{ $token  }}">
                                    <input type="hidden" name="email" value="{{ $email }}">
                                    <div class="row">
                                        <div class="col md-12 col-lg-12 col-xl-12">
                                            <h2 class="h6 font-w400 text-muted mb-3">
                                                {{__('passwords.request_password')}}
                                            </h2>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="password" type="password" placeholder="{{ __('generics.password') }}" class="form-control form-control-lg form-control-alt{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" placeholder="{{ __('generics.confirm_password') }}" class="form-control form-control-lg form-control-alt" name="password_confirmation" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-5 col-lg-5 col-xl-5">
                                    <button type="submit" class="btn btn-block btn-smirrow">
                                        <i class="fa fa-fw fa-key mr-1"></i> {{ __('passwords.reset_password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- END Reminder Form -->
                        <div class="col-md-12 py-4" style="text-align: center">
                            <a class="font-size-sm" href="{{ route('login') }}"><i class="fa fa fa-reply"> </i> {{ __('generics.return') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Reminder Section -->

            <!-- Footer -->
            <div class="font-size-sm text-center text-muted py-3">
                <strong class="text-white">{{config('app.name')}} &copy; </strong><span class="text-white" data-toggle="year-copy"></span>
            </div>
            <!-- END Footer -->
        </div>
    </div>
    <!-- END Page Content -->
@endsection
