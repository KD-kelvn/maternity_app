<?php

namespace App\Providers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class DoctorProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
    public function retrieveByCredentials(array $credentials)
{
    if (!isset($credentials['email'])) {
        return null;
    }

    $doctor = DB::table('doctors')
        ->where('email', $credentials['email'])
        ->first();

    return $doctor ? (array) $doctor : null;
}

public function validateCredentials($user, array $credentials)
{
    return Hash::check($credentials['password'], $user['password']);
}
}
