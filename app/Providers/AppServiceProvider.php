<?php

namespace App\Providers;

use App\Repository\AdminRepository;
use App\Repository\IAdminRepository;
use App\Repository\IProductRepository;
use App\Repository\ProductRepository;
use App\Repository\BrandsRepository;
use App\Repository\IBrandsRepository;
use App\Repository\IUnitsRepository;
use App\Repository\UnitsRepository;
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
        $this->app->bind(IProductRepository::class, ProductRepository::class);
        $this->app->bind(IAdminRepository::class, AdminRepository::class);
        $this->app->bind(IBrandsRepository::class, BrandsRepository::class);
        $this->app->bind(IUnitsRepository::class, UnitsRepository::class);
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
