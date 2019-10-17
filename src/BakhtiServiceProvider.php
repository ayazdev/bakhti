<?php

namespace ayazdev\Bakhti;

 use Illuminate\Support\ServiceProvider;

class BakhtiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'bakhti');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations', 'bakhti');
        $this->mergeConfigFrom(__DIR__ . '/config/bakhti.php', 'bakhti');
        $this->publishes([
			__DIR__.'/public/css' => public_path('css/bakhti'),
			__DIR__.'/public/js' => public_path('js/bakhti'),
		], 'public');
    }

    public function register()
    {

    }

}