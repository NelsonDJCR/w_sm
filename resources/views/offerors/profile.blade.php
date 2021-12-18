@extends('layouts.backend')

@section('js_after')
    <script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
    <script src="{{ asset('js/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script>
        $(document).on('click', ".confirm-submit", function (e) {
            e.preventDefault();
            e.stopPropagation();
            let form = $(this).parents('form');
            Swal.fire({
                title: '¿Seguro/a que desea eliminarlo?',
                text: "Esta acción no se podra revertir.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Eliminando',
                        'Su registro se eliminará',
                        'success'
                    );
                    form.submit();
                }
            })

        });

    </script>

    <script>
        window.onload = function(){

            var url = document.location.toString();
            if (url.match('#')) {
                $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
            }

            //Change hash for page-reload
            $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').on('shown', function (e) {
                window.location.hash = e.target.hash;
            });
        }
    </script>
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>jQuery(function(){ One.helpers(['datepicker']); });
        $(function () {
            $('#availability').datepicker({
                startDate: '+1d',
                endDate: '+3m',
                format: "yy-mm-dd",
                datesDisabled:@php echo json_encode($datesDisabled) @endphp,
                daysOfWeekDisabled:@php echo json_encode($daysOfWeekDisabled) @endphp,
            });
        });
    </script>
@endsection
@section('content')

    <!-- Page Content -->
    <div class="content">
        <!-- Block Tabs -->
        <h2 class="content-heading">@lang('generics.offeror')</h2>

        <div class="row">
            <div class="col-lg-3 col-md-4">

                <div class="block">
                    <div class="block-header block-header-default ">
                        <h3 class="block-title">
                            <i class="fa fa-user text-muted mr-1"></i> @lang('generics.profile')
                        </h3>
                    </div>
                    <div class="block-content">

                        <div class="media d-flex push align-content-center" style="text-align: center">
                            <div style="margin: auto">
                                <img class="img-avatar img-avatar128"  src="{{ $offeror->user->getAvatar()}}" alt="{{ $offeror->user->id }}">
                            </div>
                        </div>
                        <div class="media d-flex align-items-center push border-bottom">
                            <div class="media-body">
                                <div class="font-w600">@lang('generics.offeror_id')</div>
                                <div class="font-size-sm">{{ $offeror->id }}</div>
                            </div>
                        </div>

                        <div class="media d-flex align-items-center push border-bottom">
                            <div class="media-body">
                                <div class="font-w600">@lang('generics.name')</div>
                                <div class="font-size-sm">{{ $offeror->user->name }}</div>
                            </div>
                        </div>
                       <div class="media d-flex align-items-center push border-bottom">
                            <div class="media-body">
                                <div class="font-w600">@lang('generics.nick')</div>
                                <div class="font-size-sm">{{ $offeror->user->nick_name }}</div>
                            </div>
                        </div>
                        <div class="media d-flex align-items-center push border-bottom">
                            <div class="media-body">
                                <div class="font-w600">@lang('generics.level')</div>
                                <div class="font-size-sm">{{ $offeror->level }}</div>
                            </div>
                        </div>
                        <div class="media d-flex align-items-center push border-bottom">
                            <div class="media-body">
                                <div class="font-w600">@lang('generics.agency')</div>
                                <div class="font-size-sm">{{ $offeror->agency }}</div>
                            </div>
                        </div>
                        <div class="media d-flex align-items-center push border-bottom">
                            <div class="media-body">
                                <div class="font-w600">@lang('generics.age')</div>
                                <div class="font-size-sm">{{\Carbon\Carbon::parse($offeror->birthday)->age}}</div>
                            </div>
                        </div>
                        <div class="media d-flex align-items-center push border-bottom">
                            <div class="media-body">
                                <div class="font-w600">@lang('generics.state')</div>
                                <div class="font-size-sm">
                                    @if($offeror->user->state == 1)
                                        <span class="badge badge-success">@lang('generics.active')</span>
                                    @else
                                        <span class="badge badge-warning">@lang('generics.inactive')</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <!-- Block Tabs Default Style -->
                <div class="block">

                    @php(
                    $tabs = array(
                    'profile' => ['name' => __('generics.general_information')],
                    'gallery' => ['name' => __('generics.gallery')],
                    'services' => ['name' => __('generics.services')],
                    'accessories' => ['name' => __('generics.accessories')],
                    'availability' => ['name' => __('generics.availability')],
                    'transactions' => ['name' => __('generics.transactions')],
                    'balance' => ['name' => __('generics.balance')],
                    'ratings' => ['name' => __('generics.ratings')],
                    'financial_information' => ['name' => __('generics.financial_information')],
                    'requests' => ['name' => __('generics.requests')],
                    'operations'=> ['name' => __('generics.operations')],
                    'validations'=> ['name' => __('generics.validations')],
                    ))

                    @include('offerors.includes.menu-tabs', ['tabs' => $tabs])

                    <div class="block-content tab-content">
                        @foreach($tabs as $tab => $tabDetail)
                            @include('offerors.tabs.'.$tab, ['tabDetail' => $tabDetail])
                        @endforeach
                        @include('offerors.tabs.settings')
                    </div>
                </div>
                <!-- END Block Tabs Default Style -->
            </div>
        </div>
        <!-- END Block Tabs -->
    </div>
    <!-- END Page Content -->
@endsection

@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
    <style>
        .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
            text-decoration: line-through;
            color: #ccc;
        }
        .day
        {
            color: #0a0302;
        }
    </style>
@endsection

