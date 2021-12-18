@extends('layouts.backend')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Editar accesorio</h3>
            </div>


            <div class="block-content">

                {!! Form::open(['route'=>['accessories.update',$accessory->id], 'method'=>'PUT', 'role' => 'form']) !!}


                <div class="form-group">
                    {!! Form::label('name', __('generics.name')) !!}
                    {!! Form::text('name',$accessory->name,['class'=>'form-control', 'placeholder'=>'Nombre del accesorio', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', __('generics.description')) !!}
                    {!! Form::textarea('description',$accessory->description,['class'=>'form-control', 'placeholder'=>__('generics.description')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('type', __('generics.type')) !!}
                    {!! Form::text('type',$accessory->type,['class'=>'form-control', 'placeholder'=>__('generics.type')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('tags', __('generics.tags')) !!}
                    {!! Form::text('tags',$accessory->tags,['class'=>'form-control', 'placeholder'=>__('generics.tags')]) !!}
                </div>

                <div class="form-group" style="text-align: center">
                    <a href="{{route('accessories.index')}}">
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
