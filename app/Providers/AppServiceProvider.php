<?php

namespace App\Providers;

use Laravel\Boost\Boost;

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
        Boost::registerAgent('customagent', CustomAgent::class);
    }
}
