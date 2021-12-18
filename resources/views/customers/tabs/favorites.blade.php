<div class="tab-pane" id="btabs-static-favorites" role="tabpanel">
    <h2 class="font-w400">@lang('generics.favorites')</h2>

    <div class="col-md-3 ml-auto text-right" style="padding: 1% 0;">
        <button type="button" class="btn btn-smirrow">@lang('generics.add') <i class="fa fa-plus"></i></button>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <!-- Story -->
            <div class="block">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-4 col-lg-5">
                            <a href="/examples/album/{{ $customer->id }}">
                                <img class="img-fluid" src="{{asset('media/photos/pelaez.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <h4 class="h3 mb-1">
                                <a class="text-primary-dark" href="/examples/album/{{ $customer->id }}">Yaqueline Pelaez</a>
                            </h4>
                            <div class="font-size-sm mb-3">
                                <a href="/examples/album/{{ $customer->id }}">Julio 16, 2019</a>  ·
                            </div>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh..
                            </p>
                            <a class="btn btn-sm btn-light" href="/examples/album/{{ $customer->id }}">@lang('generics.see_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="block">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-4 col-lg-5">
                            <a href="/examples/album/{{ $customer->id }}">
                                <img class="img-fluid" src="{{asset('media/photos/ramirez.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <h4 class="h3 mb-1">
                                <a class="text-primary-dark" href="/examples/album/{{ $customer->id }}">Melissa Ramirez</a>
                            </h4>
                            <div class="font-size-sm mb-3">
                                <a href="/examples/album/{{ $customer->id }}">July 13, 2019 </a>·
                            </div>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh..
                            </p>
                            <a class="btn btn-sm btn-light" href="/examples/album/{{ $customer->id }}">@lang('generics.see_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story -->

            <!-- Story -->
            <div class="block">
                <div class="block-content">
                    <div class="row items-push">
                        <div class="col-md-4 col-lg-5">
                            <a href="/examples/album/{{ $customer->id }}">
                                <img class="img-fluid" src="{{ asset('media/photos/jaraba.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 col-lg-7">
                            <h4 class="h3 mb-1">
                                <a class="text-primary-dark" href="/examples/album/{{ $customer->id }}">Johana Jaraba</a>
                            </h4>
                            <div class="font-size-sm mb-3">
                                <a href="/examples/album/{{ $customer->id }}">July 6, 2019</a>  ·
                            </div>
                            <p class="font-size-sm">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh..
                            </p>
                            <a class="btn btn-sm btn-light" href="/examples/album/{{ $customer->id }}">@lang('generics.see_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Story -->
        </div>
    </div>

</div>