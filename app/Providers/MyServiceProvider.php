<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\services\MyService;
class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('myservice',function($app){

            return new MyService;
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
