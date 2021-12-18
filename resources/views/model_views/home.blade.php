@extends('layouts.offerors')



@section('js_after')

    <script src="//cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            
            var table = $('.datatable_user').DataTable({
                language: {
                    "decimal": "",
                    "emptyTable": "No hay información",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                    "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                    "infoPostFix": " ",
                    "thousands": ",",
                    "lengthMenu": "Mostrar _MENU_ Entradas",
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "search": "Buscar:",
                    "zeroRecords": "Sin resultados encontrados",
                    "paginate": {
                        "first": "Primero",
                        "last": "Ultimo",
                        "next": " Siguiente",
                        "previous": "Anterior "
                    }
                },
            });
        });

       

        

        ! function(e) {
            var n = {};

            function r(t) {
                if (n[t]) return n[t].exports;
                var o = n[t] = {
                    i: t,
                    l: !1,
                    exports: {}
                };
                return e[t].call(o.exports, o, o.exports, r), o.l = !0, o.exports
            }
            r.m = e, r.c = n, r.d = function(e, n, t) {
                r.o(e, n) || Object.defineProperty(e, n, {
                    enumerable: !0,
                    get: t
                })
            }, r.r = function(e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module"
                }), Object.defineProperty(e, "__esModule", {
                    value: !0
                })
            }, r.t = function(e, n) {
                if (1 & n && (e = r(e)), 8 & n) return e;
                if (4 & n && "object" == typeof e && e && e.__esModule) return e;
                var t = Object.create(null);
                if (r.r(t), Object.defineProperty(t, "default", {
                        enumerable: !0,
                        value: e
                    }), 2 & n && "string" != typeof e)
                    for (var o in e) r.d(t, o, function(n) {
                        return e[n]
                    }.bind(null, o));
                return t
            }, r.n = function(e) {
                var n = e && e.__esModule ? function() {
                    return e.default
                } : function() {
                    return e
                };
                return r.d(n, "a", n), n
            }, r.o = function(e, n) {
                return Object.prototype.hasOwnProperty.call(e, n)
            }, r.p = "", r(r.s = 28)
        }({
            28: function(e, n, r) {
                e.exports = r(29)
            },
            29: function(e, n) {
                function r(e, n) {
                    for (var r = 0; r < n.length; r++) {
                        var t = n[r];
                        t.enumerable = t.enumerable || !1, t.configurable = !0, "value" in t && (t.writable = !0),
                            Object.defineProperty(e, t.key, t)
                    }
                }
                var t = function() {
                    function e() {
                        ! function(e, n) {
                            if (!(e instanceof n)) throw new TypeError("Cannot call a class as a function")
                        }(this, e)
                    }
                    var n, t, o;
                    return n = e, o = [{
                        key: "barsRandomize",
                        value: function() {
                            jQuery(".js-bar-randomize").on("click", function(e) {
                                jQuery(e.currentTarget).parents(".block").find(
                                    ".progress-bar").each(function(e, n) {
                                    var r = jQuery(n),
                                        t = Math.floor(91 * Math.random() + 10);
                                    r.css("width", t + "%"), jQuery("span", r).html(
                                        t + "%")
                                })
                            })
                        }
                    }, {
                        key: "init",
                        value: function() {
                            this.barsRandomize()
                        }
                    }], (t = null) && r(n.prototype, t), o && r(n, o), e
                }();
                jQuery(function() {
                    t.init()
                })
            }
        });
    </script>
@endsection



@section('content')
    <!-- Stats -->

    <div class="content content-boxed">
        <div class="row items-push text-center">
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase text-white ">ID #</div>
                <a class="link-fx font-size-h3 text-white "
                    href="{{ route('home', auth()->user()->offeror) }}">{{ auth()->user()->offeror->id }}</a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase text-white ">@lang('generics.requests')</div>
                <a class="link-fx font-size-h3 text-white "
                    href="{{ route('service_request_offeror.index', auth()->user()->offeror) }}">{{ auth()->user()->offeror->getServiceRequest() }}</a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase text-white">@lang('generics.balance')</div>
                <a class="link-fx font-size-h3 text-white "
                    href="{{ route('monetary_requests.index') }}">${{ number_format(auth()->user()->offeror->summary->balance, 2, ',', '.') }}
                </a>
            </div>
            <div class="col-6 col-md-3">
                <div class="font-size-sm font-w600 text-muted text-uppercase text-white ">@lang('generics.qualification'):
                    {{ auth()->user()->offeror->getRating() }} ({{ auth()->user()->offeror->getQuantityRating() }}) </div>
                <div class="text-warning">
                    @for ($i = 1; $i <= 5; $i++)
                        @if (auth()->user()->offeror->getRating() >= $i)
                            <i class="fa fa-fw fa-1x fa-star text-warning"></i>
                        @elseif((($i - auth()->user()->offeror->getRating()) < 1)) <i
                                class="fa fa-fw fa-1x fa-star-half-alt text-warning"></i>
                            @else
                                <i class="fa fa-fw fa-1x fa-star text-muted"></i>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <!-- END Stats -->
    <!-- Page menu -->
    <div class="content">
        @if (auth()->user()->provider != '' && auth()->user()->password == '')
            <a href="{{ route('change_password') }}">
                <div class="alert alert-warning alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p class="mb-0">@lang('messages.change_password_social_login')</p>
                </div>
            </a>
        @endif
        @if (auth()->user()->offeror->getCompletePercentage() < 60 ||
        auth()->user()->offeror->getAlbums() == 0 ||
        auth()->user()->offeror->getQuantityServices() == 0 ||
        auth()->user()->offeror->getAvailability() == 00)
            <div class="alert " style="background: white; color: black" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2"><b>@lang('messages.welcome_message')</b></h3>
                <p class="mb-0">@lang('messages.initial_configuration')</p>
            </div>
        @endif
        @if (auth()->user()->offeror->getValidation(auth()->user()->id) == 'Pending')
            <a href="{{ route('validations.index', auth()->user()->offeror) }}">
                <div class="alert alert-smirrow alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="alert-heading font-w300 my-2"> <i class="fa fa-fw fa-check-circle"></i>
                        <b>@lang('messages.pending_validation')</b></h3>
                    <p class="mb-0">@lang('messages.verify_image')</p>
                </div>
            </a>
        @endif

        @if (auth()->user()->offeror->getValidation(auth()->user()->id) == 'Process')
            <a href="{{ route('validations.index', auth()->user()->offeror) }}">
                <div class="alert alert-smirrow alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="alert-heading font-w300 my-2"> <i class="fa fa-fw fa-times-circle"></i>
                        <b>@lang('messages.process_validation')</b></h3>
                    <p class="mb-0">@lang('messages.users_process_validation')</p>
                </div>
            </a>
        @endif

        @if (auth()->user()->offeror->getValidation(auth()->user()->id) == 'Reject')
            <a href="{{ route('validations.index', auth()->user()->offeror) }}">
                <div class="alert alert-smirrow alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="alert-heading font-w300 my-2"> <i class="fa fa-fw fa-times-circle"></i>
                        <b>@lang('messages.rejected_documents')</b></h3>
                    <p class="mb-0">@lang('messages.users_reject_validation')</p>
                </div>
            </a>
        @endif


        @if (auth()->user()->email_verified_at == null)
            <div class="alert alert-smirrow alert-dismissable" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="alert-heading font-w300 my-2"> <i class="fa fa-fw fa-times-circle"></i>
                    <b>@lang('messages.no_validate_email')</b></h3>
                <p class="mb-0">@lang('messages.validate_email')</p>
                <a class="btn " style="background: white;color: black"
                    href="{{ route('verification.resend') }}">{{ __('auth.click here to request the verification email') }}</a>
            </div>
        @endif

        <div class="row">
            <div class="col-xl-4">
                <!-- Lessons -->
                <div class="block block-rounded">
                    <div class="block-header border-bottom">
                        <h3 class="block-title">@lang('generics.configuration')</h3>
                    </div>

                    <div class="block-content font-size-sm">
                        <!-- Introduction -->
                        <ul class="list-group push">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <b>@lang('generics.account_status')</b>
                                @if (auth()->user()->offeror->validated == 0)
                                    <span class="badge badge-pill badge-danger">@lang('generics.inactive')</span>
                                @else
                                    <span class="badge badge-pill badge-success">@lang('generics.active')</span>
                                @endif
                            </li>
                            <li class="list-group-item text-center">
                                @if (auth()->user()->offeror->validated == 0)
                                    <button type="button" class="btn btn-sm btn-warning push" data-toggle="modal"
                                        data-target="#modal-block-small"> <i class="fa fa-fw fa-check-circle"></i>
                                        @lang('generics.activate_account')</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-dark push" data-toggle="modal"
                                        data-target="#modal-block-small"> <i class="fa fa-fw fa-times-circle"></i>
                                        @lang('generics.deactivate_account')</button>
                                @endif
                            </li>


                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="text-smirrow"
                                    href="{{ route('offerors.edit', auth()->user()->offeror) }}">@lang('generics.profile_configuration')</a>
                                <span
                                    class="badge badge-pill  @if (auth()->user()->offeror->getCompletePercentage() > 60) badge-success @else badge-danger @endif ">{{ auth()->user()->offeror->getCompletePercentage() }}%</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="text-smirrow"
                                    href="{{ route('offeror_availability.index', auth()->user()->offeror->schedule) }}">@lang('generics.availability')</a>
                                <i class="fa fa-2x @if (auth()->user()->offeror->getAvailability() > 0) fa-check text-success @else fa-times text-danger @endif"></i>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="text-smirrow" href="{{ route('album.index', auth()->user()->offeror) }}">@lang('generics.gallery')</a>
                                <span
                                    class="badge badge-pill @if (auth()->user()->offeror->getAlbums()) badge-success @else badge-danger @endif ">{{ auth()->user()->offeror->getAlbums() }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="text-smirrow"
                                    href="{{ route('financial_informations.index', auth()->user()->offeror) }}">@lang('generics.financial_information')</a>
                                <span
                                    class="badge badge-pill @if (auth()->user()->offeror->getAccounts() > 0) badge-success @else badge-danger @endif">{{ auth()->user()->offeror->getAccounts() }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="text-smirrow"
                                    href="{{ route('offeror_services.index', auth()->user()->offeror) }}">@lang('generics.services')</a>
                                <span
                                    class="badge badge-pill  @if (auth()->user()->offeror->getQuantityServices() > 0) badge-success @else badge-danger @endif ">{{ auth()->user()->offeror->getQuantityServices() }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="text-smirrow" href="{{ route('offeror_accessories.index', auth()->user()->offeror) }}">@lang('generics.accessories')
                                    <small>(@lang('generics.optional'))</small></a>
                                <span
                                    class="badge badge-pill @if (auth()->user()->offeror->getQuantityAccessories() > 0)  badge-success @else badge-warning @endif">{{ auth()->user()->offeror->getQuantityAccessories() }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a class="text-smirrow"
                                    href="{{ route('validations.index', auth()->user()->offeror) }}">@lang('generics.validation')</a>
                                @if (auth()->user()->offeror->getValidation(auth()->user()->id) == 'Validated')
                                    <i class="fa fa-2x fa-check-circle text-success"></i>
                                @elseif (auth()->user()->offeror->getValidation(auth()->user()->id)=="Process")
                                    <i class="fa fa-2x fa-spinner text-warning"></i>
                                @else
                                    <i class="fa fa-2x fa-times text-danger"></i>
                                @endif
                            </li>


                        </ul>

                    </div>
                </div>
                <!-- END Lessons -->
            </div>
            <div class="col-lg-8 ">
                <div class="block block-mode-loading-oneui">
                    <div class="block-header border-bottom">
                        <h3 class="block-title">@lang('generics.requests')</h3>
                    </div>
                    <div class="block-content content table-responsive">
                        <table
                            class="table datatable_user  table-hover table-borderless table-vcenter font-size-sm mb-0">
                            <thead class="thead-dark">
                                <tr class="text-uppercase">
                                    <th class="font-w700">@lang('generics.id')</th>
                                    <th class="font-w700">@lang('generics.date')</th>
                                    <th class="font-w700">@lang('generics.state')</th>
                                    <th class="font-w700 text-right">@lang('generics.price')</th>
                                    <th class="d-none d-sm-table-cell font-w700">@lang('generics.description')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (auth()->user()->offeror->serviceRequest()->get() as $serviceRequestOfferor)

                                    <tr>
                                        <td>
                                            <a class="font-w600 text-smirrow"
                                                href="{{ route('service_request_offeror.show', $serviceRequestOfferor->id) }}">#{{ $serviceRequestOfferor->consecutive }}</a>
                                        </td>
                                        <td class="font-w600 font-size-sm">
                                            <a style="color: #575757"
                                                href="{{ route('service_request_offeror.show', $serviceRequestOfferor->id) }}">{{ \Carbon\Carbon::parse($serviceRequestOfferor->initial_date)->toDateString() }} </a>
                                        </td>
                                        <td class="font-w600 font-size-sm">
                                            @if ($serviceRequestOfferor->state == 2)
                                                100%
                                                <span class="badge badge-pill badge-danger"> @lang('generics.refuse')</span>
                                            @elseif($serviceRequestOfferor->state==3)
                                                50%
                                                <span class="badge badge-pill badge-warning">
                                                    @lang('generics.accepted')</span>
                                            @elseif($serviceRequestOfferor->state==4)
                                                70%
                                                <span class="badge badge-pill badge-warning"> @lang('generics.paid')</span>
                                            @elseif($serviceRequestOfferor->state==5)
                                                90%
                                                <span class="badge badge-pill badge-success">
                                                    @lang('generics.realized')</span>
                                            @elseif($serviceRequestOfferor->state==6)
                                                100%
                                                <span class="badge badge-pill badge-success">
                                                    @lang('generics.complete')</span>
                                            @elseif($serviceRequestOfferor->state==1)
                                                25%
                                                <span class="badge badge-pill badge-warning">
                                                    @lang('generics.pending')</span>
                                            @endif
                                        </td>
                                        <td class="font-w600 font-size-sm text-right">
                                            ${{ number_format($serviceRequestOfferor->offeror_value, 0) }}
                                        </td>
                                        <td class="d-none d-sm-table-cell font-w600 font-size-sm ">
                                            {{ substr($serviceRequestOfferor->description, 0, 50) }}...
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- Normal Block Modal -->
    <div class="modal show" id="modal-block-small" tabindex="-1" role="dialog" aria-labelledby="modal-block-small"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    @if (auth()->user()->offeror->validated == 0)
                        <div class="block-header bg-success">
                            <h3 class="block-title"> @lang('generics.activate') </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Cerca">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="block-header bg-danger">
                            <h3 class="block-title"> @lang('generics.deactivate') </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Cerca">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="block-content font-size-sm">
                    @if (auth()->user()->offeror->validated == 0)
                        <p> @lang('messages.activate_account') </p>
                    @else
                        <p> @lang('messages.deactivate_account') </p>
                    @endif
                </div>
                <div class="block-content block-content-full text-center border-top">
                    @if (auth()->user()->offeror->validated == 0)
                        <a href="{{ route('offerors.activate_account', auth()->user()->offeror->id) }}"
                            class="btn btn-success push"> <i class="fa fa-check-circle mr-1"></i>
                            @lang('generics.activate_account') </a>
                    @else
                        <a href="{{ route('offerors.deactivate_account', auth()->user()->offeror->id) }}"
                            class="btn btn-smirrow push"> <i class="fa fa-times-circle mr-1"></i>
                            @lang('generics.deactivate_account') </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- END Normal Block Modal -->

@endsection
