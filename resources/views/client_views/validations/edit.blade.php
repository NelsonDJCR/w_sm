@extends('layouts.customer')

@push('scripts')
    <script> src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script>
    <script type="text/javascript">
        (function(){
            function filePreview(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();
                    var inputFile = event.currentTarget;

                    reader.onload = function(e){
                        $('#imagePreview').html("<iframe height=\"500\" width=\"500\" src='" + e.target.result + "' />");
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
        <div class="alert alert-danger alert-dismissable" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <span class="font-size-h5 my-2"><b> <i class="fa fa-fw fa-times-circle"></i> @lang('messages.rejected_document'):</b></span>
            @if($validation->description == 3)
                <span class="mb-0"> @lang('validation.illegible_document')</span>
            @elseif($validation->description == 4)
                <span class="mb-0"> @lang('validation.not_corresponding_document')</span>
            @elseif($validation->description == 5)
                <span class="mb-0"> @lang('validation.not_corresponding_information')</span>
            @elseif($validation->description == 6)
                <span class="mb-0"> @lang('validation.incomplete_document')</span>
            @elseif($validation->description == 7)
                <span class="mb-0"> @lang('validation.altered document')</span>
            @else
                <span class="mb-0"> @lang('generics.error')</span>
            @endif
        </div>
        <h2>Subir documento</h2>
        <!-- Your Block -->
        <div class="block">

            <div class="block-content">

                {!! Form::open(['route'=>['validations.update', $validation] , 'method'=>'PUT', 'role' => 'form', 'files'=>true]) !!}

                <input type="hidden" name="user_id" value="{{$validation->user_id}}">
                <input type="hidden" name="document_validate_id" value="{{$validation->document_validate_id}}">
                <input type="hidden" name="offeror_or_customer" value="{{$validation->offeror_or_customer}}">
                <input type="hidden" name="natural_or_juridical" value="{{$validation->natural_or_juridical}}">
                <input type="hidden" name="description" value="{{$validation->description}}">
                <input type="hidden" name="state" value="2">

                <div class="col-md-6 form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input js-custom-file-input-enabled" data-toggle="custom-file-input" id="file" name="file">
                        <label class="custom-file-label" id="label-file" name="label-file" for="file"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">@lang('generics.choose_file')</font></font></label>
                    </div>
                </div>

                <div class="form-group text-right">
                    <a class="btn btn-secondary" href="{{route('validations.index_customer', $user->customer->id)}}">
                        <i class="fa fa-times-circle"></i>
                        @lang('generics.cancel')
                    </a>
                    <button type="submit" class="btn btn-smirrow "> <i class="fa fa-check-circle"></i> @lang('generics.add')</button>
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
