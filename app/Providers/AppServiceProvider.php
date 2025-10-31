<?php

namespace App\Providers;

use App\Models\profile_setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //  $global = profile_setting::first();

    // share ke semua view
        //View::share('global', $global);
    }
}
