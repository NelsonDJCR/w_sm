@extends('layouts.offerors')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>jQuery(function(){ One.helpers(['datepicker']); });</script>
@endpush

@section('content')

    <!-- Page Content -->
    <div class="content">

        <h2>@lang('generics.add_experience')</h2>

        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">@lang('generics.add') @lang('generics.event')</h3>
            </div>



            <div class="block-content">
                {!! Form::open(['route'=>'experiences.store', 'method'=>'POST', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value="{{ $offeror->id }}">

                <div class="form-group">
                    {!! Form::label('title', __('generics.title')) !!}
                    {!! Form::text('title',null,['class'=>'form-control', 'placeholder'=>__('generics.title'), 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', __('generics.description')) !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>__('generics.description'), 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('date', __('generics.date')) !!}
                    {!! Form::text('date', null, ['class'=>'js-datepicker form-control', 'required' => 'required', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'', 'language'=>'es']) !!}
                </div>


                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('experiences.index', array('id'=> $offeror->id))}}">
                        <i class="fa fa-times-circle"></i>
                        @lang('generics.cancel')
                    </a>
                    <button type="submit" class="btn btn-smirrow "> <i class="fa fa-check-circle"></i> @lang('generics.create')</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
