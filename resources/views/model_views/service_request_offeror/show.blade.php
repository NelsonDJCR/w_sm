@extends('layouts.offerors')

@include('includes.datatables')

@section('content')
    <!-- Page Content -->


    <!-- Modal Calificación -->
    <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout"
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
                                <img class="img-avatar img-avatar" src="{{$serviceRequestOfferor->serviceRequest->customer->user->getAvatar()}}" alt="">
                                <p>{{$serviceRequestOfferor->serviceRequest->customer->user->nick_name}}</p>
                            </div>
                            {!! Form::open(['route'=>'customer_ratings.store', 'method'=>'POST', 'role' => 'form']) !!}
                            <input type="hidden" name="offeror_id" value="{{ auth()->user()->offeror->id }}">
                            <input type="hidden" name="customer_id" value="{{ $serviceRequestOfferor->serviceRequest->customer_id }}">
                            <input type="hidden" name="service_request_offeror_id"
                                   value="{{ $serviceRequestOfferor->id }}">
                            <div class="form-group" style="text-align: center">
                                <div class="js-rating" data-star-on="fa fa-fw fa-3x fa-star text-warning"
                                     data-star-off="fa fa-fw fa-3x fa-star text-muted" style="cursor: pointer;">
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::text('comments','',['class'=>'form-control', 'placeholder'=>__('generics.comments')]) !!}
                            </div>
                            <div class="form-group" style="text-align: right">
                                <button type="submit" class="btn btn-smirrow"><i
                                            class="fa fa-check-circle"></i> @lang('generics.qualify')</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Mensajes -->
    <div class="modal fade" id="modal-block-popout-message" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout"
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
                        @php($thereAreMessages=0)
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
                                @php($thereAreMessages++)
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
                                   value="{{ auth()->user()->nick_name }}">
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

    <div class="content row">
        <div class="col-md-6 col-sm-12">
            <div class="block block-rounded">
                <div class="block-header border-bottom">
                    <h3 class="block-title">@lang('generics.request') #{{$serviceRequestOfferor->consecutive}}</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            @if($serviceRequestOfferor->state==2)

                                <span class="badge badge-pill badge-danger"> @lang('generics.refuse')</span>
                            @elseif($serviceRequestOfferor->state==3)

                                <span class="badge badge-pill badge-warning"> @lang('generics.accepted')</span>
                            @elseif($serviceRequestOfferor->state==4)

                                <span class="badge badge-pill badge-warning"> @lang('generics.paid')</span>
                            @elseif($serviceRequestOfferor->state==5)

                                <span class="badge badge-pill badge-success"> @lang('generics.realized')</span>
                            @elseif($serviceRequestOfferor->state==6)

                                <span class="badge badge-pill badge-success"> @lang('generics.complete')</span>
                            @elseif($serviceRequestOfferor->state==1)

                                <span class="badge badge-pill badge-warning"> @lang('generics.pending')</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">

                    <address class="h5">
                        @lang('generics.date'): {{\Carbon\Carbon::parse($serviceRequestOfferor->initial_date)->format('Y-m-d g:i a')}}<br>
                        @lang('generics.city'): {{$serviceRequestOfferor->ServiceRequest->city->name}}<br>
                        @lang('generics.address'): {{$serviceRequestOfferor->ServiceRequest->address}}

                    </address>
                    <div id="my-block" class="block block-bordered block-mode-hidden">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">@lang('generics.description')</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                        data-action="content_toggle"><i class="si si-arrow-down"></i></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <p align="justify">{{$serviceRequestOfferor->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="block block-rounded">
                <div class="block-header border-bottom">
                    <h3 class="block-title">@lang('generics.client')</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="media d-flex align-items-center ">
                        <div class="mr-3">
                            <img class="img-avatar"
                                 src="{{ $serviceRequestOfferor->serviceRequest->customer->user->getAvatar()}}"
                                 alt="{{ $serviceRequestOfferor->serviceRequest->customer->user->id }}">
                        </div>
                        <div class="media-body">
                            <address class="h5">
                                {{$serviceRequestOfferor->serviceRequest->customer->user->nick_name}}<br>
                                <div >
                                    @for($i=1; $i<=5; $i++)
                                        @if($serviceRequestOfferor->serviceRequest->customer->getRating() >= $i)
                                            <i class="fa fa-fw fa-1x fa-star text-warning"></i>
                                        @elseif((($i - $serviceRequestOfferor->serviceRequest->customer->getRating()) <  1))
                                            <i class="fa fa-fw fa-1x fa-star-half-alt text-warning"></i>
                                        @else
                                            <i class="fa fa-fw fa-1x fa-star text-muted"></i>
                                        @endif
                                    @endfor
                                   ({{ $serviceRequestOfferor->serviceRequest->customer->getQuantityRating() }})
                                </div>
                                @if($serviceRequestOfferor->state>=4)
                                    {{$serviceRequestOfferor->serviceRequest->customer->user->phone}}<br>
                                    {{$serviceRequestOfferor->serviceRequest->customer->user->email}}<br>
                                @endif
                            </address>
                        </div>
                    </div>
                    @if($serviceRequestOfferor->state>=4)
                        @lang('generics.contact_name'): {{$serviceRequestOfferor->ServiceRequest->contact}}<br>
                        @lang('generics.contact_phone'): {{$serviceRequestOfferor->ServiceRequest->phone_contact}}<br>
                    @endif

                    <div class="block-content">
                        <button type="button" class="btn btn-smirrow" data-toggle="modal"
                                data-target="#modal-block-popout-message"> @lang('generics.messages')
                            @if ($thereAreMessages > 0)
                                <span class="badge badge-info badge-pill">{{$thereAreMessages}}</span>
                            @endif
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="block block-mode-loading-oneui">
                <div class="block-header border-bottom">
                    <h3 class="block-title">@lang('generics.services') </h3>
                </div>
                <div class="block-content block-content-full">

                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                        <thead class="thead-dark">
                        <tr class="text-uppercase">
                            <th class="font-w700">@lang('generics.quantity') </th>
                            <th class="font-w700">@lang('generics.service') </th>
                            <th class="font-w700 text-right" style="width: 120px;">@lang('generics.price') </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(json_decode($serviceRequestOfferor->data,true)['products'] as $item)
                            <tr>
                                <td>{{$item['quantity']}}</td>
                                <td>{{$item['name']}}</td>
                                <td class="text-right">${{number_format($item['base'])}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="block block-mode-loading-oneui">
                <div class="block-header border-bottom">
                    <h3 class="block-title">@lang('generics.values') </h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">@lang('generics.total')</div>
                        <div class="font-size-h2 font-w400 text-dark">
                            ${{number_format($serviceRequestOfferor->offeror_value)}}</div>
                    </div>
                    {!! Form::open(['route'=>'service_request.confirm', 'method'=>'PUT', 'role' => 'form']) !!}
                    <input type="hidden" name="serviceRequest" value="{{$serviceRequestOfferor->serviceRequest->id}}">
                    @if($serviceRequestOfferor->state==1)
                        <button type="submit" class="btn btn-smirrow" name="state"
                                value="3">@lang('generics.confirm')</button>
                        <button type="submit" class="btn btn-smirrow" name="state"
                                value="2">@lang('generics.refuse')</button>
                    @endif
                    {!! Form::close() !!}
                    @if($serviceRequestOfferor->state>=5 AND $serviceRequestOfferor->qualify_customer!=1)
                        <button type="button" class="btn btn-smirrow" data-toggle="modal"
                                data-target="#modal-block-popout"> @lang('generics.qualify')</button>
                    @endif
                </div>
            </div>
        </div>

        <!-- END Page Content -->
@endsection


