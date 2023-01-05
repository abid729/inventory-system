<?php

namespace App\Providers;

use App\Repository\AdminRepository;
use App\Repository\IAdminRepository;
use App\Repository\IProductRepository;
use App\Repository\ProductRepository;
use App\Repository\BrandsRepository;
use App\Repository\IBrandsRepository;
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