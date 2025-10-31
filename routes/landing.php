<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing.home');

    Route::prefix('berita')->group(function () {
        Route::get('/', [LandingController::class, 'indexnews'])->name('landing.news.index');
        Route::get('/{slug}', [LandingController::class, 'showNews'])->name('landing.news.show');
    });
    Route::prefix('event')->group(function () {
        Route::get('/', [LandingController::class, 'indexevent'])->name('landing.event.index');
        Route::get('/{slug}', [LandingController::class, 'showevent'])->name('landing.event.show');
    });

    Route::get('/alumni', [LandingController::class, 'alumni'])->name('landing.alumni.index');
    Route::get('/about', [LandingController::class, 'about'])->name('landing.about.index');
});
