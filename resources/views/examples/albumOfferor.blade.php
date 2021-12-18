@extends('layouts.backend')
@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/magnific-popup/magnific-popup.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function () {
            One.helpers('magnific-popup');
        });</script>
@endsection
@section('content')
    <div class="content">
        <h2>Album de fotos Ofertante</h2>
        <div class="col-md-3 ml-auto text-right" style="padding: 1% 0;">
            <button type="button" class="btn btn-smirrow">@lang('generics.add') <i class="fa fa-plus"></i></button>
        </div>

        <div class="items-push js-gallery img-fluid-100">
            <h3>Junio 4</h3>
            <div class="row">
                @for($i = 39; $i > 32; $i--)
                    <div style="padding:0.5% 0.5%;" class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                    <div class="options-container fx-item-zoom-in">
                        <img class="img-fluid options-item" src="{{asset('media/photos/photo'.$i.'@2x.jpg')}}" alt="">

                        <div style="background-color: rgba(210, 106, 92,.8);" class="options-overlay">


                            <div style="padding: 1% 3%;" class="options-overlay-content">
                                <h3 class="h4 font-w400 text-white mb-1">Mauris interdum felis</h3>
                                <h4 class="h6 font-w400 text-white-75 mb-3">Vivamus porttitor elit quis bibendum tempor.</h4>


{{--                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="right" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-light"></i>--}}
                                <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="top" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-lighter"></i>


                                <a style="padding-top: 10%;" class=" block-transparent text-left img-lightbox" title="Expandir" data-placement="right" data-toggle="tooltip" href="{{asset('media/photos/photo'.$i.'@2x.jpg')}}">
                                        <i class="fa fa-expand text-gray-lighter"></i>
                                    </a>

                                {{-- Icono de eliminar visible solo para administrador o usuarios dueño --}}
                                <i style="margin: 0 5px;"class="far fa-trash-alt text-gray-lighter" title="Eliminar" data-placement="right" data-toggle="tooltip"></i>
                                <i style="margin: 0 5px;" class="fa fa-pencil-alt text-gray-lighter" title="Editar" data-placement="right" data-toggle="tooltip"></i>

                            </div>

                        </div>
                    </div>
                </div>
                @endfor
            </div>

            <h3>Junio 17</h3>
            <div class="row">
                @for($i = 32; $i > 20; $i--)
                    <div style="padding:0.5% 0.5%;" class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <div class="options-container fx-item-zoom-in">
                            <img class="img-fluid options-item" src="{{asset('media/photos/photo'.$i.'@2x.jpg')}}" alt="">

                            <div style="background-color: rgba(210, 106, 92,.8);" class="options-overlay">


                                <div style="padding: 1% 3%;" class="options-overlay-content">
                                    <h3 class="h4 font-w400 text-white mb-1">Mauris interdum felis</h3>
                                    <h4 class="h6 font-w400 text-white-75 mb-3">Vivamus porttitor elit quis bibendum tempor. </h4>



                                    {{--                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="right" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-light"></i>--}}
                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="top" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-lighter"></i>


                                    <a style="padding-top: 10%;" class=" block-transparent text-left img-lightbox" title="Expandir" data-placement="right" data-toggle="tooltip" href="{{asset('media/photos/photo'.$i.'@2x.jpg')}}">
                                        <i class="fa fa-expand text-gray-lighter"></i>
                                    </a>

                                    {{-- Icono de eliminar visible solo para administrador o usuarios dueño --}}
                                    <i style="margin: 0 5px;" class="far fa-trash-alt text-gray-lighter" title="Eliminar" data-placement="right" data-toggle="tooltip"></i>
                                    <i style="margin: 0 5px;" class="fa fa-pencil-alt text-gray-lighter" title="Editar" data-placement="right" data-toggle="tooltip"></i>



                                </div>

                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <h3>Junio 30</h3>
            <div class="row">
                @for($i = 20; $i > 12; $i--)
                    <div style="padding:0.5% 0.5%;" class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <div class="options-container fx-item-zoom-in">
                            <img class="img-fluid options-item" src="{{asset('media/photos/photo'.$i.'@2x.jpg')}}" alt="">

                            <div style="background-color: rgba(210, 106, 92,.8);" class="options-overlay">


                                <div style="padding: 1% 3%;" class="options-overlay-content">
                                    <h3 class="h4 font-w400 text-white mb-1">Mauris interdum felis</h3>
                                    <h4 class="h6 font-w400 text-white-75 mb-3">Vivamus porttitor elit quis bibendum tempor.</h4>


                                    {{--                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="right" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-light"></i>--}}
                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="top" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-lighter"></i>


                                    <a style="padding-top: 10%;" class=" block-transparent text-left img-lightbox" title="Expandir" data-placement="right" data-toggle="tooltip" href="{{asset('media/photos/photo'.$i.'@2x.jpg')}}">
                                        <i class="fa fa-expand text-gray-lighter"></i>
                                    </a>

                                    {{-- Icono de eliminar visible solo para administrador o usuarios dueño --}}
                                    <i style="margin: 0 5px;"class="far fa-trash-alt text-gray-lighter" title="Eliminar" data-placement="right" data-toggle="tooltip"></i>
                                    <i style="margin: 0 5px;" class="fa fa-pencil-alt text-gray-lighter" title="Editar" data-placement="right" data-toggle="tooltip"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <h3>Julio 10</h3>
            <div class="row">
                @for($i = 12; $i > 6; $i--)
                    <div style="padding:0.5% 0.5%;" class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <div class="options-container fx-item-zoom-in">
                            <img class="img-fluid options-item" src="{{asset('media/photos/photo'.$i.'@2x.jpg')}}" alt="">

                            <div style="background-color: rgba(210, 106, 92,.8);" class="options-overlay">


                                <div style="padding: 1% 3%;" class="options-overlay-content">
                                    <h3 class="h4 font-w400 text-white mb-1">Mauris interdum felis</h3>
                                    <h4 class="h6 font-w400 text-white-75 mb-3">Vivamus porttitor elit quis bibendum tempor.</h4>


                                    {{--                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="right" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-light"></i>--}}
                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="top" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-lighter"></i>


                                    <a style="padding-top: 10%;" class=" block-transparent text-left img-lightbox" title="Expandir" data-placement="right" data-toggle="tooltip" href="{{asset('media/photos/photo'.$i.'@2x.jpg')}}">
                                        <i class="fa fa-expand text-gray-lighter"></i>
                                    </a>
                                    {{-- Icono de eliminar visible solo para administrador o usuarios dueño --}}
                                    <i style="margin: 0 5px;"class="far fa-trash-alt text-gray-lighter" title="Eliminar" data-placement="right" data-toggle="tooltip"></i>
                                    <i style="margin: 0 5px;" class="fa fa-pencil-alt text-gray-lighter" title="Editar" data-placement="right" data-toggle="tooltip"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <h3>Agosto 5</h3>
            <div class="row">
                @for($i = 6; $i > 0; $i--)
                    <div style="padding:0.5% 0.5%;" class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <div class="options-container fx-item-zoom-in">
                            <img class="img-fluid options-item" src="{{asset('media/photos/photo'.$i.'@2x.jpg')}}" alt="">

                            <div style="background-color: rgba(210, 106, 92,.8);" class="options-overlay">


                                <div style="padding: 1% 3%;" class="options-overlay-content">
                                    <h3 class="h4 font-w400 text-white mb-1">Mauris interdum felis</h3>
                                    <h4 class="h6 font-w400 text-white-75 mb-3">Vivamus porttitor elit quis bibendum tempor.</h4>


                                    {{--                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="right" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-light"></i>--}}
                                    <i style="cursor: pointer; display: block;margin-bottom: 10%;" title="Like" data-placement="top" data-toggle="tooltip" class="fa fa-heart fa-2x text-city-lighter"></i>


                                    <a style="padding-top: 10%;" class=" block-transparent text-left img-lightbox" title="Expandir" data-placement="right" data-toggle="tooltip" href="{{asset('media/photos/photo'.$i.'@2x.jpg')}}">
                                        <i class="fa fa-expand text-gray-lighter"></i>
                                    </a>

                                    {{-- Icono de eliminar visible solo para administrador o usuarios dueño --}}
                                    <i style="margin: 0 5px;"class="far fa-trash-alt text-gray-lighter" title="Eliminar" data-placement="right" data-toggle="tooltip"></i>
                                    <i style="margin: 0 5px;" class="fa fa-pencil-alt text-gray-lighter" title="Editar" data-placement="right" data-toggle="tooltip"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                @endfor
            </div>


        </div>
        <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top modal-sm" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">Apps</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row gutters-tiny">
                                <div class="col-6">
                                    <!-- CRM -->
                                    <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-speedometer fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                CRM
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END CRM -->
                                </div>
                                <div class="col-6">
                                    <!-- Products -->
                                    <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-rocket fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Products
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Products -->
                                </div>
                                <div class="col-6">
                                    <!-- Sales -->
                                    <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-plane fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Sales
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Sales -->
                                </div>
                                <div class="col-6">
                                    <!-- Payments -->
                                    <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                        <div class="block-content text-center">
                                            <i class="si si-wallet fa-2x text-white-75"></i>
                                            <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                Payments
                                            </p>
                                        </div>
                                    </a>
                                    <!-- END Payments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{--<div class="content">
        <!-- Simple Gallery -->
        <h2 class="content-heading">Simple</h2>
        <div class="row items-push js-gallery img-fluid-100">
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba@2x.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('images/generics/prueba.jpg')}}">
                    <img class="img-fluid" src="{{asset('images/generics/prueba.jpg')}}" alt="">
                </a>
            </div>
        </div>
        <!-- END Simple Gallery -->
    </div>
    <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Apps</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row gutters-tiny">
                            <div class="col-6">
                                <!-- CRM -->
                                <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-speedometer fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            CRM
                                        </p>
                                    </div>
                                </a>
                                <!-- END CRM -->
                            </div>
                            <div class="col-6">
                                <!-- Products -->
                                <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-rocket fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Products
                                        </p>
                                    </div>
                                </a>
                                <!-- END Products -->
                            </div>
                            <div class="col-6">
                                <!-- Sales -->
                                <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-plane fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Sales
                                        </p>
                                    </div>
                                </a>
                                <!-- END Sales -->
                            </div>
                            <div class="col-6">
                                <!-- Payments -->
                                <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                    <div class="block-content text-center">
                                        <i class="si si-wallet fa-2x text-white-75"></i>
                                        <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                            Payments
                                        </p>
                                    </div>
                                </a>
                                <!-- END Payments -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
