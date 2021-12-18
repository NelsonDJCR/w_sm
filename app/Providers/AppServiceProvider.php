<?php

namespace App\Providers;

use App\Observers\OfferorObserver;
use App\Observers\ServiceRequestObserver;
use App\Observers\ServiceRequestOfferorObserver;
use App\Offeror;
use App\ServiceRequest;
use App\ServiceRequestOfferor;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Offeror::observe(OfferorObserver::class);
        ServiceRequest::observe(ServiceRequestObserver::class);
        ServiceRequestOfferor::observe(ServiceRequestOfferorObserver::class);

    }
}
