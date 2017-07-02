<?php
namespace App\Providers;

use App\Http\ViewComposer\AppViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('app', AppViewComposer::class);
    }

    public function register()
    {

    }
}
