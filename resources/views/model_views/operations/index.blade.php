@extends('layouts.offerors')

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        @php
            $operations = App\Operation::getOperationsKardex();
        @endphp
        <div>
            <span class="badge badge-info">
                <i class="far fa-arrow-alt-circle-up fa-1x"> @lang('generics.deposit')  </i>
            </span>
            <span class="badge badge-danger">
                <i class="far fa-arrow-alt-circle-down fa-1x"> @lang('generics.outlay') </i>
            </span>
        </div>
        <!-- Your Block -->
        <div class="block">
            <div class="block-header">
                <h4>@lang('generics.your_balance_is'): ${{ number_format(auth()->user()->offeror->summary->balance, 2, ",", ".") }}</h4>
            </div>
            <!-- Your Block -->
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                    <tr>
                        <th class="d-sm-table-cell">@lang('generics.operation')</th>
                        <th class="d-sm-table-cell">@lang('generics.id')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.amount')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.observations')</th>
                        <th class="d-none d-sm-table-cell">@lang('generics.date')</th>
                    </tr>
                </thead>

                <tbody>
                @foreach(auth()->user()->offeror->operations as $op)

                    <tr>
                        @if($operations[$op->operation] == 'exit')
                            <td>
                                <span class="badge badge-danger">
                                    <i class="far fa-arrow-alt-circle-down fa-1x"> @lang('generics.outlay') </i>
                                </span>
                            </td>
                        @else
                            <td>
                                <span class="badge badge-success">
                                    <i class="far fa-arrow-alt-circle-down fa-1x"> @lang('generics.deposit') </i>
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



    </div>

@endsection
