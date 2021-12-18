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

    <!-- Page Content -->
    <div class="content">
        <!-- Your Block -->
        <div class="block">
            <div class="block block-mode-loading-oneui">
                <div class="block-header border-bottom">
                    <h3 class="block-title">@lang('generics.requests')</h3>
                </div>
                <div class="block-content content">
                    <table class="table table-striped table-hover table-borderless table-vcenter font-size-sm mb-0">
                        <thead class="thead-dark">
                        <tr class="text-uppercase">
                            <th class="font-w700">@lang('generics.id')</th>
                            <th class="font-w700">@lang('generics.date')</th>
                            <th class="font-w700">@lang('generics.state')</th>
                            <th class="font-w700 text-right" >@lang('generics.price')</th>
                            <th class="d-none d-sm-table-cell font-w700">@lang('generics.description')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(auth()->user()->offeror->serviceRequest()->get() as $serviceRequestOfferor)

                            <tr>
                                <td>
                                    <a class="font-w600" href="{{route('service_request_offeror.show',$serviceRequestOfferor->id)}}">#{{$serviceRequestOfferor->consecutive}}</a>
                                </td>
                                <th class="font-w600 font-size-sm">
                                    <a href="{{route('service_request_offeror.show',$serviceRequestOfferor->id)}}">{{\Carbon\Carbon::parse($serviceRequestOfferor->initial_date)->toDateString()}}</a>
                                </th>
                                <td class="font-w600 font-size-sm">
                                    @if($serviceRequestOfferor->state==2)
                                        100%
                                        <span class="badge badge-pill badge-danger"> @lang('generics.refuse')</span>
                                    @elseif($serviceRequestOfferor->state==3)
                                        50%
                                        <span class="badge badge-pill badge-warning"> @lang('generics.accepted')</span>
                                    @elseif($serviceRequestOfferor->state==4)
                                        70%
                                        <span class="badge badge-pill badge-warning"> @lang('generics.paid')</span>
                                    @elseif($serviceRequestOfferor->state==5)
                                        90%
                                        <span class="badge badge-pill badge-success"> @lang('generics.realized')</span>
                                    @elseif($serviceRequestOfferor->state==6)
                                        100%
                                        <span class="badge badge-pill badge-success"> @lang('generics.complete')</span>
                                    @elseif($serviceRequestOfferor->state==1)
                                        25%
                                        <span class="badge badge-pill badge-warning"> @lang('generics.pending')</span>
                                    @endif
                                </td>
                                <td class="font-w600 font-size-sm text-right">
                                    ${{number_format($serviceRequestOfferor->offeror_value, 0)}}
                                </td>
                                <td class="d-none d-sm-table-cell font-w600 font-size-sm ">
                                    {{substr($serviceRequestOfferor->description,0,50)}}...
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    <br>
                </div>
            </div>

        </div>
        <!-- END Your Block -->
    </div>
    <!-- END Page Content -->
@endsection

