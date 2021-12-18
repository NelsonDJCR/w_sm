@extends('layouts.offerors')
<link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
@section('js_after')
<script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            var table = $('.datatable').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": "",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
            });
        });
        $(document).on('click', ".confirm-submit", function (e) {
            e.preventDefault();
            e.stopPropagation();
            let form = $(this).parents('form');
            Swal.fire({
                title: '¿Seguro/a que desea eliminarlo?',
                text: "Esta acción no se podra revertir.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Eliminando',
                        'Su registro se eliminará',
                        'success'
                    );
                    form.submit();
                }
            })
        });
    </script>
@endsection()

@section('content')
    <!-- Page Content -->
    <div class="content">
        @if(!(auth()->user()->offeror->getAccounts()>0))
            <div class="alert alert-warning alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">@lang('messages.financial_help')</h3>
                <p class="mb-0">@lang('messages.financial_complete')</p>
            </div>
        @endif


        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('generics.financial_information')</h3>
            <div class="block-options">
                <a class="btn btn-smirrow" href="{{route('financial_informations.create_financial', $offeror)}}">@lang('generics.add') <i class="fa fa-plus"></i></a>
            </div>
        </div>

            <div class="block">
                <div class="block-content block-content-full">
                    <div class="row table-responsive">

        <!-- Your Block -->
        <table class="table table-bordered datatable table-striped table-vcenter">
            <thead>
                <tr>
                    <th class="d-sm-table-cell">@lang('generics.bank')</th>
                    <th class="d-sm-table-cell">@lang('generics.account_number')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.account_type')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.owner_account')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.id_owner_account')</th>
                    <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
                </tr>
            </thead>

            <tbody>
                @foreach($offeror->financialInformation as $financialInformation)
                    <tr>
                        <th class="font-w600 font-size-sm">
                            {{$financialInformation->bank->name}}
                        </th>

                        <td class="font-w600 font-size-sm">
                            {{$financialInformation->number_account}}
                        </td>

                        <td class="font-w600 font-size-sm">
                            {{$financialInformation->type_account}}
                        </td>

                        <td class="font-w600 font-size-sm">
                            {{$financialInformation->owner_account}}
                        </td>

                        <td class="font-w600 font-size-sm">
                            {{$financialInformation->id_owner_account}}
                        </td>

                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{route('financial-informations.edit', $financialInformation)}}">
                                    <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Info">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </button>
                                </a>

                                {!! Form::open(['route'=>['financial-informations.destroy', $financialInformation], 'method'=>'DELETE', 'role' => 'form']) !!}
                                    <button type="button" class="btn btn-sm btn-light confirm-submit" data-toggle="tooltip" title="Remove Client">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- END Your Block -->
                    </div>
                </div>
            </div>
    </div>
    <!-- END Page Content -->
@endsection
