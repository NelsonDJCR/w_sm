@extends('layouts.offerors')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>jQuery(function(){ One.helpers(['datepicker']); });</script>
@endpush

@section('content')
    <div class="content">
        {!! Form::open(['route'=>'album.store', 'method'=>'POST', 'role' => 'form']) !!}
        {!! Form::hidden('offeror_id', $offeror->id)!!}
        <!-- Page Content -->

        <div class="block">
            <div class="block-content">

                <h2 class="content-heading border-bottom">@lang('generics.create_new_album')</h2>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('title', __('generics.name')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::text('title',null,['class'=>'form-control', 'placeholder'=>__('generics.name'), 'required'=> 'true']) !!}
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('date', __('generics.date')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::text('date',null,['class'=>'js-datepicker form-control', 'required' => 'required', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'-1d', 'language'=>'es']) !!}
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('description', __('generics.description')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::textArea('description',null,['class'=>'form-control', 'placeholder'=>__('generics.description'), 'required'=> 'true']) !!}
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-sm-12">
                        <div class="form-group">
                            {!! Form::label('published', __('generics.published')) !!}
                            <div class="custom-control custom-switch custom-control-lg mb-2">

                                {!! Form::checkbox('published', 1, old('published'), ['class'=>'custom-control-input', 'checked', 'id'=>'published']) !!}
                                {!! Form::label('published', __('generics.active'), ['class' => 'custom-control-label']) !!}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group text-right" >
                    <a href="{{route('offerors.show',$offeror)}}" class="btn btn-secondary"><i class="fa fa-times-circle"></i> @lang('generics.cancel') </a>
                    <button type="submit" class="btn btn-smirrow"> <i class="fa fa-check-circle"></i> @lang('generics.create')</button>
                </div>
            </div>

        </div>



        {!! Form::close() !!}
    </div>
@endsection
