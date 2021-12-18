@extends('layouts.offerors')
@section('content')

@section('css_before')
    <link rel="stylesheet" href="{{asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}">
@endsection

<div class="content">

    @if(!(auth()->user()->offeror->getAvailability() > 0))
        <div class="alert alert-smirrow alert-dismissable" role="alert">
            <button type="button" style="color: white" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="alert-heading font-w300 my-2">@lang('messages.availability_help')</h3>
            <p class="mb-0">@lang('messages.availability_complete')</p>
        </div>
    @endif
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('generics.calendar_available')</h3>
            <div class="block-options">
                <a class="btn btn-smirrow" href="{{route('offeror_availability.edit', $schedule)}}"> <i class="fa fa-pen d-block d-sm-none"></i> <o class="d-none d-sm-block"> <i class="fa fa-pen"></i> @lang('generics.edit')</o></a>
                <a class="btn btn-smirrow " href="{{route('offeror_blocks_availability.index')}}"><i class="fa fa-lock d-block d-sm-none"></i> <o class="d-none d-sm-block"> <i class="fa fa-lock "></i> @lang('generics.blocks')</o></a>
            </div>
        </div>

        <div class="block-content">
            <div class="row items-push">
                <div class="col-md-12" >
                    <ul>
                        <li>@lang('generics.block_message')</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div id="availability"></div>
                </div>
                <div class="col-md-6">
                    <div class="block">
                        <div class="block-content">

                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('star_time', __('generics.star_time')) !!}:
                                        {{date('g:i a',strtotime($schedule->star_time))}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="form-group">
                                        {!! Form::label('end_time', __('generics.end_time')) !!}
                                        {{date('g:i a',strtotime($schedule->end_time))}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="d-block">@lang('generics.available_days')</label>
                                        <p>
                                            @if($schedule->sunday==1)
                                                <span class="badge badge-success">@lang('generics.sunday')</span>
                                            @endif
                                            @if($schedule->monday==1)
                                                <span class="badge badge-success">@lang('generics.monday')</span>
                                            @endif
                                            @if($schedule->tuesday==1)
                                                <span class="badge badge-success">@lang('generics.tuesday')</span>
                                            @endif
                                            @if($schedule->wednesday==1)
                                                <span class="badge badge-success">@lang('generics.wednesday')</span>
                                            @endif
                                            @if($schedule->thursday==1)
                                                <span class="badge badge-success">@lang('generics.thursday')</span>
                                            @endif
                                            @if($schedule->friday==1)
                                                <span class="badge badge-success">@lang('generics.friday')</span>
                                            @endif
                                            @if($schedule->saturday==1)
                                                <span class="badge badge-success">@lang('generics.saturday')</span>
                                            @endif
                                        </p>
                                        <label class="d-block">@lang('generics.days_not_available')</label>
                                        <p>
                                            @if($schedule->sunday==0)
                                                <span class="badge badge-secondary">@lang('generics.sunday')</span>
                                            @endif
                                            @if($schedule->monday==0)
                                                <span class="badge badge-secondary">@lang('generics.monday')</span>
                                            @endif
                                            @if($schedule->tuesday==0)
                                                <span class="badge badge-secondary">@lang('generics.tuesday')</span>
                                            @endif
                                            @if($schedule->wednesday==0)
                                                <span class="badge badge-secondary">@lang('generics.wednesday')</span>
                                            @endif
                                            @if($schedule->thursday==0)
                                                <span class="badge badge-secondary">@lang('generics.thursday')</span>
                                            @endif
                                            @if($schedule->friday==0)
                                                <span class="badge badge-secondary">@lang('generics.friday')</span>
                                            @endif
                                            @if($schedule->saturday==0)
                                                <span class="badge badge-secondary">@lang('generics.saturday')</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
@endsection


@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>jQuery(function(){ One.helpers(['datepicker']); });
        $(function () {
            $('#availability').datepicker({
                startDate: '+1d',
                endDate: '+3m',
                format: "yy-mm-dd",
                datesDisabled:@php echo json_encode($datesDisabled) @endphp,
                daysOfWeekDisabled:@php echo json_encode($daysOfWeekDisabled) @endphp,
            });
        });
    </script>
@endpush
@section('css_after')
    <style>
        .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
            text-decoration: line-through;
            color: #ccc;
        }
        .day
        {
            color: #0a0302;
        }
    </style>
@endsection
