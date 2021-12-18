@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-content">

                {!! Form::open(['route'=>'offeror_services.store', 'method'=>'POST', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value="{{ $offeror->id }}">

                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('service_id', __('generics.service')) !!}
                            {!! Form::select('service_id', $services, old('service_id'), ['class'=>'form-control', 'placeholder'=>'Seleccione', 'required' => 'required']) !!}
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('description', __('generics.description')) !!}
                            {!! Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>__('generics.description'), 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('time_unit_id', __('generics.time_units')) !!}
                            <div class="input-group">
                                {!! Form::number('quantity',null,['class'=>'form-control', 'placeholder'=>__('generics.quantity'),  'required' => 'required', 'min'=>1,'max'=>10000]) !!}
                                {!! Form::select('time_unit_id', $time_units, old('time_unit_id'), ['class'=>'form-control', 'placeholder'=>'Seleccione', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('cost', __('generics.fare')) !!}
                            <div class="input-group">
                                {!! Form::number('cost',null,['class'=>'form-control', 'placeholder'=>__('generics.fare'), 'required' => 'required', 'min'=>1,'max'=>10000000]) !!}
                                {!! Form::select('currency_id', $currencies, old('currency_id'), ['class'=>'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('offerors.show', $offeror->id)}}#btabs-static-services">
                        <i class="fa fa-times-circle"></i>
                            @lang('generics.cancel')
                    </a>
                    <button type="submit" class="btn btn-smirrow "> <i class="fa fa-check-circle"></i> @lang('generics.create')</button>
                </div>

                {!! Form::close() !!}


            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
