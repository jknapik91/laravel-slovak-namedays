<?php

namespace Janknapik\SlovakNamedays;

use Illuminate\Support\ServiceProvider;

class SlovakNamedaysServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Registrácia balíčka
        $this->app->singleton(SlovakNamedays::class, function () {
            return new SlovakNamedays();
        });
    }

    public function boot()
    {
        // Načítanie dát z JSON alebo publikovanie ďalších súborov
    }
}