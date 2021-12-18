<div class="tab-pane" id="btabs-static-gallery" role="tabpanel">

    @if(!$offeror->getBook()->hasMedia())
        <div class="alert alert-dismissable" style="background: #e71c77cc; color:white;" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h3 class="alert-heading font-w300 my-2">@lang('messages.book')</h3>
            <p class="mb-0">@lang('messages.book_configuration')</p>
        </div>
    @endif


@foreach($offeror->albums as $album)
    <!-- Story -->
        <div class="block">
            <div class="block-content">
                <div class="row items-push">
                    <div class="col-md-4 col-lg-5">
                        <a href="{{route('album.show', $album)}}">
                            <img class="img-fluid" src="{{$album->getCover()}}"
                                 alt="cover album">
                        </a>
                    </div>
                    <div class="col-md-8 col-lg-7">
                        <h4 class="h3 mb-1">
                            <a class="text-primary-dark" href="{{route('album.show', $album)}}">{{$album->title}}</a>
                        </h4>
                        <div class="font-size-sm mb-3">
                            <a href="{{route('album.show', $album)}}">{{\Carbon\Carbon::createFromTimeString($album->created_at)->longRelativeDiffForHumans()}}</a>
                        </div>
                        <p class="font-size-sm">
                            {{$album->description}}
                        </p>
                        <a class="btn btn-sm btn-light" href="{{route('album.show', $album)}}">@lang('generics.see_more')</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Story -->
@endforeach


</div>
