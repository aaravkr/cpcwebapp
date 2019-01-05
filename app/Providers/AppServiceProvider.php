<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * 
     * Paste this file in boot(), for live server
     *  $this->app->bind('path.public', function() {
     *        return base_path().'/../dev.cyberpeacecorps.in';
     *    });
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
