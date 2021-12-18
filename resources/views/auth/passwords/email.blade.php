@extends('layouts.simple')

@section('content')
    @php($introVideo = 'intro'.rand(1,4))
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
            <div class="content content-full bg-black" style="background-color: #000000 !important; opacity: 80%">
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
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group row justify-content-center" style="text-align: center">
                                <div class="col-md-9 col-lg-7 col-xl-7 py-4">
                                    <h2 class="h6 font-w400 text-white mb-3">
                                        {{__('passwords.request_email')}}
                                    </h2>
                                    <input type="email" class="form-control form-control-lg form-control-alt" id="email"
                                           name="email" placeholder="{{ __('passwords.email_address') }}"
                                           value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-6">
                                    <button type="submit" class="btn btn-block btn-smirrow">
                                        <i class="fa fa-fw fa-envelope mr-1"></i> {{ __('buttons.send') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- END Reminder Form -->
                        <div class="col-md-12 py-4" style="text-align: center">
                            <a class="font-size-sm text-smirrow" href="{{ route('login') }}"><i class="fa fa fa-reply"> </i> {{ __('generics.return') }}</a>
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
