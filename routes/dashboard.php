<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboards\AboutController;
use App\Http\Controllers\Dashboards\BannerController;
use App\Http\Controllers\Dashboards\LayananUnggulanController;
use App\Http\Controllers\Dashboards\NewsAndEventController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\PartnerController;
use Illuminate\Support\Facades\Route;




Route::prefix('dashboards')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::post('/upload', [App\Http\Controllers\UploadController::class, 'Upload'])
        ->name('upload');


    Route::prefix('landing')->group(function () {
        // Banners
        Route::get('/banners', [BannerController::class, 'banner'])
            ->name('dashboard.landing.banners.index');
        Route::post('/banners', [BannerController::class, 'storeOrUpdateBanner'])
            ->name('banner.storeOrUpdate');
        // Global
        Route::get('/global', [GlobalController::class, 'global'])
            ->name('dashboard.landing.global.index');
        Route::post('/global', [GlobalController::class, 'storeOrUpdateGlobal'])
            ->name('global.storeOrUpdate');
        // About
        Route::get('/about', [AboutController::class, 'about'])
            ->name('dashboard.landing.about.index');
        Route::post('/about', [AboutController::class, 'storeOrUpdateAbout'])
            ->name('about.storeOrUpdate');
        // Layanan Unggulan
        Route::prefix('layanan-unggulan')->group(function () {
            Route::get('/', [LayananUnggulanController::class, 'layananUnggulan'])
                ->name('LayananUnggulan.index');
            Route::get('/data', [LayananUnggulanController::class, 'getData'])
                ->name('LayananUnggulan.data');
            Route::get('/manage/{id?}', [LayananUnggulanController::class, 'manage'])
                ->name('LayananUnggulan.manage');
            Route::post('/store', [LayananUnggulanController::class, 'storeLayananUnggulan'])
                ->name('LayananUnggulan.store');
            Route::put('/update/{id}', [LayananUnggulanController::class, 'updateLayananUnggulan'])
                ->name('LayananUnggulan.update');
            Route::delete('/delete/{id}', [LayananUnggulanController::class, 'deleteLayananUnggulan'])
                ->name('LayananUnggulan.delete');
        });

        // News and Events
        Route::prefix('news-and-events')->group(function () {
            // Halaman list khusus News
            Route::get('/news', [NewsAndEventController::class, 'newsIndex'])
                ->name('news.index');

            // Halaman list khusus Events
            Route::get('/events', [NewsAndEventController::class, 'eventsIndex'])
                ->name('events.index');

            // Create / Edit
            Route::get('/manage/{id?}', [NewsAndEventController::class, 'manage'])
                ->name('news-and-events.manage');

            // Store / Update
            Route::post('/store', [NewsAndEventController::class, 'store'])
                ->name('news-and-events.store');

            // Delete
            Route::delete('/destroy/{id}', [NewsAndEventController::class, 'destroy'])
                ->name('news-and-events.destroy');
        });

        // Partners
        Route::prefix('partners')->name('partners.')->group(function () {
            Route::get('/', [PartnerController::class, 'index'])->name('index');


            // Create / Edit (gabung jadi satu halaman manage)
            Route::get('/manage/{id?}', [PartnerController::class, 'manage'])->name('manage');

            // Store & Update
            Route::post('/store', [PartnerController::class, 'store'])->name('store');
            Route::put('/update/{id}', [PartnerController::class, 'updatePartner'])->name('update');

            // Delete
            Route::delete('/delete/{id}', [PartnerController::class, 'deletePartner'])->name('delete');
        });

    });
});

