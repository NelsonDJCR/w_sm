@extends('layouts.backend')

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
                    form.submit();
                }
            })
        });
    </script>
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">@lang('generics.services')</h3>
                <div class="block-options">
                    <a href="{{ route('services.create') }}">
                        <button type="button" class="btn btn-smirrow">@lang('buttons.new')</button>
                    </a>
                </div>
            </div>

            <div class="block-content">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full" id="services-table">
                    <thead>
                    <tr>
                        <th>@lang('generics.name')</th>
                        <th>@lang('generics.description')</th>
                        <th>@lang('generics.type')</th>
                        <th>@lang('generics.tags')</th>
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
            $('#services-table').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('services.get_list_data_tables') }}",
                columns: [
                    {name: 'name'},
                    {name: 'description'},
                    {name: 'type'},
                    {name: 'tags'},
                    {name: 'action', orderable: false, searchable: false}
                ],
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
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
