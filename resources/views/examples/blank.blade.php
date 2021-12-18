@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="bg-image" style="background-image: url({{ asset('media/photos/photo8@2x.jpg') }});">
        <div class="bg-black-50">
            <div class="content content-full text-center">
                <div class="my-3">
                    <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar2.jpg') }}" alt="">
                </div>
                <h1 class="h2 text-white mb-0">Yaqueline Peláez Jaramillo</h1>
                <span class="text-white-75">VIP</span>

            </div>
        </div>
    </div>
    <div class="content">


        <div class="row">
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Saldo</div>
                        <div class="font-size-h2 font-w400 text-dark">$ 4'500.580</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Servicios</div>
                        <div class="font-size-h2 font-w400 text-dark">150</div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Rating</div>
                        <div class="font-size-h2 font-w400 text-dark"><i class="fa fa-star text-warning"></i> 4,6</div>


                    </div>
                </a>
                </a>
            </div>
            <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                    <div class="block-content block-content-full">
                        <div class="font-size-sm font-w600 text-uppercase text-muted">Nivel</div>
                        <div class="font-size-h2 font-w400 text-dark">AAA</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6">
                <!-- Default Table -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Solicitudes Pendientes</h3>
                        <div class="block-options">
                            <div class="block-options-item">
                                <code>4 solicitudes</code>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Cliente/Organización</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Fecha</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Tipo</th>
                                <th class="text-center" style="width: 100px;">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td class="font-w600 font-size-sm">
                                    <a href="be_pages_generic_profile.html">Red Bull</a>
                                    <br>
                                    <small>Evento Lanzamiento de producto</small>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2019-09-30
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-info">Protocolo</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Aceptar">
                                            <i class="fa fa-fw fa-check text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Rechazar">
                                            <i class="fa fa-fw fa-times text-danger"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center" scope="row">1</th>
                                <td class="font-w600 font-size-sm">
                                    <a href="be_pages_generic_profile.html">Volkswagen</a>
                                    <br>
                                    <small>Salon del automovil</small>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2019-10-15
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <span class="badge badge-info">Protocolo</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Aceptar">
                                            <i class="fa fa-fw fa-check text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Rechazar">
                                            <i class="fa fa-fw fa-times text-danger"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Default Table -->
            </div>
            <div class="col-xl-6">
                <!-- Striped Table -->
                <div class="block">
                    <div class="block-header">
                        <h3 class="block-title">Agenda</h3>
                        <div class="block-options">
                            <div class="block-options-item">
                                <code>.hoy</code>
                            </div>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-striped table-vcenter">
                            <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">Hora</th>
                                <th>Estado</th>
                                <th>Evento</th>
                                <th class="text-center" style="width: 100px;">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-center" scope="row">7 am</th>
                                <td class="font-w600 font-size-sm">
                                    <span class="badge badge-success">Disponible</span>
                                </td>
                                <td>

                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove Client">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">8 am</th>
                                <td class="font-w600 font-size-sm">
                                    <span class="badge badge-success">Disponible</span>
                                </td>
                                <td>

                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove Client">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">9 am</th>
                                <td class="font-w600 font-size-sm">
                                    <span class="badge badge-success">Disponible</span>
                                </td>
                                <td>

                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove Client">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">10 am</th>
                                <td class="font-w600 font-size-sm">
                                    <span class="badge badge-success">Disponible</span>
                                </td>
                                <td>

                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove Client">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" scope="row">11 am</th>
                                <td class="font-w600 font-size-sm">
                                    <span class="badge badge-success">Disponible</span>
                                </td>
                                <td>

                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Edit Client">
                                            <i class="fa fa-fw fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Remove Client">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END Striped Table -->
            </div>
        </div>





    </div>

    <script src="{{ asset('js/oneui.core.min.js') }}"></script>
    <script src="{{ asset('js/oneui.app.min.js') }}"></script>
    <script src="{{ asset('js/plugins/raty-js/jquery.raty.js') }}"></script>
    <script src="{{ asset('js/pages/be_comp_rating.min.js') }}"></script>

    <!-- END Page Content -->
@endsection
