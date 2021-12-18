@extends('layouts.customer')

@include('includes.datatables')
@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

@endsection

@section('content')

    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block block-mode-loading-oneui">
            <div class="block-header border-bottom">
                <h3 class="block-title">@lang('generics.list_of_') @lang('generics.requests')</h3>
            </div>
            <div class="block-content content">
                <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                    <thead class="thead-dark">
                    <tr class="text-uppercase">
                        <th class="font-w700">@lang('generics.id')</th>
                        <th class="font-w700">@lang('generics.date')</th>
                        <th class="font-w700">@lang('generics.state')</th>
                        <th class="font-w700 text-right" >@lang('generics.price')</th>
                        <th class="d-none d-sm-table-cell font-w700">@lang('generics.description')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(auth()->user()->customer->serviceRequest()->get() as $serviceRequest)

                        <tr>
                            <td>
                                <a class="font-w600" href="{{route('service_request.show',$serviceRequest->id)}}">#{{$serviceRequest->consecutive}}</a>
                            </td>
                            <th class="font-w600 font-size-sm">
                                <a href="{{route('service_request.show',$serviceRequest->id)}}">{{\Carbon\Carbon::parse($serviceRequest->initial_date)->toDateString()}}</a>
                            </th>
                            <td class="font-w600 font-size-sm">
                                @include('client_views.service_request.common.request_status')
                            </td>
                            <td class="font-w600 font-size-sm text-right">
                                ${{number_format($serviceRequest->total_value, 0)}}
                            </td>
                            <td class="d-none d-sm-table-cell font-w600 font-size-sm ">
                                {{substr($serviceRequest->description,0,50)}}...
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection

