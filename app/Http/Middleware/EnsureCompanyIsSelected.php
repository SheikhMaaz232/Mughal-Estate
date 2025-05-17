<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureCompanyIsSelected
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && !session()->has('selected_company_id')) {
            return redirect()->route('company.select.form');
        }

        return $next($request);
    }
}

