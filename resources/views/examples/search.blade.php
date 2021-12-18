@extends('layouts.customer')

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


    <!-- Page Content -->
    <div class="content">

        <div class="row justify-content-center">
            <div class="col-md-10">
                <form class="js-form-icon-search push" action="be_ui_icons.html" method="POST">
                    <div class="input-group input-group-lg">
                        <input type="text" class="js-icon-search form-control font-size-base" placeholder="Try home or user..">
                        <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search"></i>
                                </span>
                        </div>
                    </div>
                </form>
                              <div class="row gutters-tiny items-push js-gallery push">
                    @for($i = 1; $i < 31; $i++)
                        <div class="col-md-4 col-lg-3 col-xl-2 animated fadeIn" style="padding: 10px;">
                            <div class="options-container ">
                                <img src="{{asset('/media/photos/'.$i.'.jpeg')}}"  alt="" class="img-fluid options-item">
                                <div class="options-overlay" >
                                    <div class="options-overlay-content" style="    bottom: 0px;    position: absolute;    background: #000000d9;    width: 100%;">
                                        <h3 class="h4 font-w400 text-white mb-1">Cata Uribe</h3>
                                        <p class="text-white mb-1" style="font-size: 0.8rem">Country / País : Colombia<br>Height / Estatura : 1'78 cm / 5'10<br>Talents : Pasarela,Fotografía</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
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
