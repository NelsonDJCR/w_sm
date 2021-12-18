<div class="tab-pane" id="btabs-static-transactions" role="tabpanel">
    <h2 class="font-w400">@lang('generics.transactions')</h2>

        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        @lang('generics.disbursement_requests')
                        <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Listado</small>
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item">@lang('generics.disbursement_requests')</li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a class="link-fx" href="{{route('monetary_requests.index')}}">index</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Your Block -->
            <div class="block">
                <div class="block-header">
                    <h4>@lang('generics.your_balance_is') ${{ number_format($offeror->summary->balance, 2, ",", ".") }}</h4>
                </div>
                <!-- Your Block -->
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                    <tr>
                        <th class="d-none d-sm-table-cell">@lang('generics.status')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.date')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.amount')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.observations')</th>
                        <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($offeror->monetaryRequest as $request)

                        <tr>
                            @if($request->status == "Aceptado")
                                <td>
                                    <span class="badge badge-success">
                                        {{$request->status}}
                                    </span>
                                </td>
                            @elseif($request->status == "Procesando")
                                <td>
                                    <span class="badge badge-warning">
                                        {{$request->status}}
                                    </span>
                                </td>
                            @else
                                <td>
                                    <span class="badge badge-danger">
                                        {{$request->status}}
                                    </span>
                                </td>
                            @endif

                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$request->created_at}}
                            </td>

                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$request->amount}}
                            </td>

                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$request->observation}}
                            </td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('monetary_requests.show', $request)}}">
                                        <button type="button" class="btn btn-sm btn-smirrow" data-toggle="tooltip" title="Show">
                                            <i class="fa fa-fw fa fa-eye"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <div>
                <p class="btn btn-success mr-1 mb-1"></p>
                <small>Solicitud exitosa</small>
            </div>

            <div>
                <p class="btn btn-warning mr-1 mb-1"> </p>
                <small>Solicitud en proceso</small>
            </div>

            <div>
                <p class="btn btn-smirrow mr-1 mb-1"> </p>
                <small>Solicitud rechazada</small>
            </div>
        </div>

</div>
