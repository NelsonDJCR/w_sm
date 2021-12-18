<!-- User Dropdown -->
<div class="dropdown d-inline-block ml-2">
    <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded" src="{{ auth()->user()->getAvatar()}}" alt="Header Avatar" style="width: 18px;">
        <span class="d-none d-sm-inline-block ml-1">{{auth()->user()->name}}</span>
        <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
        <div class="p-3 text-center bg-primary">
            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ auth()->user()->getAvatar() }}" alt="">
        </div>
        <div class="p-2">
            <h5 class="dropdown-header text-uppercase d-md-none">{{Illuminate\Support\Str::limit(auth()->user()->name, 25)}}</h5>
            <h5 class="dropdown-header text-uppercase">{{__('generics.user_options')}}</h5>
            <div class="dropdown-item d-flex align-items-center justify-content-between">
                <span>{{__('generics.language')}}</span>
                <a href="{{route('setlocale', 'en')}}"><span class="flag-icon flag-icon-us "></span></a>
                <a href="{{route('setlocale', 'es_CO')}}"><span class="flag-icon flag-icon-co "></span></a>
            </div>
            <div class="dropdown-item d-flex align-items-center justify-content-between">
                <span>{{__('generics.currency')}}</span>
                <span class="badge badge-primary">{{session('currency')}}</span>
                <a href="#" data-toggle="modal" data-target="#change-currency">{{__('buttons.change')}}</a>
            </div>
            <div role="separator" class="dropdown-divider"></div>
            <h5 class="dropdown-header text-uppercase">{{__('generics.actions')}}</h5>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{route('user.avatar.edit')}}">
                <span>{{__('generics.change_profile_picture')}}</span>
                <i class="si si-user ml-1"></i>
            </a>
            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span>Log Out</span>
                <i class="si si-logout ml-1"></i>
            </a>
        </div>
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<!-- END User Dropdown -->
