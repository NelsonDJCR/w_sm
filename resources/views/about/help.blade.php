@extends('layouts.simple')
@yield('css_before')
<link rel="stylesheet" href="{{asset('css/flag-icon.css')}}">
@section('content')
    @php($introVideo = 'intro'.rand(1,3))
    <div class="font-size-sm text-center text-muted py-3">
        <a href="/" class="text-white btn">
            <img class="rounded" style="max-height: 25px" src="{{URL::asset('images/icon/smirrow-icon.png')}}" alt="Speeho">
            Speeho
        </a>&nbsp;
        <a href="/about" class="text-white btn">@lang('login.we')</a>&nbsp;&nbsp;
        <a href="/security" class="text-white btn">@lang('login.security')</a>&nbsp;
        <a href="/help" class="text-gray btn">@lang('login.help')</a>&nbsp;
        <a href="{{route('setlocale', 'en')}}" title="@lang('login.english')"><span class="flag-icon flag-icon-us"></span></a>&nbsp;
        <a href="{{route('setlocale', 'es_CO')}}" title="@lang('login.spanish')"><span class="flag-icon flag-icon-co"></span></a>
    </div>
    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">
        <video autoplay muted loop poster="{{ asset('videos/snap'.$introVideo.'.png') }}">
            <source src="{{ asset('videos/'.$introVideo.'.webm') }}" type="video/webm">
            <source src="{{ asset('videos/'.$introVideo.'.mp4') }}" type="video/mp4">
        </video>
        <div class="tint" style="background-image:url({{ asset('images/generics/texture.png') }});background-repeat:repeat;background-position:center center;opacity:1;">
        </div>
        <div class="w-100">
            <!-- Sign In Section -->
            <div class="content content-full bg-white" style="background-color: #ffffffe3 !important">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-8 ">
                        <!-- Introduction -->
                        <h2 class="h3">@lang('help.introduction')</h2>
                        <div id="faq1" class="mb-5" role="tablist" aria-multiselectable="true">
                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq1_h1">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq1" href="#faq1_q1" aria-expanded="true" aria-controls="faq1_q1">@lang('help.welcome')</a>
                                </div>
                                <div id="faq1_q1" class="collapse show" role="tabpanel" aria-labelledby="faq1_h1" data-parent="#faq1">
                                    <div class="block-content">
                                        <p>@lang('help.introduction1')</p>
                                </div>
                            </div>

                        </div>
                        <!-- END Introduction -->

                        <!-- Functionality -->
                        <h2 class="h3">@lang('help.offeror')</h2>
                        <div id="faq2" class="mb-5" role="tablist" aria-multiselectable="true">

                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h1">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1" aria-expanded="true" aria-controls="faq2_q1">@lang('help.register')</a>
                                </div>
                                <div id="faq2_q1" class="collapse" role="tabpanel" aria-labelledby="faq2_h1" data-parent="#faq2">
                                    <div class="block-content">
                                            <p>
                                           @lang('help.register_description')
                                            <br>
                                            <img class="img-fluid" src="{{URL::asset('images/help/img_register.png')}}">
                                            </p>
                                            <p>
                                            @lang('help.register_description1')
                                            <br>
                                            <img class="img-fluid" src="{{URL::asset('images/help/img_register1.png')}}">
                                            </p>
                                            <p>
                                                @lang('help.register_description2')
                                            <br>
                                            <img class="img-fluid" src="{{URL::asset('images/help/img_register2.png')}}">
                                            </p>
                                            <p>
                                                @lang('help.register_description3')
                                            </p>

                                    </div>
                                </div>
                            </div>

                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h2">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2" aria-expanded="true" aria-controls="faq2_q2">@lang('help.configuration')</a>
                                </div>
                                <div id="faq2_q2" class="collapse" role="tabpanel" aria-labelledby="faq2_h2" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.configuration_description')</p>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_configuration1.png')}}">
                                        <br>
                                        <p>@lang('help.configuration_description1')</p>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_configuration2.png')}}">
                                        <br>

                                    </div>
                                </div>
                            </div>

                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h3">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3" aria-expanded="true" aria-controls="faq2_q3">@lang('help.validation')</a>
                                </div>
                                <div id="faq2_q3" class="collapse" role="tabpanel" aria-labelledby="faq2_h3" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.validation_description')</p>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_validation1.png')}}">
                                        <br>
                                        <p>@lang('help.validation_description1')</p>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_validation2.png')}}">
                                        <br>

                                    </div>
                                </div>
                            </div>

                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h4">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4" aria-expanded="true" aria-controls="faq2_q4">@lang('help.profile')</a>
                                </div>
                                <div id="faq2_q4" class="collapse" role="tabpanel" aria-labelledby="faq2_h4" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.profile_description')</p>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_profile1.png')}}">
                                        <br>
                                        <p>@lang('help.profile_description1')</p>
                                        <br>

                                    </div>
                                </div>
                            </div>

                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h5">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q5" aria-expanded="true" aria-controls="faq2_q5">@lang('help.gallery')</a>
                                </div>
                                <div id="faq2_q5" class="collapse" role="tabpanel" aria-labelledby="faq2_h5" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.gallery_description')</p>
                                        <br>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_gallery.png')}}">
                                        <br>
                                        <p>@lang('help.gallery_description1')</p>
                                        <br>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_gallery1.png')}}">

                                    </div>
                                </div>
                            </div>


                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h6">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q6" aria-expanded="true" aria-controls="faq2_q6">@lang('help.services')</a>
                                </div>
                                <div id="faq2_q6" class="collapse" role="tabpanel" aria-labelledby="faq2_h6" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.services_phrase')</p>
                                        <br>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_services.png')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h7">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q7" aria-expanded="true" aria-controls="faq2_q7">@lang('help.accessories')</a>
                                </div>
                                <div id="faq2_q7" class="collapse" role="tabpanel" aria-labelledby="faq2_h7" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.accessories_phrase')</p>
                                        <br>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_accessories.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h8">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q8" aria-expanded="true" aria-controls="faq2_q8">@lang('help.availability')</a>
                                </div>
                                <div id="faq2_q8" class="collapse" role="tabpanel" aria-labelledby="faq2_h8" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.availability_phrase')</p>
                                        <br>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_disponibilidad.png')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h9">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q9" aria-expanded="true" aria-controls="faq2_q9">@lang('help.experience')</a>
                                </div>
                                <div id="faq2_q9" class="collapse" role="tabpanel" aria-labelledby="faq2_h9" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.experience_phrase')</p>
                                        <br>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_experiencia.png')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq2_h10">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q10" aria-expanded="true" aria-controls="faq2_q10">@lang('help.financial_informations')</a>
                                </div>
                                <div id="faq2_q10" class="collapse" role="tabpanel" aria-labelledby="faq2_h10" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>@lang('help.financial_informations_description')</p>
                                        <br>
                                        <img class="img-fluid" src="{{URL::asset('images/help/img_financial.png')}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- END Functionality -->

                        <!-- Payments -->
                        <h2 class="h3">@lang('help.client')</h2>



                        <div id="faq3" role="tablist" aria-multiselectable="true">


                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq3_h1">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1" aria-expanded="true" aria-controls="faq3_q1">@lang('help.register')</a>
                                </div>
                                <div id="faq3_q1" class="collapse" role="tabpanel" aria-labelledby="faq3_h1" data-parent="#faq2">
                                    <div class="block-content">
                                        <p>
                                            @lang('help.register_description')
                                            <br>
                                            <img class="img-fluid" src="{{URL::asset('images/help/img_register.png')}}">
                                        </p>
                                        <p>
                                            @lang('help.register_description1')
                                            <br>
                                            <img class="img-fluid" src="{{URL::asset('images/help/img_register1.png')}}">
                                        </p>
                                        <p>
                                            @lang('help.register_description2')
                                            <br>
                                            <img class="img-fluid" src="{{URL::asset('images/help/img_register2.png')}}">
                                        </p>
                                        <p>
                                            @lang('help.register_description3')
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="block block-bordered mb-1">
                                <div class="block-header block-header-default" role="tab" id="faq3_h1">
                                    <a class="text-muted" data-toggle="collapse" data-parent="#faq3" href="#faq3_q1" aria-expanded="true" aria-controls="faq3_q1">@lang('help.bank_account')</a>
                                </div>
                                <div id="faq3_q1" class="collapse" role="tabpanel" aria-labelledby="faq3_h1" data-parent="#faq3">
                                    <div class="block-content">
                                        <p>@lang('help.payments_phrase')</p>
                                </div>
                            </div>


                        </div>
                        <!-- END Payments -->



                        <!-- Footer -->
                        <div class="font-size-sm text-center text-muted py-3">
                            <strong class="text-white">{{config('app.name')}}</strong> &copy; <span
                                data-toggle="year-copy"></span>&nbsp;&nbsp;
                            <a href="/terms_and_conditions" class="text-white">@lang('auth.terms_and_conditions')</a>&nbsp;&nbsp;&nbsp;
                            <a href="/privacy" class="text-white">@lang('auth.privacy')</a>
                        </div>
                        <!-- END Footer -->
                    </div>
                </div>
            </div>
              </div>
         </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
