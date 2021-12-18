<div class="tab-pane" id="btabs-static-operations" role="tabpanel">
    <h2 class="font-w400">@lang('generics.operations')</h2>
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.operations')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Listado</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">@lang('generics.operations')</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('operations.index')}}">index</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

    @php
        $operations = App\Operation::getOperationsKardex();
    @endphp

    <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h4>@lang('generics.your_balance_is') ${{ number_format($offeror->summary->balance, 2, ",", ".") }}</h4>
            </div>
            <!-- Your Block -->
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr>
                    <th class="d-none d-sm-table-cell">@lang('generics.operation')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.id')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.amount')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.observations')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.date')</th>
                </tr>
                </thead>

                <tbody>
                @foreach($offeror->operations as $op)

                    <tr>
                        @if($operations[$op->operation] == 'exit')
                            <td>
                                <span class="badge badge-danger">
                                    <i class="far fa-arrow-alt-circle-down fa-1x"> {{$op->operation}}</i>
                                </span>
                            </td>
                        @else
                            <td>
                                <span class="badge badge-success">
                                    <i class="far fa-arrow-alt-circle-down fa-1x"> {{$op->operation}}</i>
                                </span>
                            </td>
                        @endif

                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$op->id}}
                        </td>

                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$op->amount}}
                        </td>

                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$op->observation}}
                        </td>

                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$op->created_at}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <span class="badge badge-success">
                <i class="far fa-arrow-alt-circle-up fa-1x"> Ingreso</i>
            </span>
        </div>

        <div>
            <span class="badge badge-danger">
                <i class="far fa-arrow-alt-circle-down fa-1x"> Desembolso</i>
            </span>
        </div>
    </div>

</div>
