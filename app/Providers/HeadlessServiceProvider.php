<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use File;
use View;

class HeadlessServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if(File::exists(resource_path('cms/setup.json'))) {
            $setup = File::get(resource_path('cms/setup.json'));
            $setup = json_decode($setup);
            $this->app->bind('headless', function() use ($setup) {
                return $setup;
            }, true);

            View::share('headless', app('headless'));
        }
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
