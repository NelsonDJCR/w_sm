<div class="tab-pane" id="btabs-static-services" role="tabpanel">

    <div class="block-header block-header-default">
        <h3 class="block-title">@lang('generics.services')</h3>
        <div class="block-options">
            <a class="btn btn-smirrow" href="{{route('offeror_services.createService', $offeror->id)}}">@lang('generics.add') <i class="fa fa-plus"></i></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <table class="table table-vcenter">

                <thead>
                    <tr>
                        <th>@lang('generics.service')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.description')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.time_units')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.quantity')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.fare')</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">@lang('generics.currency')</th>
                        <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($offeror->services as $service)
                        <tr>
                            <th class="font-w600 font-size-sm">
                                <a href="be_pages_generic_profile.html">{{$service->service->name}}</a>
                            </th>

                            <td class="font-w600 font-size-sm">
                                {{$service->service->description}}
                            </td>

                            <td class="font-w600 font-size-sm">
                                {{$service->time_unit->name}}
                            </td>

                            <td class="font-w600 font-size-sm">
                                {{$service->quantity}}
                            </td>

                            <td class="font-w600 font-size-sm">
                                ${{$service->cost}}
                            </td>

                            <td class="font-w600 font-size-sm">
                                {{$service->currency->code}}
                            </td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('offeror_services.edit',$service)}}">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                    </a>

                                    {!! Form::open(['route'=>['offeror_services.destroy',$service], 'method'=>'DELETE', 'role' => 'form']) !!}
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
    </div>
</div>