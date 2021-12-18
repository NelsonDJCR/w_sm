<?php
$countryNationality = \App\Country::find($offeror->country_id);
$countryUbication = \App\Country::find($offeror->user->country_code);
$cityUbication = \App\City::find($offeror->city_id);
?>
@extends('layouts.customer')

@section('css_before')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/scheduler/scheduler.css') }}">
@endsection
@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/plugins/slick-carousel/slick.js') }}"></script>
    <script src="{{ asset('js/plugins/raty-js/jquery.raty.js') }}"></script>
    <script src="{{ asset('js/pages/base_comp_rating.js') }}"></script>

    <!-- Page JS Helpers (Highlight.js Plugin) -->
    <script>jQuery(function(){ One.helpers('highlightjs'); });</script>
    <script>jQuery(function(){ One.helpers('slick'); });</script>
    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>
        !function(e){var n={};function t(r){if(n[r])return n[r].exports;var o=n[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,t),o.l=!0,o.exports}t.m=e,t.c=n,t.d=function(e,n,r){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:r})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(t.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var o in e)t.d(r,o,function(n){return e[n]}.bind(null,o));return r},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=4)}({4:function(e,n,t){e.exports=t(5)},5:function(e,n){function t(e,n){for(var t=0;t<n.length;t++){var r=n[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var r=function(){function e(){!function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,e)}var n,r,o;return n=e,o=[{key:"sweetAlert2",value:function(){var e=Swal.mixin({buttonsStyling:!1,customClass:{confirmButton:"btn btn-success m-1",cancelButton:"btn btn-smirrow m-1",input:"form-control"}});jQuery(".js-swal-simple").on("click",function(n){e.fire("Hi, this is just a simple message!")}),jQuery(".js-swal-success").on("click",function(n){e.fire("Success","Everything was updated perfectly!","success")}),jQuery(".js-swal-info").on("click",function(n){e.fire("Info","Just an informational message!","info")}),jQuery(".js-swal-warning").on("click",function(n){e.fire("Warning","Something needs your attention!","warning")}),jQuery(".js-swal-error").on("click",function(n){e.fire("Oops...","Something went wrong!","error")}),jQuery(".js-swal-question").on("click",function(n){e.fire("Question","Are you sure about that?","question")}),jQuery(".js-swal-confirm").on("click",function(n){e.fire({title:"Are you sure?",text:"You will not be able to recover this imaginary file!",type:"warning",showCancelButton:!0,customClass:{confirmButton:"btn btn-smirrow m-1",cancelButton:"btn btn-secondary m-1"},confirmButtonText:"Yes, delete it!",html:!1,preConfirm:function(e){return new Promise(function(e){setTimeout(function(){e()},50)})}}).then(function(n){n.value?e.fire("Deleted!","Your imaginary file has been deleted.","success"):"cancel"===n.dismiss&&e.fire("Cancelled","Your imaginary file is safe :)","error")})}),jQuery(".js-swal-custom-position").on("click",function(n){e.fire({position:"top-end",title:"Perfect!",text:"Nice Position!",type:"success"})})}},{key:"init",value:function(){this.sweetAlert2()}}],(r=null)&&t(n.prototype,r),o&&t(n,o),e}();jQuery(function(){r.init()})}});
    </script>

    <script src="{{ asset('plugins/scheduler/scheduler.js') }}" ></script>
    <script>
        (function ($) {
            var franjasHorario = {!! $offeror->schedule->schedule !!};
            var franjas = <?php echo json_encode(array(0=>array("StarTime"=>"00:00","EndTime"=>"24:00","Interval"=>"60")));?>;
            $.each(franjas, function (key, value) {
                horarioJson = franjasHorario;
                $("#day-schedule-" + String(key)).dayScheduleSelector({
                    days: [0, 1, 2, 3, 4, 5, 6],
                    interval: value.Interval,
                    startTime: value.StarTime,
                    endTime: value.EndTime,
                    readOnly: true
                })
                    .data('artsy.dayScheduleSelector').deserialize(horarioJson);
            });
        })($);
    </script>
@endsection





@section('content')

    <!-- Page Content -->
    <div class="content">
        <div class="col-md-12">
            <!-- Page Content -->
            <div class="row">
                <div class="col-3 align-content-center" >
                    <!-- About Offeror (Foto) -->
                    <div class="block block-rounded block-link-shadow" >
                        <div class="block-content block-content-full text-center">
                            <div class="push">
                                <img class="img-avatar" src="{{ asset('media/avatars/avatar13.jpg') }}" alt="">
                            </div>
                            <div class="font-w600 mb-1">{{ $offeror->user->name }}</div>
                            <div class="js-rating" data-score="5" data-star-on="fa fa-fw fa-star text-danger">
                                <b class="light">4,8</b>
                                <i data-alt="1" class="fa fa-fw fa-star text-danger" title="Just Bad!"></i>&nbsp;
                                <i data-alt="2" class="fa fa-fw fa-star text-danger" title="Almost There!"></i>&nbsp;
                                <i data-alt="3" class="fa fa-fw fa-star text-danger" title="It’s ok!"></i>&nbsp;
                                <i data-alt="4" class="fa fa-fw fa-star text-danger" title="That’s nice!"></i>&nbsp;
                                <i data-alt="5" class="fa fa-fw fa-star text-danger" title="Incredible!"></i>
                                {{--<i data-alt="5" class="fa fa-fw fa-2x fa-star text-muted" title="Incredible!"></i>--}}
                                {{--<input name="score" type="hidden" value="5">--}}
                            </div>
                            <div class="light">@lang('generics.nick') {{ $offeror->user->nick_name }}</div>
                            <div class="light">@lang('generics.height') {{  $offeror->height }} cm</div>
                            <div class="light">Id # {{ $offeror->user->id }}</div>
                            <div class="light">{{\Carbon\Carbon::parse($offeror->birthday)->age}}</div>
                        </div>
                        <a class="btn btn-smirrow push" style="width: 100%" href="#" data-toggle="modal" data-target="#modal-block-fromleft"> <i class=" fa fa-fw fa-plus-circle"></i> Solicitar Servicio</a>
                    </div>

                    <!-- END About Offeror -->

                    <!-- Offeror Info -->
                    <div class="block block-rounded">
                        <div class="block-content">
                            <table class="table table-striped table-borderless font-size-sm">
                                <tbody>
                                <tr>
                                    <td align="right"><i class="fa fa-fw fa-universal-access mr-1"></i></td>
                                    <td><b>@lang('generics.gender')</b></td>
                                    <td>
                                        {{ $offeror->gender }}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><i class="fa fa-fw fa-medal mr-1" style="color: #5c80d1"></i></td>
                                    <td><b>@lang('generics.aptitude')</b></td>
                                    <td>
                                        {{ $offeror->aptitudes }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Offeror Info -->
                    <div class="block block-rounded">
                        <div class="block-content">
                            <table class="table table-striped table-borderless font-size-sm">
                                <tbody>
                                <tr>
                                    <td align="right"><i class="fa fa-fw fa-user mr-1"></i></td>
                                    <td><b>@lang('generics.hair_color')</b></td>
                                    <td>
                                        {{  $offeror->hair_color }}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right"><i class="fa fa-fw fa-user mr-1"></i></td>
                                    <td><b>@lang('generics.eyes')</b></td>
                                    <td>
                                        {{ $offeror->eyes_color }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="block block-rounded">
                        <div class="block-content">
                            <table class="table table-striped table-borderless font-size-sm">
                                <tbody>
                                <tr>
                                    <td align="right"><i class="fa fa-fw fa-city mr-1"></i></td>
                                    <td><b>@lang('generics.city')</b></td>
                                    <td>
                                        {{ $cityUbication->name}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-9">

                    <div class="block">
                        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#btabs-static-home"> <i class="fa fa-fw fa-camera mr-1"></i>Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#btabs-static-galery"> <i class="fa fa-fw fa-images mr-1"></i> Galeria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#btabs-static-profile"> <i class="fa fa-fw fa-address-card mr-1"></i> Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#btabs-static-availability"> <i class="fa fa-fw fa-calendar-check mr-1"></i> Disponibilidad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#btabs-static-prices"> <i class="fa fa-fw fa-money-bill-alt mr-1"></i>Tarifas</a>
                            </li>


                        </ul>
                        <div class="block-content tab-content">
                            <div class="tab-pane active" id="btabs-static-home" role="tabpanel">
                                <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true" data-slides-to-show="3" data-center-mode="true" data-autoplay="true" data-autoplay-speed="2000">
                                    <div>
                                        <img class="img-fluid" src="{{ asset('media/photos/Ramirez1.jpeg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="{{ asset('media/photos/Ramirez2.jpeg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="{{ asset('media/photos/Ramirez3.jpeg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="{{ asset('media/photos/Ramirez4.jpeg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="{{ asset('media/photos/Ramirez5.jpeg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="{{ asset('media/photos/Ramirez6.jpeg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="{{ asset('media/photos/Ramirez7.jpeg') }}" alt="">
                                    </div>
                                    <div>
                                        <img class="img-fluid" src="{{ asset('media/photos/Ramirez8.jpeg') }}" alt="">
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane" id="btabs-static-galery" role="tabpanel">



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
                            <div class="tab-pane" id="btabs-static-profile" role="tabpanel">
                                <table class="table table-striped table-borderless table-vcenter push">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.description')</a>
                                            <div class="font-size-sm text-muted mt-1">{{ $offeror->description }}</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>



                                <table class="table table-striped table-borderless table-vcenter push">
                                    <thead class="border-bottom">
                                    <tr>
                                        <th colspan="2" class="bg-primary-dark text-white">@lang('generics.appearance')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.ethnicity')</a>
                                            <div class="font-size-sm text-muted mt-1">{{ $offeror->ethnicity }}</div>
                                        </td>
                                        <td width="50%">
                                            <a class="font-size-h6 font-w600" >@lang('generics.skin_color')</a>
                                            <div class="font-size-sm text-muted mt-1">{{ $offeror->skin_color }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">
                                            <a class="font-size-h6 font-w600" >@lang('generics.eyes')</a>
                                            <div class="font-size-sm text-muted mt-1">{{ $offeror->eyes_color }}</div>
                                        </td>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.hair_color')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->hair_color }}</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.hair_length')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->hair_length }}</div>
                                        </td>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.contexture')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->contexture }}</div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.tatoos')</a>
                                            <div class="font-size-sm text-muted mt-1">@if( $offeror->tatoos == 1) @lang('generics.yes') @else @lang('generics.no')  @endif</div>
                                        </td>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.piercings')</a>
                                            <div class="font-size-sm text-muted mt-1">@if( $offeror->piercings == 1) @lang('generics.yes') @else @lang('generics.no')  @endif</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.style')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->style }}</div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table class="table table-striped table-borderless table-vcenter push">
                                    <thead class="border-bottom">
                                    <tr>
                                        <th colspan="2" class="bg-primary-dark text-white">@lang('generics.measurements')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td width="50%">
                                            <a class="font-size-h6 font-w600" >@lang('generics.height')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->height }} cm</div>
                                        </td>
                                        <td width="50%">
                                            <a class="font-size-h6 font-w600" >@lang('generics.weight')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->weight}} kg</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.bust')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->bust_measurement }} cm</div>
                                        </td>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.waist')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->waist_measurement }} cm</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.hip')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->hip_measurement }} cm</div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table class="table table-striped table-borderless table-vcenter push">
                                    <thead class="border-bottom">
                                    <tr>
                                        <th colspan="2" class="bg-primary-dark text-white">@lang('generics.sizes')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.shoes')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->shoes_size }} </div>
                                        </td>
                                        <td width="50%">
                                            <a class="font-size-h6 font-w600" >@lang('generics.shirt_size')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->shirt_size }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.bra_size')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->bra_size }} </div>
                                        </td>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.pants_size')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->pants_size }} cm</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table class="table table-striped table-borderless table-vcenter push">
                                    <thead class="border-bottom">
                                    <tr>
                                        <th colspan="2" class="bg-primary-dark text-white">@lang('generics.education')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td width="50%">
                                            <a class="font-size-h6 font-w600" >@lang('generics.profession')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->profession }}</div>
                                        </td>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.studies')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->academic_level }}</div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.languages')</a>
                                            <div class="font-size-sm text-muted mt-1">{{  $offeror->languages }}</div>
                                        </td>
                                        <td>
                                            <a class="font-size-h6 font-w600">@lang('generics.aptitude')</a>
                                            <div class="font-size-sm text-muted mt-1">{{ $offeror->aptitudes }}</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table class="table table-striped table-borderless table-vcenter push">
                                    <thead class="border-bottom">
                                    <tr>
                                        <th colspan="2" class="bg-primary-dark text-white">@lang('generics.others')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.hobbies')</a>
                                            <div class="font-size-sm text-muted mt-1">{{ $offeror->hobbies }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="font-size-h6 font-w600" >@lang('generics.level')</a>
                                            <div class="font-size-sm text-muted mt-1">{{ $offeror->level }}</div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="tab-pane" id="btabs-static-availability" role="tabpanel">
                                <?php
                                //Carga de Franjas
                                $dias=array('sunday','monday','tuesday','wednesday','thursday','friday','saturday');
                                ?>
                                <?php
                                $n=0;
                                foreach ($dias as $dia)
                                {
                                ?>
                                <div id="day-schedule-<?php echo $n ?>"></div>
                                <?php
                                $n++;
                                }
                                ?>
                                <hr>
                            </div>

                            <div class="tab-pane" id="btabs-static-prices" role="tabpanel">
                                <table class="table table-vcenter">
                                    <thead>
                                    <tr>
                                        <th>@lang('generics.service')</th>
                                        <th class="d-none d-sm-table-cell">@lang('generics.description')</th>
                                        <th class="d-none d-sm-table-cell">@lang('generics.time_units')</th>
                                        <th class="d-none d-sm-table-cell">@lang('generics.quantity')</th>
                                        <th class="d-none d-sm-table-cell">@lang('generics.fare')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $serv)

                                        <tr>
                                            <th class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_profile.html">{{$serv->service->name}}</a>
                                            </th>
                                            <td class="font-w600 font-size-sm">
                                                {{$serv->service->description}}
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                {{$serv->time_unit->name}}
                                            </td>
                                            <td class="font-w600 font-size-sm">
                                                {{$serv->quantity}}
                                            </td>

                                            <td class="font-w600 font-size-sm">${{$serv->cost}}</td>

                                        </tr>


                                    @endforeach


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    <!-- END Image Sliders -->
                </div>
            </div>
            <!-- END Page Content -->
        </div>

    </div>

    <div class="modal fade" id="modal-block-fromleft" tabindex="-1" role="dialog" aria-labelledby="modal-block-fromleft" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-fromleft" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Elija el servicio a solicitar</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content font-size-sm">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    </div>
                    <div class="block-content block-content-full text-right border-top">
                        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-smirrow" data-dismiss="modal"><i class="fa fa-check mr-1"></i>Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
