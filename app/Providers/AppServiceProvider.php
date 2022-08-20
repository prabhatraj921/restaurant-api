<?php

namespace App\Providers;

use App\Services\CategoryService\CategoryService;
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
        $this->app->bind('CategoryService', function() {
            return new CategoryService();
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
