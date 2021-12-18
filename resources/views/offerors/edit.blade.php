@extends('layouts.backend')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>jQuery(function(){ One.helpers(['datepicker']); });</script>

    <script>
        $(function() {
            $('#hidden').on('change', function(e) {
                let pez = document.getElementById('hidden').value;
                if(pez == "Masculino"){
                    $('#div_waist').hide("fast");
                    $('#div_bust').hide("fast");
                    $('#div_hip').hide("fast");
                    $('#div_bra').hide("fast");
                }else{
                    $('#div_waist').show("fast");
                    $('#div_bust').show("fast");
                    $('#div_hip').show("fast");
                    $('#div_bra').show("fast");
                }

            });
        });
    </script>
@endpush

@section('content')
    <!-- Hero -->
    <div class="content">

        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h2 class="flex-sm-fill h3 my-2">
                @lang('generics.offerors')
            </h2>
            <small>@lang('generics.required_fields')</small>
        </div>
    <!-- END Hero -->
    @if ($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
    <!-- Page Content -->

        {!! Form::open(['route'=>['offerors.update', $offeror], 'method'=>'PUT', 'role' => 'form', 'files' => 'true']) !!}

            <div class="block">
                <div class="block-header">
                    <h3 class="block-title">@lang('generics.edit_profile')</h3>
                </div>

                <div class="block-content">
                    <h2 class="content-heading border-bottom">@lang('generics.personal_information')</h2>
                    <div class="row">
                        <div class="form-group">
                            {!! Form::hidden('user_id', $offeror->user_id) !!}
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('name', __('generics.name')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('name',$offeror->user->name,['class'=>'form-control', 'placeholder'=>__('generics.name'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                                {!! Form::label('nick_name', __('generics.nick')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('nick_name',$offeror->user->nick_name,['class'=>'form-control', 'placeholder'=>__('generics.nick'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('email', __('generics.email')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::email('email',$offeror->user->email,['class'=>'form-control', 'placeholder'=>__('generics.email'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('phone', __('generics.phone')) !!}
                                {!! Form::text('phone',$offeror->user->phone,['class'=>'form-control', 'placeholder'=>__('generics.phone')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('document',__('generics.document_type') ) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('document', ['RC' => 'Registro Civil','TI' => 'Tarjeta de identidad','CC' => 'Cedula de Ciudadanía', 'CE' => 'Cedula de Extranjeria', 'PS' => 'Pasaporte'],$offeror->document,['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('document_number', __('generics.document_number')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('document_number',$offeror->document_number,['class'=>'form-control', 'placeholder'=>__('generics.document_number'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('gender', __('generics.gender')) !!}
                                {!! Form::select('gender', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino','Trans'=>'Trans'],$offeror->gender,['id' => 'hidden', 'class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('nationality', __('generics.nationality')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('country_code', $countries, $offeror->user->country_code, ['class'=>'form-control', 'placeholder'=>__('generics.nationality'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('birthday', __('generics.birthday')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('birthday',$offeror->birthday,['class'=>'js-datepicker form-control', 'required' => 'required', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'-18y', 'language'=>'es']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('tags', __('generics.tags')) !!}
                                {!! Form::text('tags',$offeror->tags,['class'=>'form-control', 'placeholder'=>__('generics.tags')]) !!}
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('agency', __('generics.agency')) !!}
                                {!! Form::text('agency',$offeror->agency,['class'=>'form-control','placeholder'=>__('generics.agency'),'disabled'=>true]) !!}
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading border-bottom">@lang('generics.location')</h2>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('country_id', __('generics.country_id')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('country_id', $countries, $offeror->country_id, ['class'=>'form-control', 'placeholder'=>__('generics.country_id'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('city_id', __('generics.city')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('city_id', $cities, $offeror->city_id, ['class'=>'form-control', 'placeholder'=>__('generics.city'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('address', __('generics.address')) !!}
                                {!! Form::text('address',$offeror->address,['class'=>'form-control', 'placeholder'=>__('generics.address')]) !!}
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading border-bottom">@lang('generics.appearance')</h2>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('ethnicity', __('generics.ethnicity')) !!}
                                {!! Form::select('ethnicity', $ethnicities,$offeror->ethnicity , ['class'=>'form-control', 'placeholder'=>__('generics.ethnicity')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('skin_color', __('generics.skin_color')) !!}
                                {!! Form::select('skin_color', $skin_colors,$offeror->skin_color , ['class'=>'form-control', 'placeholder'=>__('generics.skin_color')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('eyes_color', __('generics.eyes')) !!}
                                {!! Form::select('eyes_color', $eye_colors,$offeror->eyes_color , ['class'=>'form-control', 'placeholder'=>__('generics.eyes')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('hair_color', __('generics.hair_color')) !!}
                                {!! Form::select('hair_color', $hair_colors,$offeror->hair_color , ['class'=>'form-control', 'placeholder'=>__('generics.hair_color')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('hair_length', __('generics.hair_length')) !!}
                                {!! Form::select('hair_length', $hair_lengths,$offeror->hair_color , ['class'=>'form-control', 'placeholder'=>__('generics.hair_length')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('contexture', __('generics.contexture')) !!}
                                {!! Form::select('contexture', $contextures,$offeror->contexture , ['class'=>'form-control', 'placeholder'=>__('generics.contexture')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('has_tatoos', __('generics.tatoos')) !!}
                                {!! Form::text('has_tatoos',$offeror->has_tatoos,['class'=>'form-control', 'placeholder'=>__('generics.tatoos')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('piercings', __('generics.piercings')) !!}
                                {!! Form::text('piercings',$offeror->piercings,['class'=>'form-control', 'placeholder'=>__('generics.piercings')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('style', __('generics.style')) !!}
                                {!! Form::select('style', $styles,$offeror->style , ['class'=>'form-control', 'placeholder'=>__('generics.style')]) !!}
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading border-bottom">@lang('generics.measurements')</h2>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('weight', __('generics.weight')) !!}
                                {!! Form::number('weight',$offeror->weight,['class'=>'form-control', 'placeholder'=>'Kg', '']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('height', __('generics.height')) !!}
                                {!! Form::number('height',$offeror->height,['class'=>'form-control', 'placeholder'=>'cm']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6" id="div_bust">
                            <div class="form-group">
                                {!! Form::label('bust_measurement', __('generics.bust')) !!}
                                {!! Form::number('bust_measurement',$offeror->bust_measurement,['class'=>'form-control', 'placeholder'=>'cm']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6" id="div_waist">
                            <div class="form-group">
                                {!! Form::label('waist_measurement', __('generics.waist')) !!}
                                {!! Form::number('waist_measurement',$offeror->waist_measurement,['class'=>'form-control', 'placeholder'=>'cm']) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group" id="div_hip">
                                {!! Form::label('hip_measurement', __('generics.hip')) !!}
                                {!! Form::number('hip_measurement',$offeror->hip_measurement,['class'=>'form-control', 'placeholder'=>'cm']) !!}
                            </div>
                        </div>
                    </div>



                    <h2 class="content-heading border-bottom">@lang('generics.others')</h2>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('level', __('generics.level')) !!}
                                {!! Form::select('level', $model_levels,$offeror->level , ['class'=>'form-control', 'placeholder'=>__('generics.level')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12">
                            <div class="form-group">
                                {!! Form::label('description', __('generics.description')) !!}
                                {!! Form::textarea('description',$offeror->description,['class'=>'form-control', 'placeholder'=>__('generics.description')]) !!}
                            </div>
                        </div>
                    </div>

                    <h2 class="content-heading border-bottom">@lang('generics.security')</h2>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('state', __('generics.state')) !!}
                                <div class="custom-control custom-switch custom-control-lg mb-2">
                                    {!! Form::checkbox('state', 1, $offeror->state, ['class'=>'custom-control-input', 'checked', 'id'=>'state']) !!}
                                    {!! Form::label('state', __('generics.active'), ['class' => 'custom-control-label']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <a href="{{route('offerors.index')}}">
                            <button type="button" class="btn btn-secondary btn-sm">
                                @lang('generics.cancel')
                            </button>
                        </a>
                        {!! Form::submit(__('generics.save'), ['class' => 'btn btn-smirrow btn-sm']) !!}
                    </div>


                </div>
                {!! Form::close() !!}
            </div>
            <!-- END Your Block -->
        </div>
        <!-- END Page Content -->
@endsection
