@extends('layouts.offerors')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">@lang('generics.add') @lang('generics.monetary_requests')</h3>
            </div>

            <div class="block-content">
                {!! Form::open(['route'=>'monetary_requests.store', 'method'=>'POST', 'role' => 'form']) !!}

                    <input type="hidden" name="offeror_id" value="{{ auth()->user()->offeror->id }}">
                    <input type="hidden" name="id_user_requesting" value="{{ auth()->user()->id }}">

                    <input type="hidden" name="operation" value="{{ "monetary request" }}">

                    <div class="form-group">
                        {!! Form::label('amount', __('generics.amount')) !!}
                        {!! Form::number('amount', null, ['class'=>'form-control', 'placeholder'=> __('generics.amount'), 'required' => 'required', 'min'=>1,'max'=>100000000]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('financial_information', __('generics.account_number')) !!}
                        {!! Form::select('financial_information', $information_accounts, null, ['class'=>'form-control', 'placeholder'=>__('Número de Cuenta'), 'required' => 'required']) !!}
                    </div>

                    <input type="hidden" name="ip_request" value="{{ \Request::getClientIp(true) }}">

                    <input type="hidden" name="status" value="{{ "Procesando" }}">

                    <div class="form-group">
                        {!! Form::label('observation', __('generics.observation')) !!}
                        {!! Form::textArea('observation', null, ['class'=>'form-control', 'placeholder'=>'Observaciones', 'required' => 'required']) !!}
                    </div>

                    <input type="hidden" name="id_user_approves" value="{{ "" }}">

                    <div class="form-group text-right">
                        <a class="btn btn-secondary" href="{{route('monetary_requests.index')}}">
                            <i class="fa fa-times-circle"></i>
                            @lang('generics.cancel')
                        </a>
                        <button type="submit" class="btn btn-smirrow "> <i class="fa fa-check-circle"></i> @lang('generics.apply_for')</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
