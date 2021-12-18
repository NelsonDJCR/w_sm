@extends('layouts.backend')

@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Editar documento</h3>
            </div>


            <div class="block-content">

                {!! Form::open(['route'=>['document-validates.update',$documentValidate->id], 'method'=>'PUT', 'role' => 'form']) !!}


                <div class="form-group">
                    {!! Form::label('name', __('generics.name')) !!}
                    {!! Form::text('name',$documentValidate->name,['class'=>'form-control', 'placeholder'=>__('generics.document'), 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', __('generics.description')) !!}
                    {!! Form::textarea('description',$documentValidate->description,['class'=>'form-control', 'placeholder'=>__('generics.description')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('',__('generics.person_type') ) !!}
                    {!! Form::select('person_type', ['Natural' => __('generics.natural'), 'Juridical' => __('generics.juridical')], $documentValidate->person_type, ['class'=>'form-control'])!!}
                </div>

                <div class="form-group" style="text-align: center">
                    <a href="{{route('document-validates.index')}}">
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
