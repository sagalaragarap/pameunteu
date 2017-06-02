<?php
namespace Sagalagarap\Pameunteu;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Sagalagarap\Pameunteu\Classes\Pameunteu;

class PameunteuServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        require __DIR__ . '/Http/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('pameunteu', function() {
            
        });
    }
}
