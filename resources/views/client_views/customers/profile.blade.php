@extends('layouts.customer')

@section('content')

    <div class="content">
        <div class="block">
            <div class="block-content">
        <table class="table table-striped table-borderless table-vcenter">
            <thead class="border-bottom">
            <tr>
                <th colspan="2" class="bg-secondary text-white">@lang('generics.personal_information')</th>
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
                <td>
                    <a class="font-size-h5 font-w600">@lang('generics.language')</a>
                    <div class="font-size-sm text-muted mt-1">{{ $customer->user->language }}</div>
                </td>
                <td>
                    <a class="font-size-h5 font-w600">@lang('generics.country')</a>
                    <div class="font-size-sm text-muted mt-1">{{ $customer->user->getCountryCode()->name }}</div>
                </td>
            </tr>
            <tr>
            <td>
                <a class="font-size-h5 font-w600">@lang('generics.contact_name')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->contact_name }}</div>
            </td>
            <td>
                <a class="font-size-h5 font-w600">@lang('generics.contact_phone')</a>
                <div class="font-size-sm text-muted mt-1">{{ $customer->contact_phone }}</div>
            </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>

                </td>
            </tr>

            </tbody>
        </table>

        <div class="form-group" style="text-align: center">
            <a href="{{route('home')}}">
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
        </div>
        <div class="col-12 text-right">
            <button type="button" class="btn btn-smirrow btn-delete-account">@lang('generics.delete_account')</button>
        </div>
    </div>

@endsection
@section('js_after')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.btn-delete-account').click(function() {
            Swal.fire({
                title: '¿Eliminar su cuenta?',
                text: 'Esta acción no se puede revertir',
                icon: 'question',
                confirmButtonColor: '#E61879',
                cancelButtonColor: '#000000',
                showCancelButton: true,
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: 'https://www.smirrow.com/validations/index/userdelete',
                        data: {
                            id: 1,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(r) {
                            console.log(r);
                        },
                    });
                    Swal.fire('Eliminado!', 'Registro eliminado correctamente.', 'success')
                    .then(function(){ 

                      $.post('https://www.smirrow.com/logout', {
                            _token: "{{ csrf_token() }}"
                        }).done(function(e){
                            window.location.href = '/'
                        });
                    });;
                    return false;
                }
            });
        });
    </script>
@endsection
