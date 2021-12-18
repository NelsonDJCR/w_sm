@foreach($items as $item)
    @if(isset($item->link->path['url']) && empty($item->link->path['url']))
        <li class="nav-main-heading">
            {!! $item->title !!}
        </li>

    @else

        <li @lm_attrs($item) class="nav-main-item" @lm_endattrs>
            <a @lm_attrs($item->link)  @if($item->hasChildren()) class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#" @else class="nav-main-link" @endif @lm_endattrs href="{!! $item->url() !!}">
                @if($item->icon != '')
                    <i class="nav-main-link-icon {{$item->icon}}"></i>
                @endif
                <span class="nav-main-link-name">
                {!! $item->title !!}
                </span>
            </a>

            @if($item->hasChildren())
                <ul class="nav-main-submenu">
                    @include(config('laravel-menu.views.bootstrap-items'), array('items' => $item->children()))
                </ul>
            @endif
        </li>


    @endif

    @if($item->divider)
        <li{!! Lavary\Menu\Builder::attributes($item->divider) !!}></li>
    @endif
@endforeach
