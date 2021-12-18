<div class="tab-pane" id="btabs-static-availability" role="tabpanel">

        <div class="block-header block-header-default">
            <h3 class="block-title">Calendario Disponible</h3>
            <div class="block-options">
                <a class="btn btn-smirrow" href="{{route('offeror_availability.edit', $schedule)}}"> <i class="fa fa-pen"></i> @lang('generics.edit') @lang('generics.availability')</a>
            </div>
        </div>

            <div class="block-content">
                <div class="row items-push">
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

