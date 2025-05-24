<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;

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
        TwillNavigation::addLink(
            NavigationLink::make()->forSingleton('frontPage')->title('Front page')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('schedules')->title('Training schedule')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('pages')->title('Train with us')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forSingleton('board')->title('Board')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forSingleton('pricing')->title('Pricing')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forSingleton('findUs')->title('Find us')
        );
    }
}
