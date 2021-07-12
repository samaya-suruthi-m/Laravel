<?php

namespace LaravelCurd\Curd;

use Illuminate\Support\ServiceProvider;

class CurdServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('LaravelCurd\Curd\Http\controllers\CustomerController');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'curd');
      
    }
}
