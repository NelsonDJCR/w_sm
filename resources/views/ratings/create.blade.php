@extends('layouts.backend')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.ratings')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">@lang('generics.create')</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Examples</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Blank</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Calificar</h3>
            </div>

            @if ($errors->any())
                {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif

            <div class="block-content">

                {!! Form::open(['route'=>'ratings.store', 'method'=>'POST', 'role' => 'form']) !!}

                {!! Form::hidden('qualifier', '1', ['class'=>'form-control']) !!}

                {!! Form::hidden('qualified', '1', ['class'=>'form-control']) !!}

                <div class="form-group">
                    {!! Form::label('rating', __('generics.rating')) !!}
                    {!! Form::select('rating', ['1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5'], null, ['class'=>'form-control', 'placeholder'=>__('generics.rating')]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('comments', __('generics.comments')) !!}
                    {!! Form::textarea('comments',null,['class'=>'form-control', 'placeholder'=>__('generics.comments')]) !!}
                </div>

                <div class="form-group">

                    {!! Form::submit('Guardar', ['class' => 'btn btn-smirrow btn-sm']) !!}
                    <a href="{{route('ratings.index')}}">
                        <button type="button" class="btn btn-smirrow btn-sm">
                            @lang('generics.cancel')
                        </button>
                    </a>
                </div>

                {!! Form::close() !!}


            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
