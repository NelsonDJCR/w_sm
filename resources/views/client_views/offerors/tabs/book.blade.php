<div class="tab-pane active mb-4" id="btabs-static-book" role="tabpanel">








    @if (!$offeror->getBook()->hasMedia())
    @endif
    {{-- <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true" data-slides-to-show="2"
        data-center-mode="true" data-autoplay="true" data-autoplay-speed="2000"> --}}





        @if (!$offeror->getBook()->hasMedia())
            <div class="img-copy-box">
                <img class="img-fluid img-copy" src="{{ $offeror->getBook()->getCover() }}" alt="">
            </div>
        @endif




        <div style="display: flex; flex-wrap: wrap; width: 100%;">




            @foreach ($offeror->getBook()->getMedia() as $photo)
                {{-- <div class="img-copy-box  col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <img class="img-fluid  img-copy"  src="{{ $photo->getFullUrl('thumb') }}" alt="">
        </div> --}}


                <div class="box-copy">
                    <img class="myImg" src="{{ $photo->getFullUrl('thumb') }}" alt="Aaasdalksjdk" style="width:100%;max-width:300px">
                </div>

            @endforeach


        </div>


        <div id="box_modal_gallery" class="modal_gallery">
            <span class="btn_close">&times;</span>
            <div class="box-copy-modal">
              <img class="modal-content_gallery" src="" id="img01">
            </div>
            <div id="caption"></div>
          </div>
    {{-- </div> --}}
</div>



{{-- <style>

.img-fluid{
    width: 20px;
}

    .aa{
        width: 250px;
        height: 250px;
        background: rgb(240, 2, 2);
    }
    .aa::before{
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background:rgba(190, 0, 0, 0.356);        
    }
  


</style> --}}
