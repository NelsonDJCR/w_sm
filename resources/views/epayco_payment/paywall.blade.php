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


                            <!-- Page Content -->
                            <div class="content row ">
                                <!-- Invoice -->
                                <div class="col-sm-12">
                                    <div class="block block-rounded">
                                        <div class="block-content block-content-full">
                                            <h3 class="block-title">@lang('generics.request') #{{$serviceRequest->consecutive}}</h3>

                                            <div class="font-size-h2 font-w400 text-dark">@lang('generics.total'): ${{number_format($serviceRequest->total_value)}}</div>
                                            <br>

                                            @if($serviceRequest->state==3)
                                                <a href="#" class="btn btn-smirrow push" id="pay_button"><i class="icon-corp-card"></i> @lang('generics.pay')</a>

                                                @push('scripts')
                                                    <script type="text/javascript" src="https://checkout.epayco.co/checkout.js"></script>

                                                    <script>
                                                        let handler = ePayco.checkout.configure({
                                                            key: '8bcf8deb417c45dbc5f69965f478a38ebd0727c7',
                                                            test: true,
                                                        });

                                                        let data = {
                                                            //Parametros compra (obligatorio)
                                                            name: "Servicios ",
                                                            description: "Servicios ",
                                                            invoice: "{{$serviceRequest->id}}",
                                                            currency: "cop",
                                                            amount: "{{round($serviceRequest->total_value)}}",
                                                            tax_base: "0",
                                                            tax: "0",
                                                            country: "co",
                                                            lang: "es",
                                                            //Onpage="false" - Standard="true"
                                                            external: "false",
                                                            //Atributos opcionales
                                                            extra1: "extra1",
                                                            extra2: "extra2",
                                                            extra3: "extra3",
                                                            // paySuccess
                                                            confirmation: "{{'https://smirrow.com/payment-confirmation'}}",
                                                            response: "{{'https://smirrow.com/payment-response-web'}}",
                                                            //Atributos cliente
                                                            name_billing: "{{$serviceRequest->customer->name}}",
                                                            email_billing: "{{$serviceRequest->customer->user->email}}",
                                                            number_doc_billing: "{{$serviceRequest->customer->document_number}}",
                                                            address_billing: "{{ $serviceRequest->customer->address }}}",
                                                        };

                                                        document.querySelector("#pay_button").addEventListener("click", function (event) {
                                                            event.preventDefault();
                                                            handler.open(data);
                                                        }, false);

                                                    </script>
                                                @endpush
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Page Content -->
                            

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
