@extends('layouts.backend')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <h2>Editar accesorio</h2>

        <!-- Your Block -->
        <div class="block">

            <div class="block-content">
                {!! Form::open(['route'=>['offeror_accessories.update', $offerorAccessory], 'method'=>'PUT', 'role' => 'form']) !!}
                    <input type="hidden" name="offeror_id" value="{{ $offerorAccessory->offeror_id }}">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('accessory_id', __('generics.accessory')) !!}
                                {!! Form::select('accessory_id', $accessories, $offerorAccessory->accessory_id, ['class'=>'form-control', 'placeholder'=>'Nombre del accesorio', 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('description', __('generics.description')) !!}
                                {!! Form::text('description', $offerorAccessory->description, ['class'=>'form-control', 'placeholder'=>__('generics.description'), 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="form-group">
                                {!! Form::label('cost', __('generics.fare')) !!}
                                <div class="input-group">
                                    {!! Form::number('cost', $offerorAccessory->cost, ['class'=>'form-control', 'placeholder'=>__('generics.fare'), 'required' => 'required', 'min'=>1,'max'=>10000000]) !!}
                                    {!! Form::select('currency_id', $currencies, $offerorAccessory->currency_id, ['class'=>'form-control', 'required' => 'required']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('offerors.show', $offerorAccessory->offeror_id)}}#btabs-static-accessories">
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
