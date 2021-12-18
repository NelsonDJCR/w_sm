<div class="tab-pane" id="btabs-static-gallery" role="tabpanel">
    <div class="block-header block-header-default">
        <h3 class="block-title">@lang('generics.gallery')</h3>
        <div class="block-options">
            <a href="{{route('album.create', ['offeror'=>$offeror])}}" class="btn btn-sm btn-smirrow">
                <i class="fa fa-plus"></i> @lang('generics.add')
            </a>

        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
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
    </div>

</div>
