<div class="loader d-none" id="loader_ajax">
    <img class="icon_loader" src="{{ asset('images/preload.gif') }}" alt="loader">
 </div>
 


<header id="page-header"  style="background: black">
    <!-- Header Content -->
    
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
            <!-- Toggle Mini Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
            <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" style="background: #E71C79; border: 1px solid black" data-toggle="layout" data-action="sidebar_mini_toggle">
                <i class="fa fa-fw fa-ellipsis-v"></i>
            </button>
            <!-- END Toggle Mini Sidebar -->
            <!-- Apps Modal -->
        </div>
        <!-- END Left Section -->
        <!-- Right Section -->
        <div class="d-flex align-items-center">

        @include('layouts.partials.offeror.navigation.user-dropdown')
        <!-- Notifications Dropdown -->
            <notifications class="mr-2 d-lg-inline-block"></notifications>
        <!-- END Notifications Dropdown -->
            <a class="fab fa-whatsapp btn btn-dual mr-2 d-lg-inline-block" style="background: #1BD741" href="https://wa.me/573223781478" target="_blank" title="Contacto Soporte"></a>
            <!-- Toggle Side Overlay -->
            @isset($getNumber)
                @if ($getNumber != '')
                    <a class="fa fa-radiation-alt btn btn-smirrow mr-2 d-lg-inline-block panic-button" data-phone="{{ $getNumber }}" style="background: #E71C79; border: 1px solid #E71C79"  target="_blank" title="Botón de Panico"></a>
                @endif
            @endisset
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
</header>
