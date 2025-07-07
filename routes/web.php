<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/'. App::getLocale());

foreach (config('app.supported_locales') as $locale) {
    Route::prefix($locale)->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/dashboard', function () {
            return view('dashboard');
        });
    });
}
