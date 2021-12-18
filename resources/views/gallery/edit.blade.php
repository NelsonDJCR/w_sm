@extends('layouts.backend')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>jQuery(function () {
            One.helpers(['datepicker']);
        });</script>
@endpush

@section('content')
    <div class="content">
        <h2>Crear nuevo album</h2>
    {!! Form::open(['route'=>['album.update', $album], 'method'=>'PUT', 'role' => 'form']) !!}
        <div class="block">
            <div class="block-content">
                <h2 class="content-heading border-bottom">{{__('generics.album_data', ['name'=>'album'])}}</h2>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('title', __('generics.name')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::text('title',$album->title,['class'=>'form-control', 'placeholder'=>__('generics.name'), 'required'=> 'true']) !!}
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('date', __('generics.date')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::text('date',$album->date,['class'=>'js-datepicker form-control', 'required' => 'required', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'-1d', 'language'=>'es']) !!}
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('description', __('generics.description')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::textArea('description',$album->description,['class'=>'form-control', 'placeholder'=>__('generics.description'), 'required'=> 'true']) !!}
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('published', __('generics.published')) !!}
                            <div class="custom-control custom-switch custom-control-lg mb-2">
                                {!! Form::checkbox('published', 1, $album->published, ['class'=>'custom-control-input', 'checked', 'id'=>'published']) !!}
                                {!! Form::label('published', __('generics.active'), ['class' => 'custom-control-label']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 ml-auto text-right" style="padding: 1% 0;">
            <a href="{{route('album.show',$album)}}" class="btn btn-smirrow"><i class="fa fa-times-circle"></i> @lang('generics.cancel') </a>
            <button type="submit" class="btn btn-smirrow"><i class="fa fa-check-circle"></i> @lang('generics.save')</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
