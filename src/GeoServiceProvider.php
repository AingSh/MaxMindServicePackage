<?php

namespace AingShMax\MaxMindServicePackage;

use Alexander\GeoServiceInterface\GeoServiceInterface;
use Illuminate\Support\ServiceProvider;


class GeoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(GeoServiceInterface::class, function () {
          return new MaxmindService();
        });
    }
}