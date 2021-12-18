<?php
$countryUbication = \App\Country::find($customer->user->country_code);
?>

<div class="tab-pane active" id="btabs-static-profile" role="tabpanel">
    <table class="table table-striped table-borderless table-vcenter">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary text-white">@lang('generics.personal_information')</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td width="50%">
                <a class="font-size-h6 font-w600">@lang('generics.person_type')</a>
                @if($customer->customer_type == "Natural")
                    <div class="font-size-sm text-muted mt-1">@lang('generics.natural')</div>
                @else
                    <div class="font-size-sm text-muted mt-1">@lang('generics.juridical')</div>
                @endif
            </td>
            <td width="50%">
                <a class="font-size-h6 font-w600">@lang('generics.name')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->user->name }}</div>
            </td>
        </tr>
        <tr>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.nick')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->user->nick_name }}</div>
            </td>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.email')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->user->email }}</div>
            </td>
        </tr>

        <tr>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.document_type')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->document }}</div>
            </td>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.document_number')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->document_number }}</div>
            </td>
        </tr>

        <tr>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.birthday')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->birthday }}</div>
            </td>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.phone')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->user->phone }}</div>
            </td>
        </tr>

        <tr>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.language')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->user->language }}</div>
            </td>
            <td width="50%">

            </td>
        </tr>
        </tbody>
    </table>

    <table class="table table-striped table-borderless table-vcenter">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary text-white">@lang('generics.location')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.country')</a>
                @if(isset($countryUbication))
                    <div class="font-size-sm text-muted mt-1">{{ $countryUbication->name }}</div>
                @else
                    <div class="font-size-sm text-muted mt-1"></div>
                @endif
            </td>
        </tr>
        </tbody>
    </table>

    <table class="table table-striped table-borderless table-vcenter">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary text-white">@lang('generics.contact_information')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.contact_name')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->contact_name }}</div>
            </td>

            <td width="50%">
                <a class="font-size-h5 font-w600">@lang('generics.contact_phone')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->contact_phone }}</div>
            </td>
        </tr>
        </tbody>
    </table>

    <table class="table table-striped table-borderless table-vcenter">
        <thead class="border-bottom">
        <tr>
            <th colspan="2" class="bg-primary text-white">@lang('generics.security')</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <div class="row justify-content-center text-center">
                    <h4>@lang('generics.state'): </h4>
                    @if($customer->user->state == 1)
                        <h4 style="color: green;padding: 0 2%;">ACTIVO</h4>
                    @else
                        <h4 style="color: red;padding: 0 2%;">INACTIVO</h4>
                    @endif
                </div>
            </td>
        </tr>
        </tbody>
    </table>

    <div class="form-group" style="text-align: center">
        <a href="{{route('customers.index')}}">
            <button type="button" class="btn btn-secondary btn-sm">
                @lang('generics.cancel')
            </button>
        </a>
        <a href="{{route('customers.edit',$customer) }}">
            <button type="button" class="btn btn-smirrow btn-sm">
                @lang('generics.edit')
            </button>
        </a>
    </div>

</div>
