<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\User;
use App\Observers\AuditLogObserver;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        User::observe(
            AuditLogObserver::class);
        //app()->setLocale(session('locale', config('app.locale')));
        App::setLocale(session('locale', config('app.locale')));

        View::composer('layouts.backend', function ($view) {
            $companyId = session('selected_company_id');
            $company = $companyId ? Company::find($companyId) : null;
            $view->with('selectedCompany', $company);
        });

        if (PHP_OS_FAMILY === 'Windows') {
            \Illuminate\Support\Facades\Artisan::call('cache:clear');
            \Illuminate\Support\Facades\Artisan::call('view:clear');
        }
    }
}
