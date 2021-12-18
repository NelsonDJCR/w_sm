@extends('layouts.backend')

@push('scripts')
    <script> src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script>
    <script type="text/javascript">
        (function () {
            function filePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    var inputFile = event.currentTarget;

                    reader.onload = function (e) {
                        $('#imagePreview').html("<iframe height=\"500\" width=\"500\" src='" + e.target.result + "' />");
                        $('#label-file').html(inputFile.files[0].name);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $('#file').change(function () {
                filePreview(this);
            });
        })();
    </script>
@endpush

@section('content')
    <!-- Page Content -->
    <div class="content">
        <h2>Subir documento</h2>
        <!-- Your Block -->
        <div class="block">


            <div class="block-content">

                {!! Form::open(['route'=>'validations.store', 'method'=>'POST', 'role' => 'form', 'files'=>true]) !!}

                <input type="hidden" name="user_id" value="{{$user->id}}">
                <input type="hidden" name="document_validate_id" value="{{$validation->id}}">
                <input type="hidden" name="description" value="2">
                @if ($offerorOrCustomer == 2)
                    <input type="hidden" name="offeror_or_customer" value="2">
                    <input type="hidden" name="natural_or_juridical" value="1">
                @else
                    <input type="hidden" name="offeror_or_customer" value="1">
                    @if($user->customer->customer_type == "Juridical")
                        <input type="hidden" name="natural_or_juridical" value="2">
                    @else
                        <input type="hidden" name="natural_or_juridical" value="1">
                    @endif
                @endif

                <input type="hidden" name="state" value="2">

                <div class="col-md-6 form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input js-custom-file-input-enabled"
                               data-toggle="custom-file-input" id="file" name="file">
                        <label class="custom-file-label" id="label-file" name="label-file" for="file"><font
                                    style="vertical-align: inherit;"><font style="vertical-align: inherit;">@lang('generics.choose_file')</font></font></label>
                    </div>
                </div>

                <div class="form-group text-right">
                    @if ($offerorOrCustomer == 2)
                        <a class="btn btn-secondary"
                           href="{{route('offerors.show', $user->offeror->id)}}#btabs-static-validations">
                            <i class="fa fa-times-circle"></i>
                            @lang('generics.cancel')
                        </a>
                    @else
                        <a class="btn btn-secondary"
                           href="{{route('customers.show', $user->customer->id)}}#btabs-static-validations">
                            <i class="fa fa-times-circle"></i>
                            @lang('generics.cancel')
                        </a>
                    @endif
                    <button type="submit" class="btn btn-smirrow "><i
                                class="fa fa-check-circle"></i> @lang('generics.add')</button>
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