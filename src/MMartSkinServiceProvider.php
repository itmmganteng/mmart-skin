<?php

namespace Itmm\MMartSkin;

use Illuminate\Support\ServiceProvider;

class MMartSkinServiceProvider extends ServiceProvider
{

    const STUBSPATH = __DIR__.'/skin-stubs/';

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
        // Publish Config hanya jika melakukan instalasi pertama kali
        $this->publishes([
            static::STUBSPATH . '/config' => base_path('config'),
        ], 'mskin-config');
    }
}
