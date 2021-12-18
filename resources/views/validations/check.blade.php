@extends('layouts.backend')
@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        !function (e) {
            var t = {};

            function n(a) {
                if (t[a]) return t[a].exports;
                var r = t[a] = {i: a, l: !1, exports: {}};
                return e[a].call(r.exports, r, r.exports, n), r.l = !0, r.exports
            }

            n.m = e, n.c = t, n.d = function (e, t, a) {
                n.o(e, t) || Object.defineProperty(e, t, {enumerable: !0, get: a})
            }, n.r = function (e) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(e, "__esModule", {value: !0})
            }, n.t = function (e, t) {
                if (1 & t && (e = n(e)), 8 & t) return e;
                if (4 & t && "object" == typeof e && e && e.__esModule) return e;
                var a = Object.create(null);
                if (n.r(a), Object.defineProperty(a, "default", {
                    enumerable: !0,
                    value: e
                }), 2 & t && "string" != typeof e) for (var r in e) n.d(a, r, function (t) {
                    return e[t]
                }.bind(null, r));
                return a
            }, n.n = function (e) {
                var t = e && e.__esModule ? function () {
                    return e.default
                } : function () {
                    return e
                };
                return n.d(t, "a", t), t
            }, n.o = function (e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }, n.p = "", n(n.s = 22)
        }({
            22: function (e, t, n) {
                e.exports = n(23)
            }, 23: function (e, t) {
                function n(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var a = t[n];
                        a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                    }
                }

                var a = function () {
                    function e() {
                        !function (e, t) {
                            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                        }(this, e)
                    }

                    var t, a, r;
                    return t = e, r = [{
                        key: "initDataTables", value: function () {
                            jQuery.extend(jQuery.fn.dataTable.ext.classes, {
                                sWrapper: "dataTables_wrapper dt-bootstrap4",
                                sFilterInput: "form-control form-control-sm",
                                sLengthSelect: "form-control form-control-sm"
                            }), jQuery.extend(!0, jQuery.fn.dataTable.defaults, {
                                order: [[6, "asc"]],
                                language: {
                                    lengthMenu: "_MENU_",
                                    search: "_INPUT_",
                                    searchPlaceholder: "Search..",
                                    info: "Page <strong>_PAGE_</strong> of <strong>_PAGES_</strong>",
                                    paginate: {
                                        first: '<i class="fa fa-angle-double-left"></i>',
                                        previous: '<i class="fa fa-angle-left"></i>',
                                        next: '<i class="fa fa-angle-right"></i>',
                                        last: '<i class="fa fa-angle-double-right"></i>'
                                    }
                                }
                            }), jQuery(".js-dataTable-full").dataTable({
                                pageLength: 10,
                                lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
                                autoWidth: !1
                            }), jQuery(".js-dataTable-full-pagination").dataTable({
                                pagingType: "full_numbers",
                                pageLength: 10,
                                lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
                                autoWidth: !1
                            }), jQuery(".js-dataTable-simple").dataTable({
                                pageLength: 10,
                                lengthMenu: !1,
                                searching: !1,
                                autoWidth: !1,
                                dom: "<'row'<'col-sm-12'tr>><'row'<'col-sm-6'i><'col-sm-6'p>>"
                            }), jQuery(".js-dataTable-buttons").dataTable({
                                pageLength: 10,
                                lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
                                autoWidth: !1,
                                buttons: [{extend: "copy", className: "btn btn-sm btn-smirrow"}, {
                                    extend: "csv",
                                    className: "btn btn-sm btn-smirrow"
                                }, {extend: "print", className: "btn btn-sm btn-smirrow"}],
                                dom: "<'row'<'col-sm-12'<'text-center bg-body-light py-2 mb-2'B>>><'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>"
                            })
                        }
                    }, {
                        key: "init", value: function () {
                            this.initDataTables()
                        }
                    }], (a = null) && n(t.prototype, a), r && n(t, r), e
                }();
                jQuery(function () {
                    a.init()
                })
            }
        });
    </script>
@endsection
@section('content')
    <div class="content">
        <div class="block">
            <div class="block-header">
                <h3 class="block-title"> @lang('generics.validations')</h3>
            </div>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons" id="validations-table">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th class="text-center d-none d-sm-table-cell">@lang('generics.nick')
                        <th class="text-center d-none d-sm-table-cell">@lang('generics.person_type')</th>
                        <th class="text-center d-none d-sm-table-cell">@lang('generics.document_id')</th>
                        <th class="text-center d-none d-sm-table-cell">@lang('generics.name')</th>
                        <th class="text-center d-none d-sm-table-cell">@lang('generics.document_validate')</th>
                        <th class="text-center d-none d-sm-table-cell">@lang('generics.state')</th>
                        <th class="text-center d-none d-sm-table-cell">@lang('generics.action')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($validations as $validation)
                        <tr>
                            @if($validation->offeror_or_customer == 1)
                                <td class="text-center font-size-sm"> {{$validation->user->customer->id}} </td>
                                <td class="text-center font-size-sm"> @lang('generics.client')</td>
                                @if($validation->user->customer->customer_type == "Juridical")
                                    <td class="text-center font-size-sm"> @lang('generics.juridical') </td>
                                @else
                                    <td class="text-center font-size-sm"> @lang('generics.natural') </td>
                                @endif
                                <td class="text-center font-size-sm"> {{$validation->user->customer->document_number}} </td>
                            @else
                                <td class="text-center font-size-sm"> {{$validation->user->offeror->id}} </td>
                                <td class="text-center font-size-sm"> @lang('generics.offeror') </td>
                                <td class="text-center font-size-sm"> @lang('generics.natural') </td>
                                <td class="text-center font-size-sm"> {{$validation->user->offeror->document_number}} </td>
                            @endif

                            <td class="font-w600 font-size-sm">
                                {{$validation->user->name}}
                            </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{$validation->documentValidate->name}}
                            </td>

                            @if($validation->state == 1)
                                <td class="text-center font-size-sm"> @lang('generics.rejected') </td>
                                <td class="text-center d-none d-sm-table-cell font-size-sm">
                                    <a href="{{route('validations.show', $validation->id)}}" class="text-danger"> <i class="fa fa-2x fa-times-circle" data-toggle="tooltip" data-placement="left" title="@lang('messages.rejected_document')"></i></a>
                                </td>
                            @elseif ($validation->state == 2)
                                <td class="text-center font-size-sm"> @lang('generics.pending') </td>
                                <td class="text-center d-none d-sm-table-cell font-size-sm">
                                    <a href="{{route('validations.show', $validation->id)}}" class="text-warning"> <i class="fa fa-2x fa-exclamation-triangle" data-toggle="tooltip" data-placement="left" title="@lang('messages.pending_validation')"></i></a>
                                </td>
                            @elseif ($validation->state == 3)
                                <td class="text-center font-size-sm"> @lang('generics.validated') </td>
                                <td class="text-center d-none d-sm-table-cell font-size-sm">
                                    <a href="{{route('validations.show', $validation->id)}}" class="text-success"> <i class="fa fa-2x fa-check-circle" data-toggle="tooltip" data-placement="left" title="@lang('messages.validated_document')"></i></a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
