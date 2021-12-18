@extends('layouts.backend')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.css') }}">
@endpush

@section('js_after')
    <script src="{{ asset('js/plugins/select2/js/select2.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.js') }}"></script>

    <script type="text/javascript">
        $('#accessory_id').select2({
            placeholder: 'Seleccione escribiendo el nombre del accesorio',
            ajax: {
                url: '/offeror_accessories/autocomplete',
                dataType: 'json',
                delay: 200,
                processResults: function (data) {
                    return {
                        results:  $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                },
                cache: false
            }
        });
    </script>
@endsection

@section('content')

    <!-- Page Content -->
    <div class="content">
        <h2>Asociar Accesorio</h2>
        <!-- Your Block -->
        <div class="block">

            <div class="block-content">

                {!! Form::open(['route'=>'offeror_accessories.store', 'method'=>'POST', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value="{{ $offeror->id }}">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('accessory_id', __('generics.accessory')) !!}
                            {!! Form::select('accessory_id', $accessories, old('accessory_id'), ['class'=>'form-control', 'placeholder'=>'Seleccione', 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('description', __('generics.description')) !!}
                            {!! Form::text('description','',['class'=>'form-control', 'placeholder'=>__('generics.description'), 'required' => 'required']) !!}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="form-group">
                            {!! Form::label('cost', __('generics.fare')) !!}
                            <div class="input-group">
                                {!! Form::number('cost',null,['class'=>'form-control', 'placeholder'=>__('generics.fare'), 'required' => 'required', 'min'=>1,'max'=>10000000]) !!}
                                {!! Form::select('currency_id', $currencies, old('currency_id'), ['class'=>'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('offerors.show', $offeror->id)}}#btabs-static-accessories">
                        @lang('generics.cancel')
                    </a>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow']) !!}
                </div>

                {!! Form::close() !!}


            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
