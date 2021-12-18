@extends('layouts.offerors')

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
    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->

        <div>
            <p class="btn btn-success mr-1 mb-1"></p>
            <small class="text-white">@lang('generics.successful_request')</small>
            <p class="btn btn-warning mr-1 mb-1"> </p>
            <small class="text-white">@lang('generics.process_request')</small>
            <p class="btn btn-smirrow mr-1 mb-1"> </p>
            <small class="text-white">@lang('generics.refuse_request')</small>
        </div>

        <div class="block">
            <div class="block-header">
                <h4>@lang('generics.your_balance_is'): ${{ number_format(auth()->user()->offeror->summary->balance, 2, ",", ".") }}</h4>
            </div>
            <!-- Your Block -->
            <table class="table table-bordered table-striped table-vcenter">
                <thead>
                <tr>
                    <th class="d-none d-sm-table-cell">@lang('generics.status')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.date')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.amount')</th>
                    <th class="d-none d-sm-table-cell">@lang('generics.observations')</th>
                    <th class="text-center" style="width: 100px;">@lang('generics.actions')</th>
                </tr>
                </thead>

                <tbody>
                @foreach(auth()->user()->offeror->monetaryRequest as $request)

                        <tr>
                            @if($request->status == "Aceptado")
                                <td>
                                    <span class="badge badge-success">
                                        {{$request->status}}
                                    </span>
                                </td>
                            @elseif($request->status == "Procesando")
                                <td>
                                    <span class="badge badge-warning">
                                        {{$request->status}}
                                    </span>
                                </td>
                            @else
                                <td>
                                    <span class="badge badge-danger">
                                        {{$request->status}}
                                    </span>
                                </td>
                            @endif

                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$request->created_at}}
                            </td>

                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$request->amount}}
                            </td>

                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$request->observation}}
                            </td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('monetary_requests.show', $request)}}">
                                        <button type="button" class="btn btn-sm btn-smirrow" data-toggle="tooltip" title="Show">
                                            <i class="fa fa-fw fa fa-eye"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>


    </div>

@endsection
