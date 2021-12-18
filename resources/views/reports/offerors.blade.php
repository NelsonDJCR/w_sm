@extends('layouts.backend')
@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
@endsection

@section('js_after')
    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
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
                <h3 class="block-title"> @lang('generics.offerors')</h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th>Nombre</th>
                        <th class="d-none d-sm-table-cell">Correo Electrónico</th>
                        <th class="d-none d-sm-table-cell">Dirección</th>
                        <th class="d-none d-sm-table-cell">Teléfono</th>
                        <th class="d-none d-sm-table-cell">Usuario</th>
                        <th class="d-none d-sm-table-cell">TD</th>
                        <th class="d-none d-sm-table-cell">Documento</th>
                        <th class="d-none d-sm-table-cell">Nivel</th>
                        <th class="d-none d-sm-table-cell">Genero</th>
                        <th class="d-none d-sm-table-cell">Altura</th>
                        <th class="d-none d-sm-table-cell">Peso</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($offerors as $offeror)
                    <tr>
                        <td class="text-center font-size-sm">{{$offeror->id}}</td>
                        <td class="font-w600 font-size-sm">
                            <a href="">{{$offeror->user->name}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{$offeror->user->email}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->address}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->user->phone}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->user->nick_name}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->document}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->document_number}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->level}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->gender}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->height}}
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{$offeror->weight}}
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
