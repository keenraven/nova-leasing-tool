<?php

namespace Variantgroup\NovaLeasingTool;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Variantgroup\NovaLeasingTool\Http\DownloadController;


class NovaLeasingToolServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the tool’s services.
     */
    public function boot(): void 
    {
        $this->publishes([
            __DIR__.'/../config/nova-leasing-tool.php' => config_path('nova-leasing-tool.php'),
        ], 'nova-leasing-tool-config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'nova-leasing-tool');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/nova-leasing-tool'),
        ], 'nova-leasing-tool-views');

        // $this->app->booted(function () {
        //     $this->routes();
        // });

        Route::get('leasing/application', DownloadController::class . '@download');

        $this->provideConfigToScript();
    }

     /**
     * Register the tool’s routes.
     */
    // protected function routes(): void
    // {
    //     if ($this->app->routesAreCached()) {
    //         return;
    //     }
    // }

    /**
     * Register the tool’s services.
     */
    public function register(): void 
    {
        $this->mergeConfigFrom(__DIR__.'/../config/nova-leasing-tool.php', 'nova-leasing-tool');
    }


    /**
     * Add the tool’s configs to Nova.
     */
    protected function provideConfigToScript(): void
    {
        Nova::serving(function (ServingNova $event) {
            Nova::provideToScript([
                'nova_leasing_tool' => [
                    'duration'      => config('nova-leasing-tool.duration'),
                    'rates'         => config('nova-leasing-tool.rates'),
                    'notification'  => config('nova-leasing-tool.notification'),
                ],
            ]);
        });
    }
}