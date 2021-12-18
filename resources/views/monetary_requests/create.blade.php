@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.monetary_requests')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">@lang('generics.add')</small>
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
                <h3 class="block-title">@lang('generics.add') @lang('generics.monetary_requests')</h3>
            </div>

            <div class="block-content">
                {!! Form::open(['route'=>'monetary_requests.store', 'method'=>'POST', 'role' => 'form']) !!}

                    <input type="hidden" name="offeror_id" value="{{ $offeror->id }}">

                    <div class="form-group">
                        {!! Form::label('amount', __('generics.amount')) !!}
                        {!! Form::text('amount', null, ['class'=>'form-control', 'placeholder'=>'Monto', 'required' => 'required']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('financial_information', __('generics.account_number')) !!}
                        {!! Form::select('financial_information', $information_accounts, null, ['class'=>'form-control', 'placeholder'=>__('Número de Cuenta'), 'required' => 'required']) !!}
                    </div>

                    <input type="hidden" name="ip_request" value="{{ \Request::getClientIp(true) }}">

                    <input type="hidden" name="status" value="{{ "Procesando" }}">

                    <div class="form-group">
                        {!! Form::label("operation", __("generics.operation")) !!}
                        {!! Form::select("operation", ["devolution" => "Devolucion", "dispute" => "Disputa", "bono" => "Bono", "manual subtraction" => "Sustraccion",  "manual sum" => "Suma"], null, ["class"=>"form-control"])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('observation', __('generics.observation')) !!}
                        {!! Form::text('observation', null, ['class'=>'form-control', 'placeholder'=>'Observaciones']) !!}
                    </div>

                    <input type="hidden" name="id_user_requesting" value="{{ auth()->user()->id }}">

                    <input type="hidden" name="id_user_approves" value="{{ auth()->user()->id }}">

                    <div class="form-group">
                        {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                        <a href="{{route('offerors.index')}}">
                            <button type="button" class="btn btn-smirrow btn-sm">
                                @lang('generics.cancel')
                            </button>
                        </a>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
