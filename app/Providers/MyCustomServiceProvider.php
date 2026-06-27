<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\services\MyCustomService;

class MyCustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MyCustomService::class,function($app){
          return new MyCustomService;
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
