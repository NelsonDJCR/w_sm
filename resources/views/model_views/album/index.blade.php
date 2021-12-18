@extends('layouts.offerors')
@section('header')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//vjs.zencdn.net/7.6.6/video-js.min.css"/>
@endsection
@section('content')
    <div class="content">
        @if (!auth()->user()->offeror->getAlbums())
            <div class="alert alert-dark alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2">@lang('messages.gallery_help')</h3>
                <p class="mb-0">@lang('messages.gallery_complete')</p>
            </div>
        @endif

        <div class="block-header block-header-default">
            <h3 class="block-title">@lang('generics.gallery')</h3>
            <div class="block-options">
                <a href="{{ route('album.create', auth()->user()->offeror) }}" class="btn btn-sm btn-smirrow">
                    <i class="fa fa-plus"></i> @lang('generics.add')
                </a>
                <a href="#" class="btn btn-sm btn-smirrow open_modal_videos">
                    <i class="fa fa-play"> </i> @lang('generics.add_videos')
                </a>
            </div>
        </div>

        @if (count($videos) >= 1)
            <h1 class="text-light mt-2">Videos</h1>
            <p class="row">
                @foreach ($videos as $i)
                    <o class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">

                        <video style=" height: 300px; width: 90%;"  controls  loop poster="{{ asset("storage/$i->route") }}">
                            <source src="{{ asset("storage/$i->route") }}" />
                        </video>
                        <br>

                        <button class="btn btn-smirrow delete_video col-4"
                            data-id="{{ $i->id }}">@lang('generics.delete')</button>
                    </o>
                @endforeach

                <br>
            </p>
        @endif

        <div class="row">
            <div class="col-xl-12">
                @foreach (auth()->user()->offeror->albums as $album)
                    <div class="block">
                        <div class="block-content">
                            <div class="row items-push">
                                <div class="col-md-4 col-lg-5">
                                    <a href="{{ route('album.show', $album) }}">
                                        <img class="img-fluid" src="{{ $album->getCover() }}" alt="cover album">
                                    </a>
                                </div>

                                <div class="col-md-8 col-lg-7">
                                    <h4 class="h3 mb-1">
                                        <a class="text-primary-dark"
                                            href="{{ route('album.show', $album) }}">{{ $album->title }}</a>
                                    </h4>
                                    <div class="font-size-sm mb-3">
                                        <a
                                            href="{{ route('album.show', $album) }}">{{ \Carbon\Carbon::createFromTimeString($album->created_at)->longRelativeDiffForHumans() }}</a>
                                    </div>
                                    <p class="font-size-sm">

                                        @if ($album->title != 'BOOK')
                                            @lang('messages.gallery_message')
                                            <br><br>
                                            @lang('messages.gallery_message_second')
                                        @else
                                            @lang('messages.book_description')
                                        @endif
                                    </p>
                                    <a class="btn btn-sm btn-light"
                                        href="{{ route('album.show', $album) }}">@lang('generics.see_more')</a>
                                    <br>
                                    <button class="btn btn-smirrow delete_album"
                                        data-id="{{ $album->id }}">@lang('generics.delete_album')</button>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="modal_videos" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('generics.add_videos')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form_videos" enctype="multipart/form-data">
                    <div class="modal-body">
                        @if (count($videos) == 0)
                            <div class="row ml-2 mr-1">
                                <div class="custom-file box_video_one   mb-2">
                                    <input type="file" name="video_first" class="custom-file-input">
                                    <label class="custom-file-label" for="">@lang('generics.Choose_file')</label>
                                </div><br>
                                <button style="" class="button_delete_one btn-smirrow-tash d-none" type="button"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>
                            </div>

                            <div class="row ml-2 mr-1">
                                <div class="custom-file box_video_two   mb-2">
                                    <input type="file" name="video_two" class="custom-file-input">
                                    <label class="custom-file-label" for="">@lang('generics.Choose_file')</label>
                                </div><br>
                                <button style="" class="button_delete_two btn-smirrow-tash d-none" type="button"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>
                            </div>

                            <div class="row ml-2 mr-1">
                                <div class="custom-file box_video_three   mb-2">
                                    <input type="file" name="video_three" class="custom-file-input">
                                    <label class="custom-file-label" for="">@lang('generics.Choose_file')</label>
                                </div><br>
                                <button style="" class="button_delete_three btn-smirrow-tash d-none" type="button"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>
                            </div>
                        @elseif (count($videos) == 1)
                            <div class="row ml-2 mr-1">
                                <div class="custom-file box_video_one   mb-2">
                                    <input type="file" name="video_first" class="custom-file-input">
                                    <label class="custom-file-label" for="">@lang('generics.Choose_file')</label>
                                </div><br>
                                <button style="" class="button_delete_one btn-smirrow-tash d-none" type="button"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>
                            </div>

                            <div class="row ml-2 mr-1">
                                <div class="custom-file box_video_two   mb-2">
                                    <input type="file" name="video_two" class="custom-file-input">
                                    <label class="custom-file-label" for="">@lang('generics.Choose_file')</label>
                                </div><br>
                                <button style="" class="button_delete_two btn-smirrow-tash d-none" type="button"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>
                            </div>

                        @elseif (count($videos) <= 2) <div class="row ml-2 mr-1">
                                <div class="custom-file box_video_one   mb-2">
                                    <input type="file" name="video_first" class="custom-file-input">
                                    <label class="custom-file-label" for="">@lang('generics.Choose_file')</label>
                                </div><br>
                                <button style="" class="button_delete_one btn-smirrow-tash d-none" type="button"><i
                                        class="fa fa-trash" aria-hidden="true"></i></button>
                        @endif
                        @if (count($videos) == 3)
                            <h1>No se pueden agregar más vídeos</h1>
                        @endif
                    </div>
                    @csrf
                </form>
                <div class="modal-footer">
                    @if (count($videos) <= 2)
                        <button type="button" class="btn btn-smirrow save-videos">@lang('generics.save')</button>
                        <button type="button" class="btn bg-black cancel"
                            data-dismiss="modal">@lang('generics.close')</button>
                    @else
                        <button type="button" class="btn bg-black cancel"
                            data-dismiss="modal">@lang('generics.close')</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js_after')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            loader()
        });

        function loader(screen) {
            $(document).ajaxStart(function() {
                $('#loader_ajax').removeClass('d-none')
            }).ajaxStop(function() {
                $('#loader_ajax').addClass('d-none')
            })
        }

        $('.delete_album').click(function() {
            var este = $(this)
            var id = $(this).data('id')
            Swal.fire({
                title: '¿Eliminar registro?',
                text: 'Esta acción no se puede revertir',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#E61879',
                cancelButtonColor: '#000000',
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('album/destroy', {
                        id: id,
                        _token: "{{ csrf_token() }}"
                    }).done(function(e) {
                        if (e.code == 200) {
                            Swal.fire(e.title, e.msg, e.icon);
                            este.parent().parent().parent().remove();
                        }
                    });
                }
            });
        });

        $('.delete_video').click(function() {
            var id = $(this).data('id')
            Swal.fire({
                title: '¿Eliminar video?',
                text: 'Esta acción no se puede revertir',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Aceptar',
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#E61879',
                cancelButtonColor: '#000000'
            }).then((result) => {
                if (result.value) {
                    $.post('/delete-videos', {
                        _token: "{{ csrf_token() }}",
                        id: id
                    }).done(function(e) {
                        if (e.code == 200) {
                            Swal.fire({
                                title: e.msg,
                                text: '',
                                icon: 'success',
                                confirmButtonText: 'Aceptar',
                                confirmButtonColor: '#E61879',
                            }).then(function() {
                                $('#loader_ajax').removeClass('d-none')
                                location.reload()
                            });
                        }
                    });
                }
            });
        });

        $('.save-videos').click(function() {
            var formData = new FormData($('#form_videos')[0])
            $.ajax({
                url: '/save-videos',
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(e) {
                    if (e.code == 406) {
                        Swal.fire({
                            title: e.msg,
                            text: '',
                            icon: 'warning',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#E61879',
                        })
                    } else if (e.code == 200) {
                        Swal.fire({
                            title: e.msg,
                            text: '',
                            icon: 'success',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#E61879',
                        }).then(function() {
                            location.reload()
                        });
                    }
                },
                error: function(xhr, status) {
                   Swal.fire('Error al cargar el archivo','Intente subir un vídeo de menor tamaño','error')
                },
            });
        });

        $('.open_modal_videos').click(function() {
            $('#modal_videos').modal('show')

        });

        $('input[name="video_first"]').change(function() {
            $('.button_delete_one').removeClass('d-none')
            $('.box_video_one').addClass('col-10')
        });

        $('input[name="video_two"]').change(function() {
            $('.button_delete_two').removeClass('d-none')
            $('.box_video_two').addClass('col-10')
        });

        $('input[name="video_three"]').change(function() {
            $('.button_delete_three').removeClass('d-none')
            $('.box_video_three').addClass('col-10')
        });

        $('.button_delete_one').click(function() {
            $(this).addClass('d-none')
            $('.box_video_one').removeClass('col-10')
            $('input[name="video_first"]').val('')
        });

        $('.button_delete_two').click(function() {
            $(this).addClass('d-none')
            $('.box_video_two').removeClass('col-10')
            $('input[name="video_two"]').val('')
        });

        $('.button_delete_three').click(function() {
            $(this).addClass('d-none')
            $('.box_video_three').removeClass('col-10')
            $('input[name="video_three"]').val('')
        });
    </script>
@endsection
