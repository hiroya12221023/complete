<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
    {
        // asset()でURLを呼び出している個所でHTTPSでアクセスするようにする
        if (config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
    }
}
