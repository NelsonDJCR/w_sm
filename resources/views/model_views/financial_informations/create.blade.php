@extends('layouts.offerors')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>jQuery(function(){ One.helpers(['datepicker']); });</script>
@endpush

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-content">
                {!! Form::open(['route'=>'financial-informations.store', 'method'=>'POST', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value="{{ $offeror->id }}">

                <div class="form-group">
                    {!! Form::label('bank_name', __('generics.bank_name')) !!}
                    {!! Form::select('bank_id', $banks, old('bank_id'), ['class'=>'form-control', 'placeholder'=>__('generics.bank_name'), 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('account_number', __('generics.account_number')) !!}
                    {!! Form::text('number_account', null, ['class'=>'form-control', 'placeholder'=>__('generics.account_number'), 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('account_type', __('generics.account_type')) !!}
                    {!! Form::select('type_account', ['Ahorros' => 'Ahorros', 'Corriente' => 'Corriente', 'Nomina' => 'Nomina'], null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('owner_account', __('generics.owner_account')) !!}
                    {!! Form::text('owner_account', $offeror->user->name, ['class'=>'form-control', 'placeholder'=>__('generics.owner_account'), 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('id_owner_account', __('generics.id_owner_account')) !!}
                    {!! Form::text('id_owner_account', $offeror->document_number, ['class'=>'form-control', 'placeholder'=>__('generics.id_owner_account'), 'required' => 'required']) !!}
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('financial_informations.index', array('id'=> $offeror->id))}}">
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
