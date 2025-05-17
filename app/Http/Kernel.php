<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's route middleware groups.
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\LocaleMiddleware::class,
        ],
    ];

    // protected $routeMiddleware = [
    //     'company.selected' => \App\Http\Middleware\EnsureCompanyIsSelected::class,
    // ];
}
