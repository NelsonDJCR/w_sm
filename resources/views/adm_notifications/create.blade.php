@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.notifications')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">@lang('generics.create')</small>
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
                <h3 class="block-title">Crear notificación a usuario</h3> <notifications></notifications>
            </div>

            <div class="block-content">

                {!! Form::open(['route'=>'adm-notifications.store', 'method'=>'POST', 'role' => 'form']) !!}
                <div class="form-group">

                </div>
                <div class="form-group">
                    {!! Form::label('recipient_id', __('generics.users')) !!}
                    {!! Form::select('recipient_id', $users, old('recipient_id'), ['class'=>'form-control', 'placeholder'=>'Seleccione el usuario']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('body', __('generics.body_message')) !!}
                    {!! Form::textarea('body',null,['class'=>'form-control', 'placeholder'=>__('generics.body_message')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                    <a href="{{route('home')}}">
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
