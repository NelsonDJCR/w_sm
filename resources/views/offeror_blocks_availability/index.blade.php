@extends('layouts.offerors')

@include('includes.datatables')

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
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
@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    @lang('generics.block_availability')
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">@lang('generics.listing')</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">@lang('generics.block_availability')</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('offeror_blocks_availability.index')}}">index</a>
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
                <h3 class="block-title">@lang('generics.listing') @lang('generics.block_availability')</h3>
                <div class="col-md-3 ml-auto text-right" style="padding: 1% 0;">
                    <a href="{{ route('offeror_blocks_availability.create') }}">
                        <button type="button" class="btn btn-smirrow">@lang('buttons.new')</button>
                    </a>
                </div>
            </div>

            <div class="block-content">

                <table class="table table-vcenter" id="blocks-availability-table">
                    <thead>
                        <tr>
                            <th>@lang('generics.id')</th>
                            <th>@lang('generics.from_date')</th>
                            <th>@lang('generics.to_date')</th>
                            <th>@lang('generics.reason')</th>
                            <th>@lang('generics.actions')</th>
                        </tr>
                    </thead>
                </table>


            </div>

        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#blocks-availability-table').DataTable({
                searching: false,
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('offeror_blocks_availability.get_list_data_tables') }}",
                columns: [
                    {name: 'id'},
                    {name: 'initial_date'},
                    {name: 'final_date',className: "d-none d-sm-table-cell"},
                    {name: 'motive',className: "d-none d-sm-table-cell"},
                    {name: 'action', orderable: false, searchable: false}
                ],
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando _START_ al _END_ de _TOTAL_ ",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
        });
    </script>
@endpush
