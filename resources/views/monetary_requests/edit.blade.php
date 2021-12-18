@extends('layouts.backend')

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
                <h3 class="block-title">Información de la solicitud</h3>
            </div>

            <div class="block-content">
                {!! Form::open(['route'=>['monetary_requests.update', $monetaryRequest], 'method'=>'PUT', 'role' => 'form']) !!}
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('request_id', __('generics.request_id')) !!}
                                {!! Form::text('id', $monetaryRequest->id, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('offeror_id', __('generics.name')) !!}
                                {!! Form::text('offeror_id', $monetaryRequest->offeror->user->name, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('operation', __('generics.operation')) !!}
                                {!! Form::text('operation', $monetaryRequest->operation, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('amount', __('generics.amount')) !!}
                                {!! Form::text('amount', $monetaryRequest->amount, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('account_number', __('generics.account_number')) !!}
                                {!! Form::text('number_account', $monetaryRequest->financial_information, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('status', __('generics.status')) !!}
                                {!! Form::text('status', $monetaryRequest->status, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('id_user_requesting', __('generics.id_user_requesting')) !!}
                                {!! Form::text('id_user_requesting', $monetaryRequest->id_user_requesting, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('ip_request', __('IP')) !!}
                                {!! Form::text('ip_request', $monetaryRequest->ip_request, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('created_at', __('generics.created_at')) !!}
                                {!! Form::text('created_at', $monetaryRequest->created_at, ['class'=>'form-control', 'disabled' => 'disabled', 'required' => 'required']) !!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                                <input type="hidden" name="id_user_approves" value="{{ auth()->user()->id }}">
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('status',__('generics.decision') ) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('status', ['Aceptado' => 'Aceptar', 'Rechazado' => 'Rechazar'], null, ['class'=>'form-control'])!!}
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('account_observation', __('generics.observation')) !!}
                                {!! Form::textArea('observation', $monetaryRequest->observation, ['class'=>'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>

                @if($monetaryRequest->status != "Aceptado" && $monetaryRequest->status != "Rechazado")
                    <div>
                    {!! Form::submit('Responder', ['class' => 'btn btn-smirrow btn-sm']) !!}
                        <a href="{{route('monetary_requests.index')}}">
                            <button type="button" class="btn btn-smirrow btn-sm">
                                @lang('generics.cancel')
                            </button>
                        </a>
                    <div>
                @else
                    <div>
                    <a href="{{route('monetary_requests.index')}}">
                        <button type="button" class="btn btn-smirrow btn-sm">
                            @lang('generics.cancel')
                        </button>
                    </a>
                    <div>
                @endif
                    {!! Form::close() !!}
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
