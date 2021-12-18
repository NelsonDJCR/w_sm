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
        <a href="/about" class="text-white btn">@lang('login.we')</a>&nbsp;
        <a href="/security" class="text-gray btn">@lang('login.security')</a>&nbsp;
        <a href="/help" class="text-white btn">@lang('login.help')</a>&nbsp;
        <a href="{{route('setlocale', 'en')}}" title="@lang('login.english')"><span class="flag-icon flag-icon-us"></span></a>&nbsp;
        <a href="{{route('setlocale', 'es_CO')}}" title="@lang('login.spanish')"><span class="flag-icon flag-icon-co"></span></a>
    </div>


    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">


        <video autoplay muted loop poster="{{ asset('videos/snap'.$introVideo.'.png') }}">
            <source src="{{ asset('videos/'.$introVideo.'.webm') }}" type="video/webm">
            <source src="{{ asset('videos/'.$introVideo.'.mp4') }}" type="video/mp4">
        </video>
        <div class="tint"
             style="background-image:url({{ asset('images/generics/texture.png') }});background-repeat:repeat;background-position:center center;opacity:1;">
        </div>
        <div class="w-100">
            <!-- Sign In Section -->
            <div class="content content-full bg-white" style="background-color: #ffffffe3 !important">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-8 ">
                        <!-- Introduction -->
                        <h1 class="h3">@lang('security.home')</h1>
                        <h5>@lang('security.date')</h5>
                        <div id="faq1" class="mb-5" role="tablist" aria-multiselectable="true">
                            <div class="block block-bordered mb-1">

                                    <div class="block-content">
                                        <p>@lang('security.security1')</p>
                                    </div>


                            </div>
                            <!-- END Introduction -->

                            <!-- Functionality -->
                            <div id="faq2" class="mb-5" role="tablist" aria-multiselectable="true">
                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h1">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q1" aria-expanded="true" aria-controls="faq2_q1">@lang('security.title2')</a>
                                    </div>
                                    <div id="faq2_q1" class="collapse" role="tabpanel" aria-labelledby="faq2_h1" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security2')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h2">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q2" aria-expanded="true" aria-controls="faq2_q2">@lang('security.title3')</a>
                                    </div>
                                    <div id="faq2_q2" class="collapse" role="tabpanel" aria-labelledby="faq2_h2" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security3')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h3">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q3" aria-expanded="true" aria-controls="faq2_q3">@lang('security.title4')</a>
                                    </div>
                                    <div id="faq2_q3" class="collapse" role="tabpanel" aria-labelledby="faq2_h3" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security4')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h3">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q4" aria-expanded="true" aria-controls="faq2_q4">@lang('security.title5')</a>
                                    </div>
                                    <div id="faq2_q4" class="collapse" role="tabpanel" aria-labelledby="faq2_h4" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security5')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h5">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q5" aria-expanded="true" aria-controls="faq2_q5">@lang('security.title6')</a>
                                    </div>
                                    <div id="faq2_q5" class="collapse" role="tabpanel" aria-labelledby="faq2_h5" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security6')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h3">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q6" aria-expanded="true" aria-controls="faq2_q6">@lang('security.title7')</a>
                                    </div>
                                    <div id="faq2_q6" class="collapse" role="tabpanel" aria-labelledby="faq2_h6" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security7')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h3">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q7" aria-expanded="true" aria-controls="faq2_q7">@lang('security.title8')</a>
                                    </div>
                                    <div id="faq2_q7" class="collapse" role="tabpanel" aria-labelledby="faq2_h7" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security8')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h8">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q8" aria-expanded="true" aria-controls="faq2_q3">@lang('security.title9')</a>
                                    </div>
                                    <div id="faq2_q8" class="collapse" role="tabpanel" aria-labelledby="faq2_h8" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security9')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h9">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q9" aria-expanded="true" aria-controls="faq2_q9">@lang('security.title10')</a>
                                    </div>
                                    <div id="faq2_q9" class="collapse" role="tabpanel" aria-labelledby="faq2_h9" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security10')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h10">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q10" aria-expanded="true" aria-controls="faq2_q10">@lang('security.title11')</a>
                                    </div>
                                    <div id="faq2_q10" class="collapse" role="tabpanel" aria-labelledby="faq2_h10" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security11')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h11">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q11" aria-expanded="true" aria-controls="faq2_q11">@lang('security.title12')</a>
                                    </div>
                                    <div id="faq2_q11" class="collapse" role="tabpanel" aria-labelledby="faq2_h11" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security12')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h12">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q12" aria-expanded="true" aria-controls="faq2_q12">@lang('security.title13')</a>
                                    </div>
                                    <div id="faq2_q12" class="collapse" role="tabpanel" aria-labelledby="faq2_h12" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security13')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h13">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q13" aria-expanded="true" aria-controls="faq2_q13">@lang('security.title14')</a>
                                    </div>
                                    <div id="faq2_q13" class="collapse" role="tabpanel" aria-labelledby="faq2_h13" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security14')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h14">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q14" aria-expanded="true" aria-controls="faq2_q14">@lang('security.title15')</a>
                                    </div>
                                    <div id="faq2_q14" class="collapse" role="tabpanel" aria-labelledby="faq2_h14" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security15')</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h15">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q15" aria-expanded="true" aria-controls="faq2_q15">@lang('security.title16')</a>
                                    </div>
                                    <div id="faq2_q15" class="collapse" role="tabpanel" aria-labelledby="faq2_h15" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security16')</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="block block-bordered mb-1">
                                    <div class="block-header block-header-default" role="tab" id="faq2_h16">
                                        <a class="text-muted" data-toggle="collapse" data-parent="#faq2" href="#faq2_q16" aria-expanded="true" aria-controls="faq2_q16">@lang('security.title17')</a>
                                    </div>
                                    <div id="faq2_q16" class="collapse" role="tabpanel" aria-labelledby="faq2_h16" data-parent="#faq2">
                                        <div class="block-content">
                                            <p>@lang('security.security17')</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12 py-4" style="text-align: center">
                                <a class="font-size-sm" href="{{ route('login') }}"><i class="fa fa fa-reply"> </i> {{ __('generics.return') }}</a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
