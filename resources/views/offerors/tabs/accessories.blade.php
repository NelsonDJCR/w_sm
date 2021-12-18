<div class="tab-pane" id="btabs-static-accessories" role="tabpanel">

    <div class="block-header block-header-default">
        <h3 class="block-title">@lang('generics.accessories')</h3>
        <div class="block-options">
            <a class="btn btn-smirrow" href="{{route('offeror_accessories.createAccessory', $offeror->id)}}">@lang('generics.add') <i class="fa fa-plus"></i></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <table class="table table-vcenter">
                <thead>
                <tr>
                    <th>@lang('generics.name')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.description')</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">@lang('generics.fare')</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">@lang('generics.currency')</th>
                    <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($offeror->accessories as $accessory)


                    <tr>
                        <th class="font-w600 font-size-sm">
                            {{$accessory->accessory->name}}
                            <br>
                            <small>
                                {{$accessory->description}}
                            </small>
                        </th>

                        <td class="font-w600 font-size-sm">
                            {{$accessory->description}}
                        </td>

                        <td class="font-w600 font-size-sm">${{$accessory->cost}}</td>

                        <td class="font-w600 font-size-sm">{{$accessory->currency->name}}</td>

                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{route('offeror_accessories.edit',$accessory)}}">
                                    <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                </a>

                                {!! Form::open(['route'=>['offeror_accessories.destroy',$accessory], 'method'=>'DELETE', 'role' => 'form']) !!}
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

            <p> * @lang('generics.additional_value_to_service_costs').</p>


        </div>
    </div>

</div>
