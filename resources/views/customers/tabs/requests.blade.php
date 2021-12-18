<div class="tab-pane" id="btabs-static-requests" role="tabpanel">

    <div class="block block-mode-loading-oneui">
        <div class="block-header border-bottom">
            <h3 class="block-title">@lang('generics.list_of_') @lang('generics.requests')</h3>
        </div>
        <div class="block-content content">
            <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                <thead class="thead-dark">
                <tr class="text-uppercase">
                    <th class="font-w700 text-center">@lang('generics.id')</th>
                    <th class="font-w700 text-center">@lang('generics.date')</th>
                    <th class="font-w700 text-center">@lang('generics.state')</th>
                    <th class="font-w700 text-center" >@lang('generics.price')</th>
                    <th class="d-none d-sm-table-cell font-w700 text-center">@lang('generics.description')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customer->serviceRequest()->get() as $serviceRequest)
                    <tr>
                        <td>
                            #{{$serviceRequest->consecutive}}
                        </td>
                        <th class="font-w600 font-size-sm text-center">
                            {{\Carbon\Carbon::parse($serviceRequest->initial_date)->toDateString()}}
                        </th>
                        <td class="font-w600 font-size-sm text-center">
                            @include('client_views.service_request.common.request_status')
                        </td>
                        <td class="font-w600 font-size-sm text-center">
                            ${{number_format($serviceRequest->total_value, 0)}}
                        </td>
                        <td class="d-none d-sm-table-cell font-w600 font-size-sm text-center">
                            {{substr($serviceRequest->description,0,50)}}...
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>