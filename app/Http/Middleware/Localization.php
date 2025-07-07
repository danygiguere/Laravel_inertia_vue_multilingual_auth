<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(request()->segment(1) == 'en'){
            app()->setLocale('en');
        } elseif (request()->segment(1) == 'fr') {
            app()->setLocale('fr');
        }

        return $next($request);
    }
}

