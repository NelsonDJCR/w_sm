<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">


            <!-- Toggle Sidebar -->
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="modal" data-target="#one-modal-apps">
                <i class="si si-grid "></i>
            </button>
            <a class="font-w600 text-dual" href="/home">
                <img class="rounded" style="max-height: 30px" src="{{URL::asset('images/icon/smirrow-icon.png')}}" alt="logo">
            </a>
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-action="header_search_on" data-placement="top" title="" data-original-title="Buscar" >
                <i class="si si-magnifier "></i>
            </button>
            <form class="d-none d-sm-inline-block" action="/search" method="GET" style="margin-right: 0.5rem;">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control form-control-alt " placeholder="Search.." id="page-header-search-input2" name="term">
                    <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="si si-magnifier"></i>
                                    </span>
                    </div>
                </div>
            </form>
            <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mi perfil" >
                <i class="far fa-address-card "></i>
            </button>
            <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="tooltip" data-placement="top" title="" data-original-title="Salir" >
                <i class="fa fa-power-off "></i>
            </button>

            <!-- Apps Modal -->


        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
        @include('layouts.partials.navigation.common.user-dropdown')


        <!-- Notifications Dropdown -->
        <div id="app">
            <notifications></notifications>
        </div>
        <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->

        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
    <!-- Header Search -->
    @include('layouts.partials.headerSearch')
    <!-- END Header Search -->
</header>
