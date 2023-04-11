<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\system\btn;

class btnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('btn', btn::class);
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
