<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/landing.php';
Route::middleware(['auth'])->group(function () {
    require __DIR__ . '/dashboard.php';
});

// auth routes
Route::prefix('auth')->group(function () {
    Route::get('login', [AuthController::class, 'loginShow'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
