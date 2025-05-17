<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Group;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        View::composer('*', function ($view) {
        $view->with('groups', Group::all());
        $view->with('companies', Company::all());
    });
    }
}
