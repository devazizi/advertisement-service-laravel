<?php

namespace App\Providers;

use App\Services\AdvertisementCategoryService;
use App\Services\AreaService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(AreaService::class, function () {
            return new AreaService();
        });

        $this->app->bind(AdvertisementCategoryService::class, function () {
            return new AdvertisementCategoryService();
        });
    }
}
