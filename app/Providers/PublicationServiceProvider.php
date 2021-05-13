<?php

namespace App\Providers;

use App\Services\PublicationService;
use Illuminate\Support\ServiceProvider;

class PublicationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\PublicationService', function ($app) {
            return new PublicationService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
