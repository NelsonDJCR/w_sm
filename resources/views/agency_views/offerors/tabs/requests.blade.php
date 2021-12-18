@include('includes.datatables')

<div class="tab-pane" id="btabs-static-requests" role="tabpanel">
    <div class="block-header">
        <h4>@lang('generics.balance'): ${{ number_format($offeror->summary->balance, 2, ",", ".") }}</h4>
        <div class="col-md-3 ml-auto text-right" style="padding: 1% 0;">
            <a href="{{ route('monetary_requests.create_request', $offeror) }}">
                <button type="button" class="btn btn-smirrow">Nueva</button>
            </a>
        </div>
    </div>

    <div class="block-content">
        <table class="table table-vcenter" id="monetary_requests-table">
            <thead>
            <tr>
                <th>@lang('generics.id')</th>
                <th>@lang('generics.operation')</th>
                <th>@lang('generics.amount')</th>
                <th>@lang('generics.status')</th>
                <th>@lang('generics.observation')</th>
                <th>@lang('generics.approved')</th>
                <th>@lang('generics.actions')</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#monetary_requests-table').DataTable({
                serverSide: true,
                processing: true,
                responsive: true,
                ajax: "{{ route('monetary_requests.get_list_data_tables_offeror', $offeror) }}",
                columns: [
                    {name: 'id'},
                    {name: 'operation'},
                    {name: 'amount'},
                    {name: 'status'},
                    {name: 'observation'},
                    {name: 'id_user_approves'},
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
