<?php

namespace Sagalagarap\Warta;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class WartaServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'\config\warta.php' => config_path('warta.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
