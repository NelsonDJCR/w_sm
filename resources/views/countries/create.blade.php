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
                <h3 class="block-title">Crear pais</h3>
            </div>



            <div class="block-content">

                {!! Form::open(['route'=>'countries.store', 'method'=>'POST', 'role' => 'form']) !!}
                <div class="form-group">
                    {!! Form::label('name',  __('generics.name')) !!}
                    {!! Form::text('name',old('name'),['class'=>'form-control', 'placeholder'=>'Nombre del pais', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('country_code', __('generics.country_code')) !!}
                    {!! Form::text('country_code',old('country_code'),['class'=>'form-control', 'placeholder'=>'Codigo del pais', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('language', __('generics.language')) !!}
                    {!! Form::text('language',old('language'),['class'=>'form-control', 'placeholder'=>'Lenguaje']) !!}
                </div>

                <div class="form-group">
                    <div class="custom-control custom-switch custom-control-lg mb-2">
                        {!! Form::checkbox('state',old('state'),0, ['class'=>'custom-control-input', 'id'=>'state']) !!}
                        {!! Form::label('state', __('generics.state'), ['class' => 'custom-control-label','for'=>'state']) !!}

                    </div>
                </div>

                <div class="form-group">

                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                    <a href="{{route('countries.index')}}">
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
