<!-- Opens from the modal toggle button in the header -->
<div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-sm" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">@lang('generics.menu')</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row gutters-tiny">
                        <div class="col-6">
                            <!-- CRM -->
                            <a class="block block-rounded block-themed bg-default" href="{{route('home')}}">
                                <div class="block-content text-center">
                                    <i class="fa fa-home fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        @lang('generics.home')
                                    </p>
                                </div>
                            </a>
                            <!-- END CRM -->
                        </div>
                        <div class="col-6">
                            <!-- Products -->
                            <a class="block block-rounded block-themed bg-danger" href="{{route('search.simple')}}">
                                <div class="block-content text-center">
                                    <i class="fa fa-search fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        @lang('generics.search')
                                    </p>
                                </div>
                            </a>
                            <!-- END Products -->
                        </div>
                        <div class="col-6">
                            <!-- Sales -->
                            <a class="block block-rounded block-themed bg-success mb-0" href="{{route('user.avatar.edit')}}">
                                <div class="block-content text-center">
                                    <i class="fa fa-address-card fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        @lang('generics.change_profile_picture')
                                    </p>
                                </div>
                            </a>
                            <!-- END Sales -->
                        </div>
                        <div class="col-6">
                            <!-- Payments -->
                            <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <div class="block-content text-center">
                                    <i class="fa fa-power-off fa-2x text-white-75"></i>
                                    <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                        @lang('generics.logout')
                                    </p>
                                </div>
                            </a>
                            <!-- END Payments -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
