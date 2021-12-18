@extends('layouts.backend')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Crear servicio</h3>
            </div>



            <div class="block-content">

                {!! Form::open(['route'=>'services.store', 'method'=>'POST', 'role' => 'form']) !!}
                <div class="form-group">
                    {!! Form::label('name', __('generics.name')) !!}
                    {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre del servicio', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', __('generics.description')) !!}
                    {!! Form::textarea('description',null,['class'=>'form-control', 'placeholder'=>__('generics.description'), 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('type', __('generics.type')) !!}
                    {!! Form::text('type',null,['class'=>'form-control', 'placeholder'=>__('generics.type')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tags', __('generics.tags')) !!}
                    {!! Form::text('tags',null,['class'=>'form-control', 'placeholder'=>__('generics.tags')]) !!}
                </div>

                <div class="form-group" style="text-align: center">
                    <a href="{{route('services.index')}}">
                        <button type="button" class="btn btn-secondary btn-sm">
                            @lang('generics.cancel')
                        </button>
                    </a>
                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
