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
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Main Title <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Subtitle</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Examples</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Blank</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Editar Información</h3>
            </div>



            <div class="block-content">

                {!! Form::open(['route'=>['financial-informations.update',$financialInformation], 'method'=>'PUT', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value="{{ $financialInformation->offeror_id }}">

                <div class="form-group">
                    {!! Form::label('bank_name', __('generics.bank_name')) !!}
                    {!! Form::select('bank_id', $banks, $financialInformation->bank->id, ['class'=>'form-control', 'placeholder'=>'Nombre del Banco', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('account_number', __('generics.account_number')) !!}
                    {!! Form::text('number_account', $financialInformation->number_account, ['class'=>'form-control', 'placeholder'=>'Número de la Cuenta', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('account_type', __('generics.account_type')) !!}
                    {!! Form::select('type_account', ['Ahorros' => 'Ahorros', 'Corriente' => 'Corriente', 'Nomina' => 'Nomina'], $financialInformation->type_account, ['class'=>'form-control', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('owner_account', __('generics.owner_account')) !!}
                    {!! Form::text('owner_account', $financialInformation->owner_account, ['class'=>'form-control', 'placeholder'=>'Nombre del titular de la cuenta', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('id_owner_account', __('generics.id_owner_account')) !!}
                    {!! Form::text('id_owner_account', $financialInformation->id_owner_account, ['class'=>'form-control', 'placeholder'=>'Documento del titular de la cuenta', 'required' => 'required']) !!}
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('offerors.show', $financialInformation->offeror_id)}}#btabs-static-financial_information">
                        @lang('generics.cancel')
                    </a>
                    {!! Form::submit('Editar', ['class' => 'btn btn-smirrow']) !!}

                </div>

                {!! Form::close() !!}
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
