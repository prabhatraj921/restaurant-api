<?php

namespace App\Providers;

use App\Services\FileHandlerService\FileHandlerService;
use App\Services\RestaurantService\RestaurantService;
use App\Services\UserService\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('UserService', function() {
            return new UserService();
        });
        $this->app->bind('RestaurantService', function() {
            return new RestaurantService();
        });
        $this->app->bind('FileHandlerService', function() {
            return new FileHandlerService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
