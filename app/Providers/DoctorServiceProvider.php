<?php

namespace App\Providers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class DoctorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        Auth::provider('doctors', function ($app, array $config) {
            return new DoctorProvider($app['hash'], $config['model']);
        });
    
        Auth::extend('doctor', function ($app, $name, array $config) {
            return Auth::createUserProvider($config['provider']);
        });
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
