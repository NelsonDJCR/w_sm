@extends('layouts.backend')

@include('includes.datatables')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.validation')
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="tab-pane active" id="btabs-static-profile" role="tabpanel">
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="border-bottom">
                <tr>
                    <th colspan="3" class="bg-primary text-white">@lang('generics.personal_information')</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="25%">
                        @if ($validation->offeror_or_customer == 1)
                            <a class="font-size-h6 font-w600">ID @lang('generics.customer'):</a>
                            <div class="font-size-sm text-muted mt-1">{{$validation->user->customer->id}}</div>
                        @else
                            <a class="font-size-h6 font-w600">ID @lang('generics.offeror'):</a>
                            <div class="font-size-sm text-muted mt-1">{{$validation->user->offeror->id}}</div>
                        @endif
                    </td>

                    <td width="25%">
                        <a class="font-size-h6 font-w600"> @lang('generics.person_type'):</a>
                        @if($validation->natural_or_juridical == 2)
                            <div class="font-size-sm text-muted mt-1">@lang('generics.juridical')</div>
                        @else
                            <div class="font-size-sm text-muted mt-1">@lang('generics.natural')</div>
                        @endif
                    </td>

                    <td width="50%">
                        <a class="font-size-h5 font-w600">@lang('generics.name')</a>
                        <div class="font-size-sm text-muted mt-1">{{ $validation->user->name }}</div>
                    </td>
                </tr>
            </table>
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="border-bottom">
                <tr>
                    <th colspan="2" class="bg-primary text-white">@lang('generics.validation')</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td width="50%">
                        <a class="font-size-h6 font-w600">@lang('generics.document')</a>
                        <div class="font-size-sm text-muted mt-1">{{$validation->documentValidate->name}}</div>
                    </td>
                    <td width="50%">
                        <a class="font-size-h6 font-w600">@lang('generics.description')</a>
                        <div class="font-size-sm text-muted mt-1">{{$validation->documentValidate->description}}</div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="block">
            <div class="block-content">
                <div class="block">
                    <div>
                        <iframe src="{{asset('storage/'. $validation->file)}}" height="1000" width="1000"></iframe>
                    </div>
                    <a target="_blank" href="{{asset('storage/'. $validation->file)}}">@lang('generics.download')</a>
                </div>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <div class="form-group" style="text-align: center">
        @if($validation->state == 2)
            <button type="button" class="btn btn btn-smirrow push" data-toggle="modal" data-target="#modal-block-normal"> <i class="fa fa-fw fa-times-circle"></i> @lang('generics.not_validate')</button>
            <a href="{{route('validations.validated',$validation->id)}}" class="btn btn-smirrow push"> <i class="fa fa fa-check-circle"></i> @lang('generics.validate') </a>
        @else
            <a href="{{route('validations.check')}}" class="btn btn-smirrow push"> <i class="fa fa fa-undo"> </i> @lang('generics.return') </a>
        @endif

    </div>
    <!-- END Page Content -->

    <!-- Normal Block Modal -->
    <div class="modal show" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-danger">
                        <h3 class="block-title"> @lang('generics.not_validate') </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Cerca">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>

                </div>
                <div class="block-content font-size-sm">
                    {!! Form::open(['route'=>['validations.not_validated', $validation] , 'method'=>'PUT', 'role' => 'form', 'files'=>true]) !!}

                    <input type="hidden" name="user_id" value="{{$validation->user_id}}">
                    <input type="hidden" name="document_validate_id" value="{{$validation->document_validate_id}}">
                    <input type="hidden" name="offeror_or_customer" value="{{$validation->offeror_or_customer}}">
                    <input type="hidden" name="natural_or_juridical" value="{{$validation->natural_or_juridical}}">
                    <input type="hidden" name="file" value="{{$validation->file}}">
                    <input type="hidden" name="state" value="1">

                    <div class="form-group">
                        <p class="font-size-h6 text-center"><b>@lang('validation.not_validation_select')</b></p>
                        <div class="form-group">
                            <select name="description" id="description" class="form-control">
                                <option value="3"> @lang('validation.illegible_document') </option>
                                <option value="4"> @lang('validation.not_corresponding_document') </option>
                                <option value="5"> @lang('validation.not_corresponding_information') </option>
                                <option value="6"> @lang('validation.incomplete_document') </option>
                                <option value="7"> @lang('validation.altered document') </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-smirrow "><i class="fa fa-times-circle"></i> @lang('generics.not_validate')</button>
                    </div>

                    {!! Form::close() !!}

                </div>
                <div class="block-content block-content-full text-center border-top">

                </div>
            </div>
        </div>
    </div>
    <!-- END Normal Block Modal -->
@endsection


