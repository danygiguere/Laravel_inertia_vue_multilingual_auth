<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

Route::redirect('/', '/'. App::getLocale());

foreach (config('app.supported_locales') as $locale) {
    Route::prefix($locale)->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    });
}


//Route::get('/{locale}', function () {
//    return view('welcome');
//});
//Route::get('/{locale}/dashboard', function () {
//    return view('dashboard');
//});

require __DIR__ . '/auth.php';
