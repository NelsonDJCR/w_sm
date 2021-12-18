<ul class="nav-main">
    @include(config('laravel-menu.views.bootstrap-items'), ['items' => $appNavBarClient->roots()])
</ul>