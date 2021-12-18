@extends('layouts.agency')

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
    <!-- Hero -->
        <div class="content">
            <!-- Your Block -->
            {{-- <h1>:::::::::::  LIST ::::::::::: </h1> --}}

            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">@lang('generics.offerors')</h3>
                    <div class="block-options">
                        <a href="{{ route('offerors.create') }}">
                            <button type="button" class="btn btn-smirrow">@lang('buttons.new')</button>
                        </a>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination" id="offerors-table">
                        <thead>
                        {{-- <tr>::::::::::: Home ::::::::::::: --}}
                            <th>@lang('generics.id')</th>
                            <th>@lang('generics.name')</th>
                            <th class="d-none d-sm-table-cell">@lang('generics.user')</th>
                            <th class="d-none d-sm-table-cell">@lang('generics.document_number')</th>
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
            $('#offerors-table').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('offerors.getUsersAgency') }}",
                columns: [
                    {name: 'id'},
                    {name: 'user.name'},
                    {name: 'user.nick_name', class:'d-none d-sm-table-cell'},
                    {name: 'document_number', class:'d-none d-sm-table-cell'},
                    {name: 'action', orderable: false, searchable: false}
                ],
                language: {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "_MENU_ ",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "_START_ - _END_ de _TOTAL_",
                    "sInfoEmpty": "Pagina _PAGE_ de _PAGES_",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "",
                    "searchPlaceholder": "Buscar...",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "<i class=\"fa fa-angle-double-left\"></i>",
                        "sLast": "<i class=\"fa fa-angle-double-right\"></i>",
                        "sNext": "<i class=\"fa fa-angle-right\"></i>",
                        "sPrevious": "<i class=\"fa fa-angle-left\"></i>"
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
