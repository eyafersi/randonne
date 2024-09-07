<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category; // Import your Category model

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
        // Fetch all categories and make them available in views
        view()->share('categories', Category::all());
    }
}
