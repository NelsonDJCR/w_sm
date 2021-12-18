@extends('layouts.customer')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script>jQuery(function () {
            One.helpers(['datepicker', 'masked-inputs']);
        });</script>
@endpush

@section('content')

    <!-- Page Content -->
    <div class="content">
        @if ($customer->validated == 0)
            
            @if(auth()->user()->customer->getValidation(auth()->user()->id)=="Process")
                <a href="{{route('validations.index_customer', auth()->user()->customer)}}">
                    <div class="alert alert-warning alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-w300 my-2"><b> <i class="fa fa-fw fa-check-circle"></i> @lang('messages.process_validation')</b></h3>
                        <p class="mb-0">@lang('messages.warning_customer_validation')</p>
                        <p class="mb-0">@lang('messages.users_process_validation')</p>
                    </div>
                </a>
            @endif
            @if(auth()->user()->customer->getValidation(auth()->user()->id)=="Reject")
                <a href="{{route('validations.index_customer', auth()->user()->customer)}}">
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="alert-heading font-w300 my-2"><b> <i class="fa fa-fw fa-check-circle"></i> @lang('messages.rejected_documents')</b></h3>
                        <p class="mb-0">@lang('messages.warning_customer_validation')</p>
                        <p class="mb-0">@lang('messages.users_reject_validation')</p>
                    </div>
                </a>
            @endif
        @endif
        {!! Form::open(['route'=>'service_request.create', 'method'=>'POST', 'role' => 'form']) !!}
        <div class="row">
            @if($cartContent->isEmpty())
                <p>{{__('messages.empty_stage')}}</p>
            @endif
                    @foreach($models as $model)
                        <div class="col-sm-12 col-md-6 col-xl-4 js-appear-enabled animated zoomIn" data-toggle="appear" data-class="animated zoomIn">
                            <!-- Team Member -->
                            <div class="block">
                                <div class="block-header">
                                    <a href="{{route('offerors.show', $model['items'][0]->model->offeror)}}">
                                        <h3 class="block-title">{{$model['items'][0]->model->offeror->user->name}} ID# {{$model['items'][0]->model->offeror->id}}</h3>
                                    </a>
                                    <div class="block-options">

                                    </div>
                                </div>
                                <div class="block-content block-content-full text-center bg-image" style="background-image: url('{{$model['items'][0]->model->offeror->albums[0]->getCover()}}');">
                                    <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{$model['items'][0]->model->offeror->user->getAvatar()}}" alt="">
                                </div>
                                <div class="block-content font-size-sm">
                                    {{__('messages.you_will_request')}}
                                    <ul>
                                        @foreach($model['items'] as $product)
                                            <li>
                                                {{$product->name}} {{$product->qty}} | ${{number_format($product->total, 0)}} {{$product->model->currency->code}}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <br>
                                    <div class="form-group">
                                        <label for="from-date-{{$model['items'][0]->model->offeror->Id}}">Fecha y Hora de inicio</label>
                                        <input type="text" required="required" class=" form-control" id="from-date-{{$model['items'][0]->model->offeror->id}}" name="from-date-{{$model['items'][0]->model->offeror->id}}" placeholder="{{__('generics.date')}}" data-date-start-date = "1d" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" >
                                        <input type="time" required="required" class="form-control" id="from-hour-{{$model['items'][0]->model->offeror->id}}" name="from-hour-{{$model['items'][0]->model->offeror->id}}" placeholder="{{__('generics.hour')}}"  data-date-format="HH-ii"  >
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- END Team Member -->
                @push('scripts')
                    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
                    <!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
                    <script>jQuery(function(){ One.helpers(['datepicker']); });
                        $(function () {
                            $('#from-date-{{$model['items'][0]->model->offeror->id}}').datepicker({
                                startDate: '+0d',
                                endDate: '+3m',
                                format: "yy-mm-dd",
                                datesDisabled:@php echo json_encode($model['items'][0]->model->offeror->getDatesDisabled()) @endphp,
                                daysOfWeekDisabled:@php echo json_encode($model['items'][0]->model->offeror->getDaysOfWeekDisabled()) @endphp
                            });
                        });
                    </script>

                @endpush
                @endforeach

            <div class="col-md-6 col-sm-12 col-xl-4 bg-white">
                <div class="content">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('city_id', __('generics.city')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::select('city_id', $cities, null, ['class'=>'js-select2 form-control form-control', 'placeholder'=>__('generics.city'), 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('address', __('generics.address')) !!}
                            {!! Form::text('address',null,['class'=>'form-control', 'placeholder'=>__('generics.address'), 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('contact', __('generics.contact_name')) !!}
                            {!! Form::text('contact',null,['class'=>'form-control', 'placeholder'=>__('generics.contact_name'), 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('phone_contact', __('generics.contact_phone')) !!}
                            {!! Form::text('phone_contact',null,['class'=>'form-control', 'placeholder'=>__('generics.contact_phone'), 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="obser">{{__('messages.observation_request')}}</label>
                            <textarea class="form-control" id="obser" name="obser" rows="4" placeholder="{{__('generics.observations')}}" required="required"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3>Total valor</h3>
                        <p>${{Cart::total()}}</p>

                        <div class="btn-group">
                            <button type="submit"  class="btn btn-sm btn-smirrow js-tooltip-enabled"  data-toggle="tooltip">
                                <i class="fa fa-fw fa-check-circle"></i> {{__('buttons.make_request')}}
                            </button>
                        </div>
                        <div class="pb-2"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <hr>

    <!-- END Page Content -->
    </div>
@endsection
@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
    <style>
        .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
            text-decoration: line-through;
            color: #ccc;
        }
        .day
        {
            color: #0a0302;
        }
    </style>
@endsection
