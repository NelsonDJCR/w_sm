<div class="tab-pane" id="btabs-static-gallery" role="tabpanel">


    <div class="container">

        @if (count($videos) >= 1)
            <h1 class="text-dark mt-2">Videos</h1>
            <p class="row">
                @foreach ($videos as $i)

                    <o class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">

                        <video style=" height: 300px; width: 90%;" controls loop poster="{{ asset("storage/$i->route") }}">
                            <source src="{{ asset("storage/$i->route") }}" />
                        </video>
                        <br>

                    </o>
                @endforeach

                <br>
        @endif
    </div>




    @foreach ($offeror->albums as $album)
        <!-- Story -->
        <div class="block">
            <div class="block-content">
                <div class="row items-push">
                    <div class="col-md-4 col-lg-5">
                        <a href="{{ route('album.show', $album) }}">
                            <img class="img-fluid" src="{{ $album->getCover('thumb') }}" alt="cover album">
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
                            {{ $album->description }}
                        </p>
                        <a class="btn btn-sm btn-light"
                            href="{{ route('album.show', $album) }}">@lang('generics.see_more')</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Story -->

    @endforeach


</div>
