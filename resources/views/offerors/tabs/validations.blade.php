<div class="tab-pane" id="btabs-static-validations" role="tabpanel">
    <h2 class="font-w400">@lang('generics.validations')</h2>

    <div class="content">
        <table class="table table-bordered table-striped table-vcenter">
            <thead>
            <tr>
                <th class="text-center" style="width: 50px;">@lang('generics.state')</th>
                <th>@lang('generics.name')</th>
                <th>@lang('generics.description')</th>
                <th class="text-center">@lang('generics.actions')</th>
            </tr>
            </thead>

            <tbody>
            @foreach($documentValidates as $document)
                @php
                    $stateValidate = null;
                @endphp
                @foreach($validations as $validation)
                    @if($validation->document_validate_id == $document->id)
                        @php
                            $stateValidate = $validation;
                        @endphp
                    @endif
                @endforeach
                <tr>
                    <td class="text-center" scope="row">
                        @if($stateValidate == null)
                            <i class="fa fa-2x fa-exclamation-triangle text-warning" data-toggle="tooltip"
                               data-placement="right" title="@lang('messages.pending_document')"></i>
                        @else
                            @if($stateValidate->state == 1)
                                <i class="fa fa-2x fa-times-circle text-danger" data-toggle="tooltip"
                                   data-placement="right" title="@lang('messages.rejected_document')"></i>
                            @endif
                            @if($stateValidate->state == 2)
                                <i class="fa fa-2x fa-file-signature text-info" data-toggle="tooltip"
                                   data-placement="right" title="@lang('messages.process_document')"></i>
                            @endif
                            @if($stateValidate->state == 3)
                                <i class="fa fa-2x fa-check-circle text-success" data-toggle="tooltip"
                                   data-placement="right" title="@lang('messages.validated_document')"></i>
                            @endif
                        @endif
                    </td>
                    <td class="d-none d-sm-table-cell font-size-sm">
                        {{$document->name}}
                    </td>
                    <td class="d-none d-sm-table-cell font-size-sm">
                        {{$document->description}}
                    </td>
                    <td class="text-center">
                        @if($stateValidate == null)
                            <div class="btn-group">
                                <a href="{{route('validations.create_admin', [$document->id, $offeror->user->id, 2])}}" class="text-warning">
                                    <i class="fa fa-2x fa-upload" data-toggle="tooltip" data-placement="left" title="@lang('messages.upload_document')"></i></a>
                            </div>
                        @else
                            @if($stateValidate->state == 1)
                                <a href="{{route('validations.edit_admin', [$stateValidate->id, $offeror->user->id, 2])}}" class="text-danger">
                                    <i class="fa fa-2x fa-upload" data-toggle="tooltip" data-placement="left" title="@lang('messages.upload_document')"></i></a>
                            @endif
                            @if($stateValidate->state == 2)
                                <i class="fa fa-2x fa-spinner text-info"></i>
                            @endif
                            @if($stateValidate->state == 3)
                                <i class="fa fa-2x fa-check-circle text-success"></i>
                            @endif
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <!-- END Your Block -->

        <div>
            <p class="btn btn-warning mr-1 mb-1"></p>
            <small>@lang('messages.pending_document')</small>
        </div>

        <div>
            <p class="btn btn-smirrow mr-1 mb-1"></p>
            <small>@lang('messages.rejected_document')</small>
        </div>

        <div>
            <p class="btn btn-info mr-1 mb-1"></p>
            <small>@lang('messages.process_document')</small>
        </div>

        <div>
            <p class="btn btn-success mr-1 mb-1"></p>
            <small>@lang('messages.validated_document')</small>
        </div>
    </div>
</div>
