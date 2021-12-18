@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Main Title
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Subtitle</small>
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
                <h3 class="block-title">Bloquear Usuario</h3>
            </div>



            <div class="block-content">

                {!! Form::open(['route'=>'blocks.store', 'method'=>'POST', 'role' => 'form']) !!}

                <div class="form-group">
                    {!! Form::label('user_id', __('generics.user')) !!}
                    {!! Form::select('user_id', $users, old('user_id'), ['class'=>'form-control', 'placeholder'=>'Seleccione el usuario']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category', __('generics.category')) !!}
                    {!! Form::select('category', ['Leve' => 'Leve', 'Moderada' => 'Moderada', 'Grave' => 'Grave']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('reason', __('generics.reason')) !!}
                    {!! Form::text('reason',old('category'),['class'=>'form-control', 'placeholder'=>'Motivo', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('temporal', __('generics.temporal') ) !!}
                    {!! Form::select('temporal', ['Si' => 'Si', 'No' => 'No']) !!}
                </div>

                <div class="form-group">

                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                    <a href="{{route('cities.index')}}">
                        <button type="button" class="btn btn-smirrow btn-sm">
                            @lang('generics.cancel')
                        </button>
                    </a>
                </div>

                {!! Form::close() !!}
            </div>
            <!-- END Your Block -->
        </div>
        <!-- END Page Content -->
@endsection
