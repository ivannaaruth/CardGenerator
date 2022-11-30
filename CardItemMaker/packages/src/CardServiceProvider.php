<?php

namespace CardMaker;

use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom( path:  __DIR__ . '/route/web.php');
        $this->loadViewsFrom( path:  __DIR__ . '/views', namespace: 'CardMaker');
        //publishes
        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/cardmaker'),
            __DIR__.'/Http/Controllers/CardController.php' => app_path('/Http/Controllers/CardController.php')
        ],["card"]);
    }
}
