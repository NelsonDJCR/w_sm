<div class="tab-pane active" id="btabs-static-book" role="tabpanel">
    <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true" data-slides-to-show="2" data-center-mode="true" data-autoplay="true" data-autoplay-speed="2000">
        @if(!$offeror->getBook()->hasMedia())
            <div>
                <img class="img-fluid" src="{{ $offeror->getBook()->getCover() }}" alt="">
            </div>
        @endif
        @foreach($offeror->getBook()->getMedia() as $photo)
            <div>
                <img class="img-fluid" src="{{ $photo->getFullUrl('thumb') }}" alt="">
            </div>
        @endforeach
    </div>
</div>
