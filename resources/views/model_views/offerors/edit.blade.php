@extends('layouts.offerors')

@include('includes.datatables')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
                    
    <script>jQuery( function(){ One.helpers(['datepicker']); });</script>
    <script>
        $(function() {

            $(document).ready(function() {
                if ($('#select_gender').val() == 'Masculino') {
                    changeGender($('#select_gender').val())
                }
            });
            $('body').on('change', '#select_gender', function() {
                changeGender($('#select_gender').val())
            });
            function changeGender(r){
                
                if (r == 'Masculino') {
                    $('#div_bust').css('display','none')
                    $('#div_waist').css('display','none')
                    $('#div_hip').css('display','none')
                }else{
                    $('#div_bust').css('display','block')
                    $('#div_waist').css('display','block')
                    $('#div_hip').css('display','block')
                }
            }
        });
        
        
    </script>
@endpush

@section('content')
    <!-- Page Content -->
    <div class="content">
        @if(auth()->user()->offeror->getCompletePercentage()<60)
            <div class="alert alert-smirrow alert-dismissable"role="alert">
                <button type="button" style="color:white" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" >&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">@lang('generics.profile')</h3>
                <p class="mb-0">@lang('messages.profile_complete')</p>
            </div>
        @endif

            <!-- Your Block -->
        {!! Form::open(['route'=>['offerors.update', $offeror], 'method'=>'PUT', 'role' => 'form', 'files' => 'true']) !!}

        <div class="block">
            <div class="block-header content-heading border-bottom mb-4 pb-2">
                <div class="col-xl-3 col-lg-6">
                    <div class="form-group">
                        {!! Form::label('name', __('generics.phone_emergeny')) !!}
                        <b class="text-danger">*</b>
                        <p>Ingresa tu número de emergencia predeterminado </p>
                        {!! Form::text('phone_emergeny',$offeror->phone_emergeny,['class'=>'form-control', 'placeholder'=>__('generics.phone_emergeny')]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="block-header content-heading border-bottom mb-4 pb-2">
                <h3 class="block-title">@lang('generics.personal_information')</h3>
                <small>Estos datos son confidenciales, se solicitan por seguridad y protección, no se mostrarán en tu perfil público</small>
            </div>
            <div class="block-content block-content-full">

                    <div class="row">
                        <div class="form-group">
                            {!! Form::hidden('user_id', $offeror->user_id) !!}
                            {!! Form::hidden('tags',$offeror->tags) !!}
                            {!! Form::hidden('agency', $offeror->agency) !!}
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('name', __('generics.name')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('name',$offeror->user->name,['class'=>'form-control', 'placeholder'=>__('generics.name')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('email', __('generics.email')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::email('email',$offeror->user->email,['class'=>'form-control', 'placeholder'=>__('generics.email')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('phone', __('generics.phone')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::text('phone',$offeror->user->phone,['class'=>'form-control', 'placeholder'=>__('generics.phone')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('document',__('generics.document_type') ) !!}
                                {!! Form::select('document', ['' => 'Seleccione','CC' => 'Cedula de Ciudadanía', 'CE' => 'Cedula de Extranjeria', 'PS' => 'Pasaporte'], $offeror->document, ['class'=>'form-control'])!!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('document_number', __('generics.document_number')) !!}
                                {!! Form::text('document_number', $offeror->document_number,['class'=>'form-control', 'placeholder'=>__('generics.document_number')]) !!}
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('nationality', __('generics.nationality')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('country_code', $countries, $offeror->user->country_code, ['class'=>'form-control js-select2', 'placeholder'=>__('generics.nationality')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('birthday', __('generics.birthday')) !!}
                                {!! Form::text('birthday',$offeror->birthday,['class'=>'js-datepicker form-control', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'-18y', 'language'=>'es']) !!}
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('eps', __('generics.eps')) !!}
                                {!! Form::text('eps',$offeror->address,['class'=>'form-control', 'placeholder'=>__('generics.eps')]) !!}
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('country_id', __('generics.country_id')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('country_id', $countries, $offeror->country_id, ['class'=>'js-select2 form-control', 'placeholder'=>__('generics.country_id')]) !!}
                            </div>
                        </div>


                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('city_id', __('generics.city')) !!}
                                <b class="text-danger">*</b>
                                {!! Form::select('city_id', $cities, $offeror->city_id, ['class'=>'js-select2 form-control', 'placeholder'=>__('generics.city')]) !!}
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('address', __('generics.address')) !!}
                                {!! Form::text('address',$offeror->address,['class'=>'form-control', 'placeholder'=>__('generics.address')]) !!}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('agency', __('generics.agency')) !!}
                                {!! Form::text('agency',$offeror->agency,['class'=>'form-control', 'placeholder'=>__('generics.agency'),'disabled'=>true]) !!}
                            </div>
                        </div>

                        

                        
                        


                    </div>

            </div>
        </div>

        <div class="block">
            <div class="block-header content-heading border-bottom mb-4 pb-2">
                <h3 class="block-title">DATOS QUE SE MUESTRAN AL CLIENTE</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <!-- Content group -->

                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('nick_name', __('generics.nick')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::text('nick_name',$offeror->user->nick_name,['class'=>'form-control', 'placeholder'=>__('generics.nick')]) !!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('gender', __('generics.show_profile')) !!}
                            <button type="button" class="btn btn-sm btn-outline-info fa fa-info" data-toggle="popover" data-placement="right" title="Restricción" data-content="Mediante esta opción se permite restringir quien ve tu perfil"></button>
                            {!! Form::select('show_profile', ['Todos' => 'Todos' ,'Extranjeros' => 'Solo Extranjeros','Nacionales' => 'Solo Nacionales'],$offeror->show_profile, ['id' => 'hidden', 'class'=>'form-control'])!!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('gender', __('generics.gender')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::select('gender', ['' =>  __('messages.select'),'Masculino' =>  __('messages.men'),'Femenino' => __('messages.woman') ,'Trans' => 'Trans'],$offeror->gender, ['id' => 'select_gender', 'class'=>'form-control'])!!}
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('level', __('generics.level')) !!}
                            <button type="button" class="btn btn-sm btn-outline-info fa fa-info" data-toggle="popover" data-placement="right" title="Nivel" data-content="Categoria o nivel en que te consideras"></button>
                            {!! Form::select('level', $model_levels,$offeror->level , ['class'=>'form-control', 'placeholder'=>__('generics.level')]) !!}
                        </div>
                    </div>

                    
                    

                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('ethnicity', __('generics.ethnicity')) !!}
                            {!! Form::select('ethnicity', $ethnicities, $offeror->ethnicity , ['class'=>'form-control', 'placeholder'=>__('generics.ethnicity')]) !!}
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
                            {!! Form::label('style', __('generics.style')) !!}
                            {!! Form::select('style', $styles,$offeror->style , ['class'=>'form-control', 'placeholder'=>__('generics.style')]) !!}
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-3">
                        <div class="form-group">
                            {!! Form::label('has_tatoos',__('generics.tatoos') ) !!}
                            {!! Form::select('has_tatoos', ['YES' => 'SI','NOT' => 'NO'], $offeror->has_tatoos, ['class'=>'form-control', 'placeholder'=>__('generics.tatoos')])!!}
                        </div>
                    </div>
                    <div class="col-xl-1 col-lg-3">
                        <div class="form-group">
                            {!! Form::label('piercings',__('generics.piercings') ) !!}
                            {!! Form::select('piercings', ['YES' => 'SI','NOT' => 'NO'], $offeror->piercings, ['class'=>'form-control', 'placeholder'=>__('generics.piercings')])!!}
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('weight', __('generics.weight')) !!}
                            {!! Form::number('weight',$offeror->weight,['class'=>'form-control', 'placeholder'=>'kg']) !!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('height', __('generics.height')) !!}
                            {!! Form::number('height',$offeror->height,['class'=>'form-control', 'placeholder'=>'cm']) !!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6" id="div_bust" style="display: @if($offeror->gender=="Masculino") none @endif ">
                        <div class="form-group">
                            {!! Form::label('bust_measurement', __('generics.bust')) !!}
                            {!! Form::number('bust_measurement',$offeror->bust_measurement,['class'=>'form-control', 'placeholder'=>'cm']) !!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6" id="div_waist" style="display: @if($offeror->gender=="Masculino") none @endif">
                        <div class="form-group">
                            {!! Form::label('waist_measurement', __('generics.waist')) !!}
                            {!! Form::number('waist_measurement',$offeror->waist_measurement,['class'=>'form-control', 'placeholder'=>'cm']) !!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6" id="div_hip" style="display: @if($offeror->gender=="Masculino") none @endif">
                        <div class="form-group">
                            {!! Form::label('hip_measurement', __('generics.hip')) !!}
                            {!! Form::number('hip_measurement',$offeror->hip_measurement,['class'=>'form-control', 'placeholder'=>'cm']) !!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="form-group">
                            {!! Form::label('at_home',__('generics.at_home') ) !!}
                            {!! Form::select('at_home', ['YES' => 'SI','NOT' => 'NO'], $offeror->at_home, ['class'=>'form-control', 'placeholder'=>__('generics.at_home')])!!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="form-group">
                            {!! Form::label('have_place',__('generics.have_place') ) !!}
                            {!! Form::select('have_place', ['YES' => 'SI','NOT' => 'NO'], $offeror->have_place, ['class'=>'form-control', 'placeholder'=>__('generics.have_place')])!!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="form-group">
                            {!! Form::label('receive_services',__('generics.receive_services') ) !!}
                            {!! Form::select('receive_services', ['Hombres' => 'Hombres','Mujeres' => 'Mujeres','Todos' => 'Todos'], $offeror->receive_services, ['class'=>'form-control', 'placeholder'=>__('generics.receive_services')])!!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('zones', __('generics.zones')) !!}
                            <b class="text-danger">*</b>
                            {!! Form::text('zones',$offeror->zones,['class'=>'form-control', 'placeholder'=>__('generics.zones')]) !!}
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('zones', __('generics.languajes')) !!}
                            <b class="text-danger"></b>
                            {!! Form::text('languajes',$offeror->languajes,['class'=>'form-control', 'placeholder'=>__('generics.languajes')]) !!}
                        </div>
                    </div>


                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('description', __('generics.description_profile')) !!}
                            {!! Form::textarea('description',$offeror->description,['class'=>'form-control','maxlength'=>'500', 'placeholder'=>__('generics.description')]) !!}
                        </div>
                    </div>
                    <!-- end group -->
                </div>
                <div class="form-group" style="text-align: center">
                    <a href="{{route('offerors.show', $offeror)}}">
                        <button type="button" class="btn bg-black btn-sm" style="color: white">
                            @lang('generics.cancel')
                        </button>
                    </a>
                    {!! Form::submit(__('generics.save'), ['class' => 'btn btn-smirrow btn-sm btn-smirrow']) !!}
                </div>

                    <!-- end group -->
                </div>

            </div>
        </div>

    {!! Form::close() !!}

    <!-- END Page Content -->
@endsection
