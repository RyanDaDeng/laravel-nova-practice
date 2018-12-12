<?php

namespace App\Modules\Auth\Providers;

use App\Modules\Auth\Contracts\AuthServiceInterface;
use App\Modules\Auth\Models\AuthUser;
use App\Modules\Auth\Observers\AuthUserObserver;
use App\Modules\Auth\Services\AuthService;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Nova;


class AuthServiceProvider extends ServiceProvider
{


    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        $this->novaBoot();
//        AuthUser::observe(AuthUserObserver::class);
        $this->map();
    }


    public function novaBoot()
    {
        Nova::serving(function () {
            AuthUser::observe(AuthUserObserver::class);
        });
    }


    public function register()
    {
        $this->app->singleton(
            AuthServiceInterface::class,
            AuthService::class
        );
    }

    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes//api.php');
    }

}

