<?php

namespace App\Providers;

use App\Services\AdvertisementCategoryService;
use App\Services\AdvertisementService;
use App\Services\AreaService;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Relation::morphMap([
            'advertisement' => \App\Models\Advertisement::class
        ]);
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

        $this->app->bind(AdvertisementService::class, function () {
            return new AdvertisementService();
        });
    }
}
