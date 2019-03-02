<?php

namespace App\Providers;

use App\Http\Helpers\Realizations\Page;
use Illuminate\Support\ServiceProvider;

class HelpersProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Http\Helpers\Contracts\ImageProcessor', 'App\Http\Helpers\Realizations\ImageProcessor');
        $this->app->bind('Page', function() {
            return new Page();
        });
    }
}
