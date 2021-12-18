@extends('layouts.customer')

@include('includes.datatables')

@section('content')

    @push('scripts')
        <script src="{{ asset('js/plugins/raty-js/jquery.raty.js') }}"></script>
        <script>
            !function(t){var e={};function n(a){if(e[a])return e[a].exports;var r=e[a]={i:a,l:!1,exports:{}};return t[a].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,a){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(n.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(a,r,function(e){return t[e]}.bind(null,r));return a},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=12)}({12:function(t,e,n){t.exports=n(13)},13:function(t,e){function n(t,e){for(var n=0;n<e.length;n++){var a=e[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}var a=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t)}var e,a,r;return e=t,r=[{key:"initRating",value:function(){jQuery.fn.raty.defaults.starType="i",jQuery.fn.raty.defaults.hints=["Just Bad!","Almost There!","It’s ok!","That’s nice!","Incredible!"],jQuery(".js-rating").each(function(t,e){var n=jQuery(e);n.raty({score:n.data("score")||0,number:n.data("number")||5,cancel:n.data("cancel")||!1,target:n.data("target")||!1,targetScore:n.data("target-score")||!1,precision:n.data("precision")||!1,cancelOff:n.data("cancel-off")||"fa fa-fw fa-times-circle text-danger",cancelOn:n.data("cancel-on")||"fa fa-fw fa-times-circle",starHalf:n.data("star-half")||"fa fa-fw fa-star-half text-warning",starOff:n.data("star-off")||"fa fa-fw fa-star text-muted",starOn:n.data("star-on")||"fa fa-fw fa-star text-warning",click:function(t,e){}})})}},{key:"init",value:function(){this.initRating()}}],(a=null)&&n(e.prototype,a),r&&n(e,r),t}();jQuery(function(){a.init()})}});
        </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush

    @php($stateGlobal=0)
    @foreach($serviceRequest->serviceRequestOfferor as $serviceRequestOfferor)
        @php($stateGlobal=$serviceRequestOfferor->state)

        <!-- Modal Calificación -->
        <div class="modal fade" id="modal-block-popout-{{$serviceRequestOfferor->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title"> @lang('generics.qualify') </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block">
                            <div class="block-content">
                                <div class="text-center">
                                    <img class="img-avatar img-avatar" src="{{$serviceRequestOfferor->offeror->user->getAvatar()}}" alt="">
                                    <p>{{$serviceRequestOfferor->offeror->user->nick_name}}</p>
                                </div>
                                {!! Form::open(['route'=>'offeror_ratings.store', 'method'=>'POST', 'role' => 'form']) !!}
                                <input type="hidden" name="customer_id" value="{{ auth()->user()->customer->id }}">
                                <input type="hidden" name="offeror_id" value="{{ $serviceRequestOfferor->offeror_id }}">
                                <input type="hidden" name="service_request_offeror_id" value="{{ $serviceRequestOfferor->id }}">
                                <div class="form-group" style="text-align: center">
                                    <div class="js-rating" data-star-on="fa fa-fw fa-3x fa-star text-warning" data-star-off="fa fa-fw fa-3x fa-star text-muted" style="cursor: pointer;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::text('comments','',['class'=>'form-control', 'placeholder'=>__('generics.comments')]) !!}
                                </div>
                                <div class="form-group" style="text-align: right">
                                    <button type="submit" class="btn btn-smirrow"> <i class="fa fa-check-circle"></i> @lang('generics.qualify')</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Mensajes -->
        <div class="modal fade" id="modal-block-popout-message-{{$serviceRequestOfferor->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout"
             aria-hidden="true">
            @push('scripts')
                <script src="{{ asset('js/plugins/raty-js/jquery.raty.js') }}"></script>
                <script>
                    !function(t){var e={};function n(a){if(e[a])return e[a].exports;var r=e[a]={i:a,l:!1,exports:{}};return t[a].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,a){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:a})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var a=Object.create(null);if(n.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(a,r,function(e){return t[e]}.bind(null,r));return a},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=12)}({12:function(t,e,n){t.exports=n(13)},13:function(t,e){function n(t,e){for(var n=0;n<e.length;n++){var a=e[n];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(t,a.key,a)}}var a=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t)}var e,a,r;return e=t,r=[{key:"initRating",value:function(){jQuery.fn.raty.defaults.starType="i",jQuery.fn.raty.defaults.hints=["Just Bad!","Almost There!","It’s ok!","That’s nice!","Incredible!"],jQuery(".js-rating").each(function(t,e){var n=jQuery(e);n.raty({score:n.data("score")||0,number:n.data("number")||5,cancel:n.data("cancel")||!1,target:n.data("target")||!1,targetScore:n.data("target-score")||!1,precision:n.data("precision")||!1,cancelOff:n.data("cancel-off")||"fa fa-fw fa-times-circle text-danger",cancelOn:n.data("cancel-on")||"fa fa-fw fa-times-circle",starHalf:n.data("star-half")||"fa fa-fw fa-star-half text-warning",starOff:n.data("star-off")||"fa fa-fw fa-star text-muted",starOn:n.data("star-on")||"fa fa-fw fa-star text-warning",click:function(t,e){}})})}},{key:"init",value:function(){this.initRating()}}],(a=null)&&n(e.prototype,a),r&&n(e,r),t}();jQuery(function(){a.init()})}});
                </script>
            @endpush
            <div class="modal-dialog modal-dialog-popout" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title"> @lang('generics.messages')</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            @php($messages = $serviceRequestOfferor->getMessages())
                            <div style="padding:0 5%">
                                @foreach($messages as $message)
                                    <div class="row" style="padding-bottom: 5%;">
                                        <div class="col-xl-3 ">
                                            <p style="margin-bottom: 0.3rem;"></p>
                                        </div>
                                    </div>
                                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                                        <div class="flex-00-auto">
                                            <i class="fa fa-fw fa-comment"></i>
                                        </div>
                                        <div class="flex-fill ml-3">
                                            <p class="mb-0"><b>{{ $message->user_sender_name}}:</b> <br/> {{ $message->message }} </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="block">
                            <div class="block-content">
                                {!! Form::open(['route'=>'service-request-messages.store', 'method'=>'POST', 'role' => 'form']) !!}
                                <input type="hidden" name="service_request_offeror_id"
                                       value="{{ $serviceRequestOfferor->id }}">
                                <input type="hidden" name="user_sender_id"
                                       value="{{ auth()->user()->id }}">
                                <input type="hidden" name="user_sender_name"
                                       value="{{ auth()->user()->name }}">
                                <div class="form-group">
                                    {!! Form::text('message','',['class'=>'form-control', 'placeholder'=>__('generics.message')]) !!}
                                </div>
                                <div class="form-group" style="text-align: right">
                                    <button type="submit" class="btn btn-smirrow"><i
                                                class="fa fa-check-circle"></i> @lang('generics.send_message')</button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endforeach
    <!-- Page Content -->
    <div class="content row ">
        <div class="col-md-6 col-sm-12">
            <div class="block block-rounded">
                <div class="block-header border-bottom">
                    <h3 class="block-title">@lang('generics.request') #{{$serviceRequest->consecutive}}</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            @include('client_views.service_request.common.request_status')
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">

                    <address class="h5">
                        @lang('generics.date'): {{\Carbon\Carbon::parse($serviceRequestOfferor->initial_date)->format('Y-m-d g:i a')}}<br>
                        @lang('generics.city'): {{$serviceRequestOfferor->ServiceRequest->city->name}}<br>
                        @lang('generics.address'): {{$serviceRequestOfferor->ServiceRequest->address}}<br>
                        @lang('generics.contact_name'): {{$serviceRequestOfferor->ServiceRequest->contact}}<br>
                        @lang('generics.contact_phone'): {{$serviceRequestOfferor->ServiceRequest->phone_contact}}<br>
                    </address>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-rounded">
                <div class="block-content block-content-full">

                    <div id="my-block" class="block block-bordered block-mode-hidden">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">@lang('generics.description')</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i class="si si-arrow-down"></i></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p align="justify">{{$serviceRequest->description}}</p>
                            <p align="justify">{{$serviceRequest->data}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invoice -->
        <div class="col-sm-12">
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <!-- Table -->
                    <div class="table-responsive ">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center d-none d-sm-table-cell" >
                                    <i class="far fa-user"></i>
                                </th>
                                <th class="text-center" >@lang('generics.services')</th>
                                <th class="text-center d-none d-sm-table-cell" >@lang('generics.state')</th>
                                <th class="text-right d-none d-sm-table-cell" >@lang('generics.amount')</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $Numero=1; ?>
                            @foreach($serviceRequest->serviceRequestOfferor as $serviceRequestOfferor)
                                <tr>
                                    <td class="text-center d-none d-sm-table-cell">
                                        <img class="img-avatar img-avatar" src="{{$serviceRequestOfferor->offeror->user->getAvatar()}}" alt="">
                                        <br/><button type="button" class="badge badge-primary" data-toggle="modal" data-target="#modal-block-popout-message-{{$serviceRequestOfferor->id}}"> @lang('generics.messages')
                                            @if (count($serviceRequestOfferor->getMessages()) > 0)
                                                <span class="badge badge-info badge-pill">{{count($serviceRequestOfferor->getMessages())}}</span>
                                            @endif</button>
                                    </td>
                                    <td class="">
                                        <b class="d-sm-none"> ${{number_format($serviceRequestOfferor->total_value, 0)}}</b>
                                        @if($serviceRequestOfferor->state>=3)
                                            <span class="badge badge-success d-sm-none"><i class="fa fa-check"></i> @lang('generics.accepted')!</span>
                                        @elseif($serviceRequestOfferor->state==2)
                                            <span class="badge badge-danger d-sm-none"><i class="fa fa-times-circle"></i> @lang('generics.refuse')</span>
                                        @else
                                            <span class="badge badge-warning d-sm-none"><i class="fa fa-exclamation-circle"></i> @lang('generics.pending')</span>
                                        @endif
                                        <br class="d-sm-none">
                                        <b class="font-w600 font-size-sm"> @lang('generics.offeror'): {{$serviceRequestOfferor->offeror->user->name}}, @lang('generics.date'): {{$serviceRequestOfferor->initial_date}} </b>
                                        <ul >
                                        @foreach(json_decode($serviceRequestOfferor->data,true)['products'] as $item)
                                            <li>(${{number_format($item['total'])}}) {{$item['quantity']}} x  {{$item['name']}} </li>
                                        @endforeach
                                        </ul>
                                    </td>
                                    <td class="text-center d-none d-sm-table-cell ">
                                        @if($serviceRequestOfferor->state>=3)
                                            <span class="badge badge-success"><i class="fa fa-check"></i> @lang('generics.accepted')!</span>
                                        @elseif($serviceRequestOfferor->state==2)
                                            <span class="badge badge-danger"><i class="fa fa-times-circle"></i> @lang('generics.refuse')</span>
                                        @else
                                            <span class="badge badge-warning"><i class="fa fa-exclamation-circle"></i> @lang('generics.pending')</span>
                                        @endif
                                            @if($serviceRequestOfferor->state==5)
                                                <br/><button type="button" class="badge badge-danger" data-toggle="modal" data-target="#modal-block-popout-{{$serviceRequestOfferor->id}}"> @lang('generics.qualify') aquí </button>
                                            @endif
                                    </td>
                                    <td class="text-right d-none d-sm-table-cell">
                                        ${{number_format($serviceRequestOfferor->total_value, 0)}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="font-size-h2 font-w400 text-dark">@lang('generics.total'): ${{number_format($serviceRequest->total_value)}}</div>
                     <br>

                    @if($serviceRequest->state==3)
                        <a href="#" class="btn btn-smirrow push" onclick="pay()"><i class="icon-corp-card"></i> @lang('generics.pay')</a>
                        {{-- id="pay_button" --}}
                        @push('scripts')
                        <script type="text/javascript" src="https://checkout.epayco.co/checkout.js"></script>
                        <script type="text/javascript" src="https://checkout.wompi.co/widget.js"></script>

                        <script>

                            

                            // checkout wompi
                            
                            function pay() {



                                $.post('https://www.smirrow.com/create_reference', {
                                    _token: "{{ csrf_token() }}",
                                    ref_id:'{{$serviceRequest->id}}',
                                }).done(function(e){
                                    var reference = e
                                    var wompi = new WidgetCheckout({
                                        currency: 'COP',
                                        amountInCents:{{round($serviceRequest->total_value)}}00,
                                        reference:reference,
                                        publicKey:'pub_prod_9IfibPjOQM2EAemVAxLsjN4A1AR28L2f',
                                        // pub_prod_9IfibPjOQM2EAemVAxLsjN4A1AR28L2f
                                        // pub_test_mmpuSCCXIN6j2eWLA8dOmcFhyXeiAfHp
                                    })
                                    wompi.open(function (result) {
                                        var transaction = result.transaction
                                        console.log(transaction.status)
                                        if(transaction.status == 'APPROVED'){
                                            $.post('https://www.smirrow.com/payment-confirmation', {
                                                _token:"{{ csrf_token() }}",
                                                state:5,
                                                ref_id:'{{$serviceRequest->id}}',
                                                ref_wompi:transaction.reference,
                                            }).done(function(e){

                                                Swal.fire({
                                                    title:'¡Perfecto!',
                                                    text:'La transacción ha sido aceptada exitosamente',
                                                    icon:'success',
                                                    confirmButtonColor: '#E61879',
                                                }).then(function(){ location.reload() });
                                            });
                                        }else{
                                            Swal.fire('Error en la transacción','Puedes intentarlo nuevamente','error')
                                        }
                                    })
                                });
                                return false;
                            }
                            // end checkout wompi


                            let handler = ePayco.checkout.configure({
                                key: 'f55487823d4695e3c96193e5d30dcac9',
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
                                confirmation: "{{'https://smirrow.com/payment-confirmation'}}",
                                response: "{{'https://smirrow.com/payment-response'}}",
                            //Atributos cliente
                            name_billing: "{{$serviceRequest->customer->name}}",
                                email_billing: "{{$serviceRequest->customer->user->email}}",
                                number_doc_billing: "{{$serviceRequest->customer->document_number}}",
                                address_billing: "Calle 123",
                            };

                                    document.querySelector("#pay_button").addEventListener("click", function (event) {
                                        event.preventDefault();
                                        handler.open(data);
                                    }, false);

                        </script>
                        @endpush


                    @elseif($serviceRequest->state<=3)
                    <a href="#" class="btn btn-secondary push" style="cursor:context-menu" ><i class="fa fa-times-circle"></i> @lang('generics.Esperando_aprobacion') </a>
                    @elseif($serviceRequest->state==4)
                    <a href="{{route('service_request.confirm_payment',$serviceRequest->id)}}" class="btn btn-smirrow push"> @lang('generics.confirm') @lang('generics.payment') </a>
                    @elseif($serviceRequest->state==7)
                    {{-- <button class="btn btn-secondary push" disabled>Pago pendiente</button> --}}
                    @elseif($serviceRequest->state==5)
                        <a href="{{route('service_request.confirm_realization',$serviceRequest->id)}}" class="btn btn-smirrow push"> @lang('generics.confirm') @lang('generics.realization') </a>
                    @endif

                    <a href="#" onclick="One.helpers('print');" class="btn btn-secondary push"><i class="fa fa-print"></i> @lang('generics.print') @lang('generics.request') </a>

                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->

@endsection


