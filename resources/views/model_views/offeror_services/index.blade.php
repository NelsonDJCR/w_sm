@extends('layouts.offerors')

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
@endsection
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
        $(document).on('click', ".confirm-submit", function(e) {
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

    <!-- Modal Simulador -->
    <div class="modal fade" id="modal-block-popout" tabindex="-1" role="dialog" aria-labelledby="modal-block-popout"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title"> @lang('generics.fare_simulator') </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block">
                        <div class="block-content">
                            <script language="JavaScript">
                                function calcular() {
                                    var customer_price = parseFloat(document.getElementById("customer_price").value);
                                    var tax_percentage = 19;
                                    var commission_percentage = 11;
                                    var base_price = (customer_price / ((100 + commission_percentage) / 100)) / ((100 + tax_percentage) / 100);
                                    var tax_price = base_price * (tax_percentage / 100);
                                    var commission_price = (base_price + tax_price) * (commission_percentage / 100);
                                    document.getElementById("base_price").value = Math.round(base_price * 100) / 100;
                                    document.getElementById("tax_price").value = Math.round(tax_price * 100) / 100;
                                    document.getElementById("commission_price").value = Math.round(commission_price * 100) / 100;
                                }
                            </script>

                            <div class="block-content">

                                <span onload="calcular();">

                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form">
                                        <table class="table  table-striped table-borderless table-vcenter">
                                            <tbody>
                                                <tr>
                                                    <td>Tarifa Final</td>
                                                    <td>$<input type="number" id="customer_price" name="customer_price"
                                                            value="" size="20" onkeyup="calcular();"></td>
                                                </tr>
                                                <tr>
                                                    <td>Total recibido</td>
                                                    <td>$<input type="number" name="base_price" value="" id="base_price"
                                                            size="20" disabled></td>
                                                </tr>
                                                {{-- <tr>
                                                    <td>Iva (19%)</td>
                                                    <td>+ <input type="number" name="tax_price" value="" id="tax_price"
                                                            size="20" disabled></td>
                                                </tr>
                                                <tr>
                                                    <td>Uso plataforma (11%)</td>
                                                    <td>+ <input type="number" name="commission_price" value=""
                                                            id="commission_price" size="20" disabled></td>
                                                </tr> --}}
                                              
                                            </tbody>
                                        </table>
                                    </form>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="content"  >
        @if (!(
            auth()->user()->offeror->getQuantityServices() > 0
        ))
            <div class="alert alert-smirrow alert-dismissable" role="alert">
                <button type="button" style="color:white;" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">@lang('messages.services_help')</h3>
                <p class="mb-0">@lang('messages.services_complete')</p>
            </div>
        @endif
        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('generics.services')</h3>
            <div class="block-options">
                <button type="button" class="btn bg-black" data-toggle="modal" data-target="#modal-block-popout"
                    title="@lang('generics.fare_simulator') "><i class="fa fa-calculator"></i></button>
                <a class="btn btn-smirrow "
                    href="{{ route('offeror_services.createService', auth()->user()->offeror) }}">@lang('generics.add') <i
                        class="fa fa-plus"></i></a>
            </div>
        </div>
        <!-- Your Block -->

        <div class="block" >
            <div class="block-content block-content-full" >
                    <table class="tableas datatable">
                        <thead>
                            <tr>
                                <th>@lang('generics.service')</th>
                                <th class="d-none d-sm-table-cell">@lang('generics.description')</th>
                                <th class="d-none d-sm-table-cell">@lang('generics.time_units')</th>
                                <th class="d-none d-sm-table-cell">@lang('generics.quantity')</th>
                                <th class="d-none d-sm-table-cell">@lang('generics.fare')</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">@lang('generics.currency')</th>
                                <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (auth()->user()->offeror->services as $service)
                                <tr>
                                    <th class="font-w600 font-size-sm">
                                        <a>{{ $service->service->name }}</a>
                                    </th>

                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        {{ $service->description }}
                                    </td>

                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        {{ $service->time_unit->name }}
                                    </td>

                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        {{ $service->quantity }}
                                    </td>

                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        ${{ $service->cost }}
                                    </td>

                                    <td class="d-none d-sm-table-cell font-size-sm">
                                        {{ $service->currency->code }}
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group">
                                            {!! Form::open(['route' => ['offeror_services.destroy', $service], 'method' => 'DELETE', 'role' => 'form']) !!}

                                            <a href="{{ route('offeror_services.edit', $service) }}">
                                                <button type="button" class="btn btn-sm btn-smirrow" data-toggle="tooltip"
                                                    title="Edit">
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </button>
                                            </a>

                                            <button type="button" class="btn btn-sm btn-smirrow confirm-submit"
                                                data-toggle="tooltip" title="Remove">
                                                <i class="fa fa-fw fa-times"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
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
