<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('not_contains_script', function ($attribute, $value, $parameters, $validator) {
            // Check if the input value contains any script tags or potentially harmful content
            return !preg_match('/<script\b[^>]*>(.*?)<\/script>/is', $value);
        });
    }
}
