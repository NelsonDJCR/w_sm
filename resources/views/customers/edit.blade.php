@extends('layouts.backend')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>jQuery(function(){ One.helpers(['datepicker']); });</script>
@endpush

@section('content')

    <!-- Hero -->
    <div class="content">

        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h2 class="flex-sm-fill h3 my-2">
                @lang('generics.customers')
            </h2>
            <small>@lang('generics.required_fields')</small>
        </div>

    <!-- END Hero -->
    @if ($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif

    <!-- Page Content -->

        {!! Form::open(['route'=>['customers.update', $customer->id], 'method'=>'PUT', 'role' => 'form']) !!}

            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">Editar Perfil</h3>
                </div>

                <div class="block-content">

                    <h2 class="content-heading border-bottom">@lang('generics.personal_information')</h2>
                    <div class="row">
                        <div class="form-group">
                            {!! Form::hidden('user_id', $customer->user_id) !!}
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('customer_type', __('generics.person_type')) !!}
                                {!! Form::select('customer_type', ['Natural' => __('generics.natural'), 'Juridical' => __('generics.juridical')],$customer->customer_type,['class'=>'form-control', 'required' => 'required'])!!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('name', __('generics.name')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('name',$customer->user->name,['class'=>'form-control', 'placeholder'=>__('generics.name'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('nick_name', __('generics.nick')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('nick_name',$customer->user->nick_name, ['class'=>'form-control', 'placeholder'=>__('generics.nick'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('document', __('generics.document_type') ) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('document', ['RC' => 'Registro Civil','TI' => 'Tarjeta de identidad','CC' => 'Cedula de Ciudadanía', 'CE' => 'Cedula de Extranjeria', 'PS' => 'Pasaporte', 'NIT' => 'NIT'],$customer->document,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('document_number', __('generics.document_number')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('document_number',$customer->document_number,['class'=>'form-control', 'placeholder'=>__('generics.document_number'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('birthday', __('generics.birthday')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('birthday',$customer->birthday,['class'=>'js-datepicker form-control', 'required' => 'required', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'-18y', 'language'=>'es']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('language', __('generics.language')) !!}
                                {!! Form::select('languages[]', $languages, $languages_seleccionados , ['multiple'=>'multiple','class'=>'form-control js-select2']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('email', __('generics.email')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::email('email',$customer->user->email,['class'=>'form-control', 'placeholder'=>__('generics.email'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('phone', __('generics.phone')) !!}
                                {!! Form::text('phone',$customer->user->phone,['class'=>'form-control', 'placeholder'=>__('generics.phone')]) !!}
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading border-bottom">@lang('generics.location')</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('country_code', __('generics.country')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('country_code', $countries, $customer->user->country_code, ['class'=>'form-control', 'placeholder'=>__('generics.country_id')]) !!}
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading border-bottom">@lang('generics.contact_information')</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('contact_name', __('generics.contact_name')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('contact_name',$customer->contact_name,['class'=>'form-control', 'placeholder'=>__('generics.contact_name'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('contact_phone', __('generics.contact_phone')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('contact_phone',$customer->contact_phone,['class'=>'form-control', 'placeholder'=>__('generics.contact_phone'), 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading border-bottom">@lang('generics.security')</h2>
                    <div class="row">
                        <div class="col-xl-12 col-lg-6">
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-control-lg mb-2">
                                    {!! Form::checkbox('state', 1, $customer->state, ['class'=>'custom-control-input', 'checked', 'id'=>'state']) !!}
                                    {!! Form::label('state', __('generics.state'), ['class' => 'custom-control-label']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="text-align: center">
                        <a href="{{route('customers.index')}}">
                            <button type="button" class="btn btn-secondary btn-sm">
                                @lang('generics.cancel')
                            </button>
                        </a>
                        {!! Form::submit(__('generics.save'), ['class' => 'btn btn-smirrow btn-sm']) !!}

                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection

