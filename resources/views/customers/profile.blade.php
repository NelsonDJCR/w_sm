@extends('layouts.backend')
@section('css_after')
    <link rel="stylesheet" href="{{ asset('js/plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection

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
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Block Tabs -->
        <h2 class="content-heading">@lang('generics.customer')</h2>

        <div class="row">
            <div class="col-lg-12">
                <!-- Block Tabs Default Style -->
                <div class="block">

                    @php(
                    $tabs = array(
                    'profile' => ['name' => __('generics.profile')],
                    'requests' => ['name' => __('generics.requests')],
                    'favorites' => ['name' => __('generics.favorites')],
                    'ratings' => ['name' => __('generics.ratings')],
                    'validations' => ['name' => __('generics.validations')],
                    ))

                    @include('customers.includes.menu-tabs', ['tabs' => $tabs])

                    <div class="block-content tab-content">
                        @foreach($tabs as $tab => $tabDetail)
                            @include('customers.tabs.'.$tab, ['tabDetail' => $tabDetail])
                        @endforeach
                        @include('customers.tabs.settings')
                    </div>
                </div>
                <!-- END Block Tabs Default Style -->

            </div>

        </div>
        <!-- END Block Tabs -->

    </div>
    <!-- END Page Content -->


@endsection
