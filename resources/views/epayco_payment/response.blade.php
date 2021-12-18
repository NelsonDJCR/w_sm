@extends('layouts.simple')
@yield('css_before')
<link rel="stylesheet" href="{{asset('css/flag-icon.css')}}">

@section('content')


    <!-- Page Content -->
    <div class="hero-static d-flex align-items-center">

        <div class="tint" style="background-image:url({{ asset('images/generics/texture.png') }});background-repeat:repeat;background-position:center center;opacity:1;">
        </div>
        <div class="w-100">
            <!-- Sign In Section -->


            <div class="content content-full bg-white" style="background-color: #ffffffe3 !important">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-6 py-4">

                        <!-- Header -->
                        <div class="text-center">
                            <p class="mb-2">
                                <img class="rounded" style="max-height: 50px" src="{{URL::asset('images/icon/smirrow-icon.png')}}" alt="logo">
                            </p>

                            @if(!is_null($serviceRequest))
                                <!-- Page Content -->
                                <div class="content row ">
                                    <!-- Invoice -->
                                    <div class="col-sm-12">
                                        <div class="block block-rounded">
                                            <div class="block-content block-content-full">
                                                <h3 class="block-title">@lang('generics.request') #{{$serviceRequest->consecutive}}</h3>

                                                <div class="font-size-h2 font-w400 text-dark">@lang('generics.total'): ${{number_format($serviceRequest->total_value)}}</div>
                                                <br>

                                                @if($response=='Aceptada')
                                                    <h3 class="block-title">@lang('generics.paymentSuccess')</h3>
                                                @elseif($response=='Rechazada')
                                                    <h3 class="block-title">@lang('generics.paymentRejected')</h3>
                                                @elseif($response=='Pendiente')
                                                    <h3 class="block-title">@lang('generics.paymentPending')</h3>
                                                @elseif($response=='Fallida')
                                                    <h3 class="block-title">@lang('generics.failed')</h3>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Page Content -->
                            @endif


                        </div>
                        <!-- END Header -->



                        <!-- Footer -->
                        <div class="font-size-sm text-center text-muted py-3">
                            <strong class="text-black">{{config('app.name')}}</strong> &copy; <span data-toggle="year-copy"></span>&nbsp;&nbsp;
                        </div>
                        <!-- END Footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
                <!-- END Page Content -->
@endsection
