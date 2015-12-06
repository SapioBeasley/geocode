<?php

namespace Sapioweb\Geocode;

use Illuminate\Support\ServiceProvider;

class GeocodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Sapioweb\Geocode\GeoCode');
    }
}
