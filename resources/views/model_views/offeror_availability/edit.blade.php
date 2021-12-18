@extends('layouts.offerors')

@section('content')

    <!-- Page Content -->
    <div class="content">

        <div class="tab-pane" id="btabs-static-availability" role="tabpanel">
            <div class="block">
                <div class="block-content">

                    {!! Form::open(['route'=>['offeror_availability.update',$schedule], 'method'=>'PUT', 'role' => 'form']) !!}

                    <input type="hidden" name="offeror_id" value="{{ $schedule->offeror_id }}">

                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('star_time', __('generics.star_time')) !!}
                                <b class="text-danger">*</b>
                                <input type="time" required="required" class=" form-control" id="star_time" name="star_time" value="{{$schedule->star_time}}" placeholder="{{__('generics.star_time')}}" data-date-format="HH-ii" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('end_time', __('generics.end_time')) !!}
                                <b class="text-danger">*</b>
                                <input type="time" required="required" class=" form-control" id="end_time" name="end_time"value="{{$schedule->end_time}}"  placeholder="{{__('generics.end_time')}}" data-date-format="HH-ii" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="d-block">@lang('generics.available_days')</label>
                                <div class="form-check form-check-inline">
                                    {!! Form::checkbox('sunday', 1, $schedule->sunday, ['class'=>'form-check-label', $checked['sunday'], 'id'=>'sunday']) !!}
                                    {!! Form::label('sunday', __('generics.sunday'), ['class' => 'form-check-label']) !!}
                                </div>
                                <div class="form-check form-check-inline">
                                    {!! Form::checkbox('monday', 1, $schedule->monday, ['class'=>'form-check-label', $checked['monday'], 'id'=>'monday']) !!}
                                    {!! Form::label('monday', __('generics.monday'), ['class' => 'form-check-label']) !!}
                                </div>
                                <div class="form-check form-check-inline">
                                    {!! Form::checkbox('tuesday', 1, $schedule->tuesday, ['class'=>'form-check-label', $checked['tuesday'], 'id'=>'tuesday']) !!}
                                    {!! Form::label('tuesday', __('generics.tuesday'), ['class' => 'form-check-label']) !!}
                                </div>
                                <div class="form-check form-check-inline">
                                    {!! Form::checkbox('wednesday', 1, $schedule->wednesday, ['class'=>'form-check-label', $checked['wednesday'], 'id'=>'wednesday']) !!}
                                    {!! Form::label('wednesday', __('generics.wednesday'), ['class' => 'form-check-label']) !!}
                                </div>
                                <div class="form-check form-check-inline">
                                    {!! Form::checkbox('thursday', 1, $schedule->thursday, ['class'=>'form-check-label', $checked['thursday'] , 'id'=>'thursday']) !!}
                                    {!! Form::label('thursday', __('generics.thursday'), ['class' => 'form-check-label']) !!}
                                </div>
                                <div class="form-check form-check-inline">
                                    {!! Form::checkbox('friday', 1, $schedule->friday, ['class'=>'form-check-label', $checked['friday'], 'id'=>'friday']) !!}
                                    {!! Form::label('friday', __('generics.friday'), ['class' => 'form-check-label']) !!}
                                </div>
                                <div class="form-check form-check-inline">
                                    {!! Form::checkbox('saturday', 1, $schedule->saturday, ['class'=>'form-check-label', $checked['saturday'], 'id'=>'saturday']) !!}
                                    {!! Form::label('saturday', __('generics.saturday'), ['class' => 'form-check-label']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <a class="btn btn-secondary"  href="{{ url('offeror-availability/index/'.Auth()->user()->offeror->schedule->id.'') }}">
                            @lang('generics.cancel')
                        </a>
                        {!! Form::submit( __('generics.save'), ['class' => 'btn btn-smirrow ',"onclick"=>"loadInput()"]) !!}
                    </div>
                    {!! Form::close() !!}


                </div>
            </div>


        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
