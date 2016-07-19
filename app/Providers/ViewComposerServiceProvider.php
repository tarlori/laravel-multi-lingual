<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Page;
use Auth;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap the application services.
    *
    * @return void
    */
    public function boot(Request $request)
    {
        view()->composer(['layouts.app'], function($view) use($request) {
            //
        });

    }

    /**
    * Register the application services.
    *
    * @return void
    */
    public function register()
    {
    //
    }
}
