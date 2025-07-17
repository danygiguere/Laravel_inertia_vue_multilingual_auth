<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

foreach (config('app.supported_locales') as $locale) {
    Route::prefix($locale.'/api')->group(function () {
        Route::post('/login', [AuthController::class, 'login'])->name('api.login');
    });
}
