<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

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
        \Blade::setEchoFormat('e(utf8_encode(%s))');
        Schema::defaultStringLength(191);
        date_default_timezone_set('America/Sao_Paulo');
    }
}
