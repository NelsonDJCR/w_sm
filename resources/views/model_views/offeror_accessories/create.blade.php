@extends('layouts.offerors')

@section('content')

    <!-- Modal Simulador -->
    <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title"> @lang('generics.create_service') </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block">
                        <div class="block-content">
                            <div class="block-content">
                                {!! Form::open(['route'=>'offeror_accessories.storeAccessory', 'method'=>'POST', 'role' => 'form']) !!}

                                {!! Form::hidden('type', 1) !!}
                                {!! Form::hidden('description', 'Agregado por ofertante') !!}
                                {!! Form::hidden('tags', 'ofertante') !!}
                                <div class="form-group">
                                    {!! Form::label('name', __('generics.name')) !!}
                                    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre del servicio', 'required' => 'required']) !!}
                                </div>
                                <div class="form-group" style="text-align: center">
                                    <a href="{{route('services.index')}}">
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            @lang('generics.cancel')
                                        </button>
                                    </a>
                                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-content">
                {!! Form::open(['route'=>'offeror_accessories.store', 'method'=>'POST', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value="{{ $offeror->id }}">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('accessory_id', __('generics.accessory')) !!}
                            {!! Form::select('accessory_id', $accessories, old('accessory_id'), ['class'=>'form-control  js-select2', 'placeholder'=>'Seleccione', 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="form-group">
                            <div class="block-options">
                                {!! Form::label('service_id', __('generics.not_found')) !!}
                                <small>@lang('messages.services_help')</small>
                                <br>
                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-block-popout"> @lang('generics.create') @lang('generics.accessory') </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('description', __('generics.description')) !!}
                            {!! Form::textarea('description',null,['class'=>'form-control','maxlength'=>'500', 'placeholder'=>__('messages.services_description'), 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
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
                    <a class="btn btn-secondary" href="{{route('offeror_accessories.index', array('id'=> $offeror->id))}}">
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
