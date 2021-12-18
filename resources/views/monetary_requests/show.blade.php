@extends('layouts.backend')

@include('includes.datatables')

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.monetary_requests')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Resumen</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">@lang('generics.monetary_requests')</li>
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

            <table class="table table-striped table-borderless table-vcenter push">
                <thead class="border-bottom">
                    <tr>
                        <th colspan="2" class="bg-primary-dark text-white">@lang('generics.summary')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.transaction_id')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->id }}</div>
                        </td>
                        <td>

                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.offeror_id')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->offeror_id }}</div>
                        </td>
                        <td width="50%">
                            <a class="font-size-h6 font-w600" >@lang('generics.name')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->offeror_id }}</div>
                        </td>
                    </tr>

                    <tr>
                        <td width="50%">
                            <a class="font-size-h6 font-w600" >@lang('generics.operation')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->operation }}</div>
                        </td>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.amount')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->amount }}</div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.status')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->status }}</div>
                        </td>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.observation')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->observation }}</div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.id_user')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->id_user_requesting }}</div>
                        </td>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.approved')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->id_user_approves }}</div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.created_at')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->created_at }}</div>
                        </td>
                        <td>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection
