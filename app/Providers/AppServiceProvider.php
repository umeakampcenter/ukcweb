<?php

namespace App\Providers;

use App\Guzzle\GuzzleFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(GuzzleFactory::class, function () {
            return new GuzzleFactory();
        });
    }
}
