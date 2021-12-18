@extends('layouts.offerors')

@include('includes.datatables')

@section('content')

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
                            <a class="font-size-h6 font-w600" >@lang('generics.offeror_id')</a>
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
                        <td width="50%">
                            <a class="font-size-h6 font-w600" >@lang('generics.account_number')</a>
                            <div class="font-size-sm text-muted mt-1">{{ $monetaryRequest->financial_information }}</div>
                        </td>

                        <td>
                        </td>
                    </tr>

                    <tr>
                    @if($monetaryRequest->status == "Aceptado")
                        <td width="50%">
                            <a class="font-size-h6 font-w600" >@lang('generics.status')</a>
                            <div class="font-size-sm text-muted mt-1 badge badge-success">{{  $monetaryRequest->status }}</div>
                        </td>
                    @elseif($monetaryRequest->status == "Procesando")
                        <td width="50%">
                            <a class="font-size-h6 font-w600" >@lang('generics.status')</a>
                            <div class="font-size-sm text-muted mt-1 badge badge-warning">{{  $monetaryRequest->status }}</div>
                        </td>
                    @else
                        <td width="50%">
                            <a class="font-size-h6 font-w600" >@lang('generics.status')</a>
                            <div class="font-size-sm text-muted mt-1 badge badge-danger">{{  $monetaryRequest->status }}</div>
                        </td>
                    @endif
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.observation')</a>
                            <div class="font-size-sm text-muted mt-1">{{  $monetaryRequest->observation }}</div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.id_user')</a>
                            <div class="font-size-sm text-muted mt-1">{{  $monetaryRequest->id_user_requesting }}</div>
                        </td>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.approved')</a>
                            <div class="font-size-sm text-muted mt-1">{{  $monetaryRequest->id_user_approves }}</div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a class="font-size-h6 font-w600" >@lang('generics.created_at')</a>
                            <div class="font-size-sm text-muted mt-1">{{  $monetaryRequest->created_at }}</div>
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
