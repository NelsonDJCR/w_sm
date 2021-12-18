<div class="tab-pane" id="btabs-static-fares" role="tabpanel">
    <table class="table table-vcenter">
        <thead>
        <tr>
            <th>@lang('generics.service')</th>
            <th class="d-none d-sm-table-cell">@lang('generics.description')</th>
            <th class="d-none d-sm-table-cell">@lang('generics.time_units')</th>
            <th class="d-none d-sm-table-cell">@lang('generics.quantity')</th>
            <th class="d-none d-sm-table-cell">@lang('generics.fare')</th>
        </tr>
        </thead>
        <tbody>
        @foreach($offeror->services as $service)

            <tr>
                <th class="font-w600 font-size-sm">
                    {{$service->service->name}}
                </th>
                <td class="font-w600 font-size-sm">
                    {{$service->description}}
                </td>
                <td class="font-w600 font-size-sm">
                    {{$service->time_unit->name}}
                </td>
                <td class="font-w600 font-size-sm">
                    {{$service->quantity}}
                </td>

                <td class="font-w600 font-size-sm">${{$service->cost}}</td>


        @endforeach


        </tbody>
    </table>

</div>
