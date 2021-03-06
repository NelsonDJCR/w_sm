@extends('layouts.backend')

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->

    <script>
        !function(e){var n={};function t(r){if(n[r])return n[r].exports;var o=n[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=n,t.d=function(e,n,r){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:r})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(t.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var o in e)t.d(r,o,function(n){return e[n]}.bind(null,o));return r},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=4)}({4:function(e,n,t){e.exports=t(5)},5:function(e,n){function t(e,n){for(var t=0;t<n.length;t++){var r=n[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var r=function(){function e(){!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,e)}var n,r,o;return n=e,o=[{key:"sweetAlert2",value:function(){var e=Swal.mixin({buttonsStyling:!1,customClass:{confirmButton:"btn btn-success m-1",cancelButton:"btn btn-smirrow m-1",input:"form-control"}});jQuery(".js-swal-simple").on("click",function(n){e.fire("Hi, this is just a simple message!")}),jQuery(".js-swal-success").on("click",function(n){e.fire("Success","Everything was updated perfectly!","success")}),jQuery(".js-swal-info").on("click",function(n){e.fire("Info","Just an informational message!","info")}),jQuery(".js-swal-warning").on("click",function(n){e.fire("Warning","Something needs your attention!","warning")}),jQuery(".js-swal-error").on("click",function(n){e.fire("Oops...","Something went wrong!","error")}),jQuery(".js-swal-question").on("click",function(n){e.fire("Question","Are you sure about that?","question")}),jQuery(".js-swal-confirm").on("click",function(n){e.fire({title:"Are you sure?",text:"You will not be able to recover this imaginary file!",type:"warning",showCancelButton:!0,customClass:{confirmButton:"btn btn-smirrow m-1",cancelButton:"btn btn-secondary m-1"},confirmButtonText:"Yes, delete it!",html:!1,preConfirm:function(e){return new Promise(function(e){setTimeout(function(){e()},50)})}}).then(function(n){n.value?e.fire("Deleted!","Your imaginary file has been deleted.","success"):"cancel"===n.dismiss&&e.fire("Cancelled","Your imaginary file is safe :)","error")})}),jQuery(".js-swal-custom-position").on("click",function(n){e.fire({position:"top-end",title:"Perfect!",text:"Nice Position!",type:"success"})})}},{key:"init",value:function(){this.sweetAlert2()}}],(r=null)&&t(n.prototype,r),o&&t(n,o),e}();jQuery(function(){r.init()})}});
    </script>

@endsection

@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Slick Slider Example
                    <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">Plugin Integration</small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Examples</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="">Plugin</a>
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
                    <div class="block-header">
                        <h3 class="block-title">Plugin Example</h3>
                    </div>
                    <div class="block-content">
                        <p class="font-size-sm text-muted">
                            This page showcases how easily you can add a plugin???s JS/CSS assets and init it using a OneUI JS helper.
                        </p>
                    </div>
                </div>
                <!-- END Info -->

                <!-- Advanced Gallery -->
                <h2 class="content-heading">Ejemplo galer??a</h2>
                <button type="button" class="js-swal-confirm btn btn-sm btn-light js-tooltip-enabled push mb-md-0" data-toggle="tooltip" title="" data-original-title="Remove Client">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                <button type="button" class="js-swal-confirm btn btn-sm btn-light js-tooltip-enabled push mb-md-0" data-toggle="tooltip" title="" data-original-title="Remove Client">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                <div class="row gutters-tiny items-push js-gallery push">
                    @for($i = 17; $i > 1; $i--)
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                            <div class="options-container fx-item-rotate-r">
                                <img src="{{asset('media/photos/photo8@2x.jpg')}}" alt="" class="img-fluid options-item">
                                <div class="options-overlay bg-black-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 font-w400 text-white mb-1">Image Caption</h3>
                                        <h4 class="h6 font-w400 text-white-75 mb-3">Some extra info</h4>
                                        <a class="btn btn-sm btn-smirrow img-lightbox" href="{{asset('media/photos/photo8@2x.jpg')}}">
                                            <i class="fa fa-search-plus mr-1"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-secondary" href="javascript:void(0)">
                                            <i class="fa fa-pencil-alt mr-1"></i> Edit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <!-- END Advanced Gallery -->


            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
