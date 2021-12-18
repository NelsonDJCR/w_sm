<div class="tab-pane" id="btabs-static-financial_information" role="tabpanel">
    <div class="col-md-3 ml-auto text-right" style="padding: 1% 0;">
        <a class="btn btn-smirrow" href="{{route('financial_informations.create_financial', $offeror)}}">@lang('generics.add') <i class="fa fa-plus"></i></a>
    </div>

    <table class="table table-vcenter">
        <thead>
            <tr>
                <th class="d-none d-sm-table-cell">@lang('generics.bank')</th>
                <th class="d-none d-sm-table-cell">@lang('generics.account_number')</th>
                <th class="d-none d-sm-table-cell">@lang('generics.account_type')</th>
                <th class="d-none d-sm-table-cell">@lang('generics.owner_account')</th>
                <th class="d-none d-sm-table-cell">@lang('generics.id_owner_account')</th>
                <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
            </tr>
        </thead>

        <tbody>
            @foreach($offeror->financialInformation as $financialInformation)
                <tr>
                    <th class="font-w600 font-size-sm">
                        {{$financialInformation->bank->name}}
                    </th>

                    <td class="font-w600 font-size-sm">
                        {{$financialInformation->number_account}}
                    </td>

                    <td class="font-w600 font-size-sm">
                        {{$financialInformation->type_account}}
                    </td>

                    <td class="font-w600 font-size-sm">
                        {{$financialInformation->owner_account}}
                    </td>

                    <td class="font-w600 font-size-sm">
                        {{$financialInformation->id_owner_account}}
                    </td>

                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{route('financial-informations.edit', $financialInformation)}}">
                                <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Info">
                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                </button>
                            </a>

                            {!! Form::open(['route'=>['financial-informations.destroy', $financialInformation], 'method'=>'DELETE', 'role' => 'form']) !!}
                                <button type="button" class="btn btn-sm btn-light confirm-submit" data-toggle="tooltip" title="Remove Client">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>