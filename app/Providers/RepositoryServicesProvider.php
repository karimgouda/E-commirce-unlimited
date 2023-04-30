<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //Admin
        $this->app->bind(
            'App\Http\Interfaces\Admin\HomeInterface',
            'App\Http\Repositories\Admin\HomeRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\CategoryInterface',
            'App\Http\Repositories\Admin\CategoryRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\ProductInterface',
            'App\Http\Repositories\Admin\ProductRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AllUsersInterface',
            'App\Http\Repositories\Admin\AllUsersRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdsInterface',
            'App\Http\Repositories\Admin\AdsRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\OrdersInterface',
            'App\Http\Repositories\Admin\OredersRepository'
        );

        //user
        $this->app->bind(
            'App\Http\Interfaces\User\HomeInterface',
            'App\Http\Repositories\User\HomeRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\User\AuthInterface',
            'App\Http\Repositories\User\AuthRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\User\CartInterface',
            'App\Http\Repositories\User\CartRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\User\OrderInterface',
            'App\Http\Repositories\User\OrderRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\User\OrderDetailsInterface',
            'App\Http\Repositories\User\OrederDetelisRepository'
        );
        $this->app->bind(
            'App\Http\Interfaces\User\ShopInterface',
            'App\Http\Repositories\User\ShopRepository'
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
