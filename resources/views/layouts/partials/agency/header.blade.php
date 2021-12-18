<header id="page-header">
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
            <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                <i class="fa fa-fw fa-ellipsis-v"></i>
            </button>
            <!-- END Toggle Mini Sidebar -->

            <!-- Apps Modal -->


        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
        @include('layouts.partials.agency.navigation.common.user-dropdown')


        <!-- Notifications Dropdown -->

            <notifications></notifications>
        <!-- END Notifications Dropdown -->

            <!-- Toggle Side Overlay -->

        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

</header>
