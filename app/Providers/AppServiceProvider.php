<?php

namespace App\Providers;

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
        $this->app->bind(\App\Contracts\User\UserServiceInterface::class, \App\Services\User\UserService::class);
        $this->app->bind(\App\Contracts\Security\GuardServiceInterface::class, \App\Services\Security\GuardService::class);
        $this->app->bind(\App\Contracts\EcoLearn\AccountServiceInterface::class, \App\Services\EcoLearn\AccountService::class);
    }

    /**
     * Boot the services
     *
     * @return void
     */
    public function boot(): void
    {
    }
}
