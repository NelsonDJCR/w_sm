@extends('layouts.backend')
@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/dropzone/dist/min/dropzone.min.css') }}">
@endsection
@section('js_after')
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Crear documento a validar</h3>
            </div>
            <div class="block-content">
                {!! Form::open(['route'=>'document-validates.store', 'method'=>'POST', 'role' => 'form']) !!}
                <div class="form-group">
                    {!! Form::label('name', __('generics.name')) !!}
                    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>__('generics.name'), 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', __('generics.description')) !!}
                    {!! Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>__('generics.description')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('',__('generics.person_type') ) !!}
                    {!! Form::select('person_type', ['Natural' => __('generics.natural'), 'Juridical' => __('generics.juridical')], null, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group" style="text-align: center">
                    <a href="{{route('document-validates.index')}}">
                        <button type="button" class="btn btn-secondary btn-sm">
                            @lang('generics.cancel')
                        </button>
                    </a>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
