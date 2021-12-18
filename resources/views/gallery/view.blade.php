@extends('layouts.backend')

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('js/plugins/dropzone/dist/min/dropzone.min.css')}}">
@endsection

@push('scripts')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{asset('js/plugins/dropzone/dropzone.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function () {
            One.helpers('magnific-popup');
        });
    </script>

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

@endpush

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    {{$album->title}}
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">
                        {{__('generics.album')}}
                    </small>
                    <a href="{{route('album.edit',$album)}}" class="btn btn-sm btn-light js-tooltip-enabled " data-toggle="tooltip" title="" data-original-title="Edit" aria-describedby="">
                        <i class="fa fa-fw fa-pencil-alt"></i>
                    </a>
                </h1>

                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item"><a href="{{route('offerors.show', $album->offeror_id)}}">{{$album->offeror->user->name}} ({{$album->offeror->user->email}})</a></li>
                        <li class="breadcrumb-item"><a href="{{route('offerors.show', [$album->offeror_id, '#btabs-static-gallery'])}}">{{__('generics.gallery')}}</a></li>
                        <li class="breadcrumb-item" aria-current="page">
                            {{$album->title}}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- Info -->
                <div class="block">
                    <div class="block-content">
                        <p class="font-size-sm text-muted">
                            A continuación puede eliminar o agregar más fotografías a este album


                            <button type="button" class="btn btn-sm btn-smirrow push float-right" data-toggle="modal" data-target="#modal-block-normal">
                                <i class="fa fa-plus"></i> @lang('generics.add_photos')
                            </button>
                        </p>
                    </div>
                </div>
                <!-- END Info -->
                @if(!$album->hasMedia())
                    <div class="alert alert-secondary alert-dismissable" role="alert">
                        <h3 class="alert-heading font-w300 my-2 text-center pt-5">Ninguna imagen en este album</h3>
                        <p class="mb-0 text-center"><i class="fa fa-images"></i> Comienza este album agregando fotografías</p>
                        <p class="text-center pt-3">
                            <button type="button" class="btn btn-sm btn-smirrow push" data-toggle="modal" data-target="#modal-block-normal">
                                <i class="fa fa-plus"></i> @lang('generics.add_photos')
                            </button>
                        </p>
                    </div>
            @endif
            <!-- Advanced Gallery -->
                <div class="row gutters-tiny items-push js-gallery push">
                    @foreach($album->getMedia() as $mediaFile)
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-zoom-in">
                                <img src="{{$mediaFile->getFullUrl('thumb')}}" alt=""
                                     class="img-fluid options-item">
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        {!! Form::open(['route'=>['album.deletePicture',$mediaFile], 'method'=>'DELETE', 'role' => 'form']) !!}
                                        <a class="btn btn-sm btn-smirrow img-lightbox"
                                           href="{{$mediaFile->getFullUrl('thumb')}}">
                                            <i class="fa fa-search-plus mr-1"></i> {{__('buttons.view')}}
                                        </a>

                                        <button type="submit" class="btn btn-sm btn-smirrow confirm-submit" data-toggle="tooltip" title="" data-original-title="">
                                            <i class="fa fa-trash-alt mr-1"></i>
                                        </button>
                                        {!! Form::close() !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- END Advanced Gallery -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('modals')
    <!-- Normal Block Modal -->
    <div class="modal" id="modal-block-normal" tabindex="-1" role="dialog" aria-labelledby="modal-block-normal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">{{__('generics.upload_pictures')}}</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm">
                        <div class="p-1">
                            <form class="dropzone" action="{{route('album.uploadPictures')}}">
                                {!! Form::hidden('album_id', $album->id) !!}
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">{{__('generics.cancel')}}</button>
                        <button type="button" class="btn btn-sm btn-smirrow" onclick="location.reload()"><i class="fa fa-check mr-1"></i>Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Normal Block Modal -->
@endsection
