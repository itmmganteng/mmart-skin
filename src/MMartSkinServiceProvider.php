<?php

namespace Itmm\MMartSkin;

use Illuminate\Support\ServiceProvider;

class MMartSkinServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            MMartSkin::class
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }
}
