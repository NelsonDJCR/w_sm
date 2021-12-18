@extends('layouts.backend')

@section('content')


    <!-- Page Content -->
    <div class="content">
        <h2>Editar Servicio</h2>

        <!-- Your Block -->
        <div class="block">
            <div class="block-content">

                {!! Form::open(['route'=>['offeror_services.update',$offerorService->id], 'method'=>'PUT', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value="{{ $offerorService->offeror_id }}">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('service_id', __('generics.service')) !!}
                            {!! Form::select('service_id', $services, $offerorService->service_id, ['class'=>'form-control', 'placeholder'=>'Seleccione']) !!}
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('description', __('generics.description')) !!}
                            {!! Form::textarea('description',$service->description,['class'=>'form-control', 'placeholder'=>__('generics.description'), 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('time_unit_id', __('generics.time_units')) !!}
                            <div class="input-group">
                                {!! Form::number('quantity',$offerorService->quantity, ['class'=>'form-control', 'placeholder'=>__('generics.quantity'),  'required' => 'required', 'min'=>1,'max'=>10000]) !!}
                                {!! Form::select('time_unit_id', $time_units, $offerorService->time_unit_id,['class'=>'form-control', 'placeholder'=>'Seleccione', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12">
                        <div class="form-group">
                            {!! Form::label('cost', __('generics.fare')) !!}
                            <div class="input-group">
                                {!! Form::number('cost',$offerorService->cost,['class'=>'form-control', 'placeholder'=>__('generics.fare'), 'required' => 'required', 'min'=>1,'max'=>10000000]) !!}
                                {!! Form::select('currency_id', $currencies, $offerorService->cost,['class'=>'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('offerors.show', $offerorService->offeror_id)}}#btabs-static-services">
                        @lang('generics.cancel')
                    </a>
                    {!! Form::submit('Editar', ['class' => 'btn btn-smirrow']) !!}

                </div>


                {!! Form::close() !!}


            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
