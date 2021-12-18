@extends('layouts.offerors')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>jQuery(function(){ One.helpers(['datepicker']); });</script>
@endpush

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.block_availability')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">@lang('generics.add')</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">@lang('generics.block_availability')</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('offeror_blocks_availability.index')}}">Index</a>
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
                <h3 class="block-title">@lang('generics.add') @lang('generics.block_availability')</h3>
            </div>
            <div class="block-content">
                {!! Form::open(['route'=>'offeror_blocks_availability.store', 'method'=>'POST', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value = <?php echo auth()->user()->offeror->id; ?> />

                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('initial_date', __('generics.from_date')) !!}
                            {!! Form::text('initial_date', null, ['class'=>'js-datepicker form-control', 'required' => 'required', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'', 'language'=>'es']) !!}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('final_date', __('generics.to_date')) !!}
                            {!! Form::text('final_date', null, ['class'=>'js-datepicker form-control', 'required' => 'required', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'', 'language'=>'es']) !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('motive', __('generics.reason')) !!}
                            {!! Form::textarea('motive',null,['class'=>'form-control', 'placeholder'=>__('generics.reason')]) !!}
                        </div>
                    </div>
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('offeror_blocks_availability.index')}}#btabs-static-experience">
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
