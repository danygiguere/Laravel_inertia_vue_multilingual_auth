<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Middleware;
use Symfony\Component\HttpFoundation\Response;

class Localization extends Middleware
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
        } else {
//            app()->setLocale(config('app.locale'));
        }
//        dd(app()->getLocale());
        return $next($request);
    }
}

