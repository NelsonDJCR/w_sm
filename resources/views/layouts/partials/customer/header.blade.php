<header id="page-header" style="background: #000">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Toggle Sidebar -->
            <button type="button" class="btn btn-sm btn-dual mr-2" style="background: #E71C79;border:1px solid #E71C79" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="modal"
                    data-target="#one-modal-apps">
                <i class="si si-grid "></i>
            </button>
            <a class="font-w600 text-dual" href="{{route('home')}}">
                <img class="rounded" style="max-height: 30px" src="{{URL::asset('images/icon/smirrow-icon.png')}}"
                     alt="logo">
            </a>
            <span class="p-1"></span>
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-action="header_search_on"
                    data-placement="top" title="" data-original-title="Buscar">
                <i class="si si-magnifier "></i>
            </button>
            <form class="d-none d-sm-inline-block " action="{{route('search.simple')}}" method="GET"
                  style="margin-right: 0.5rem;">
                <div class="input-group input-group-sm ">
                    <input type="text" class="form-control form-control-alt " placeholder="{{__('generics.search')}}"
                           id="page-header-search-input2" name="term" value= {{Request::get('term')}}>
                    <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="si si-magnifier"></i>
                                    </span>
                    </div>
                </div>
            </form>
            <!-- Apps Modal -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <a class="fab fa-whatsapp btn btn-dual mr-2 d-none d-lg-inline-block" style="background: #1BD741;border: 1px solid #1BD741;" href="https://wa.me/573223781478" target="_blank" title="Contacto Soporte"></a>

        @include('layouts.partials.customer.navigation.user-dropdown')
        <!-- Notifications Dropdown -->
            <notifications></notifications>
            <!-- END Notifications Dropdown -->
            <!-- Toggle Side Overlay -->
            <button style="background: #E71C79;border:1px solid #E71C79;"  type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout"
                    data-action="side_overlay_toggle">
                <i style="color: white" class="fa fa-shopping-cart "></i> {{__('generics.stage')}} <span
                    class="badge badge-primary">{{Cart::count()}}</span>
            </button>
            <!-- END Toggle Side Overlay -->

        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
    <!-- Header Search -->
@include('layouts.partials.headerSearch')
<!-- END Header Search -->
</header>
