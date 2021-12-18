@extends('layouts.customer')

@section('css_before')

@endsection
@section('js_after')

@endsection

@section('content')


    <!-- Page Content -->
    <div class="content">

        <div class="row justify-content-center">
            <div class="col-md-10">
                <form class="js-form-icon-search push" action="{{route('search.simple')}}" method="GET" id="search-form">
                    <div class="input-group input-group-lg">
                        <input type="text" class="js-icon-search form-control font-size-base" placeholder="Buscar..." name="term" value="{{Request::get('term')}}">
                        <div class="input-group-append" onclick="document.getElementById('search-form').submit()">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                        </div>
                    </div>
                </form>

                <p>@lang('generics.find') ({{$searchResults->count()}}) @lang('generics.results')</p>
                <div class="row gutters-tiny items-push js-gallery push js-gallery-enabled">

                    @foreach($searchResults as $offeror)

                            <div class="col-md-3 col-lg-3 col-xl-3 fadeIn" style="padding: 0px 5px 0px 5px;">
                                <a class="options-container block block-rounded block-link-pop block-bordered" href="{{route('offerors.show',$offeror)}}">
                                    <div class="block-header bg-black" style="padding: 0.5rem;">
                                        <h3 class="h4 font-w400 mb-1 text-white" >ID #<b>{{$offeror->id}}</b> <b>{{$offeror->user->nick_name}}</b></h3>
                                    </div>
                                    <img src="{{$offeror->albums->take(1)[0]->getCover()}}" alt="" class="img-fluid options-item">
                                    <div class="options-overlay">
                                        <div class="options-overlay-content" style="    bottom: 0px;    position: absolute;    background: #000000d9;    width: 100%;">

                                            <p class="text-white mb-1" style="font-size: 0.8rem">@lang('generics.city')<br>@lang('generics.height')<br>@lang('generics.city')</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                    @endforeach
                </div>
                <!-- END Advanced Gallery -->


            </div>
            <div class="col-md-2">
                <h2>TAGS</h2>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
