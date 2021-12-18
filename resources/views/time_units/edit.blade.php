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
                <h3 class="block-title">Editar @lang('generics.time_units')</h3>
            </div>



            <div class="block-content">

                {!! Form::open(['route'=>['time_units.update',$timeUnit->id], 'method'=>'PUT', 'role' => 'form']) !!}


                <div class="form-group">
                    {!! Form::label('name', __('generics.name')) !!}
                    {!! Form::text('name',$timeUnit->name,['class'=>'form-control', 'placeholder'=>'Nombre', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('hour', __('generics.hour')) !!}
                    {!! Form::number('hour', $timeUnit->hour, ['class'=>'form-control', 'placeholder'=>'Horas', 'required' => 'required', 'min'=>1,'max'=>10000]) !!}
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch custom-control-lg mb-2">
                        {!! Form::checkbox('state', 1, $timeUnit->state, ['class'=>'custom-control-input', 'checked', 'id'=>'state']) !!}
                        {!! Form::label('state', __('generics.state'), ['class' => 'custom-control-label']) !!}
                    </div>
                </div>

                <div class="form-group">

                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                    <a href="{{route('time_units.index')}}">
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
