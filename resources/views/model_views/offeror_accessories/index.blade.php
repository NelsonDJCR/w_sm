@extends('layouts.offerors')
<link rel="stylesheet" href="//cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
@section('js_after')
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    
    <script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
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
    <div class="content" >

        @if(!(auth()->user()->offeror->getQuantityAccessories()>0))
            <div class="alert alert-smirrow alert-dismissable" role="alert">
                <button type="button" style="color: white" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">@lang('messages.accessories_help')</h3>
                <p class="mb-0">@lang('messages.accessories_complete')</p>
            </div>
        @endif

        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('generics.accessories') (@lang('generics.optional_1'))</h3>
            <div class="block-options">
                <a class="btn btn-smirrow" href="{{route('offeror_accessories.createAccessory', auth()->user()->offeror)}}">@lang('generics.add') <i class="fa fa-plus"></i></a>
            </div>
        </div>
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="row table-responsive">
                    <!-- Your Block -->
                    <table class="table table-bordered datatable table-striped table-vcenter">
                        <thead>
                            <tr>
                                <th>@lang('generics.name')</th>
                                <th class="d-none d-sm-table-cell">@lang('generics.description')</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">@lang('generics.fare')</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">@lang('generics.currency')</th>
                                <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach(auth()->user()->offeror->accessories as $accessory)

                                <tr>
                                    <th class="font-w600 font-size-sm">
                                        {{$accessory->accessory->name}}
                                    </th>

                                    <td class="d-none d-sm-table-cell">
                                        {{$accessory->description}}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        ${{$accessory->cost}}
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        {{$accessory->currency->name}}
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{route('offeror_accessories.edit',$accessory)}}">
                                                <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                                    <i class="fa fa-fw fa-pencil-alt"></i>
                                                </button>
                                            </a>

                                            {!! Form::open(['route'=>['offeror_accessories.destroy', $accessory], 'method'=>'DELETE', 'role' => 'form']) !!}
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
