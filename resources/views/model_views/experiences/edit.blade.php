@extends('layouts.offerors')

@push('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script>jQuery(function(){ One.helpers(['datepicker']); });</script>
@endpush

@section('content')

    <!-- Page Content -->
    <div class="content">
        <h2>Editar experiencia</h2>

        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Editar evento</h3>
            </div>

            <div class="block-content">

                {!! Form::open(['route'=>['experiences.update', $experience], 'method'=>'PUT', 'role' => 'form']) !!}

                <input type="hidden" name="offeror_id" value="{{ $experience->offeror_id }}">

                <div class="form-group">
                    {!! Form::label('title', __('generics.title')) !!}
                    {!! Form::text('title', $experience->title, ['class'=>'form-control', 'placeholder'=>'Nombre del evento', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', __('generics.description')) !!}
                    {!! Form::textarea('description', $experience->description, ['class'=>'form-control', 'placeholder'=>'Descripción', 'required' => 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('date', __('generics.date')) !!}
                    {!! Form::text('date', $experience->date, ['class'=>'js-datepicker form-control', 'required' => 'required', 'data-week-start'=>'1', 'data-date-format'=>'yyyy-mm-dd', 'placeholder'=>"aaaa-mm-dd", 'data-date-end-date'=>'', 'language'=>'es']) !!}
                </div>


                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('experiences.index', array('id'=> $experience->offeror_id))}}">
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
