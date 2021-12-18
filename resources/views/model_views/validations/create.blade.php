@extends('layouts.offerors')

@push('scripts')
    <script> src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script>
    <script type="text/javascript">
        (function(){
            function filePreview(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    var inputFile = event.currentTarget;

                    reader.onload = function(e){
                        $('#imagePreview').html("<iframe height=\"500\" width=\"500\" src='"+e.target.result+"' />");
                        $('#label-file').html(inputFile.files[0].name);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#file').change(function(){
                filePreview(this);
            });
        })();
    </script>
@endpush

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">

            <div class="block-content">

                {!! Form::open(['route'=>'validations.store', 'method'=>'POST', 'role' => 'form', 'files'=>true]) !!}

                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                <input type="hidden" name="document_validate_id" value="{{$validation->id}}">
                <input type="hidden" name="offeror_or_customer" value="2">
                <input type="hidden" name="natural_or_juridical" value="1">
                <input type="hidden" name="description" value="2">
                <input type="hidden" name="state" value="2">

                <div class="col-md-12 form-group">
                    <p class="p-3 bg-dark text-white">
                        <b>{{$validation->name}}</b>
                        <br>
                        {{$validation->description}}
                    </p>
                </div>

                <div class="col-md-12 form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="file" name="file">
                        <label class="custom-file-label" id="label-file" name="label-file" for="file">@lang('generics.choose_file')</label>
                    </div>
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('validations.index', $user->offeror->id)}}">
                        <i class="fa fa-times-circle"></i>
                        @lang('generics.cancel')
                    </a>
                    <button type="submit" class="btn btn-smirrow "> <i class="fa fa-check-circle"></i> @lang('generics.save')</button>
                </div>

                {!! Form::close() !!}


            </div>
        </div>

        <div class="col-md-6 animated fadeIn">
            <div class="options-container" id="imagePreview"></div>
        </div>

        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
