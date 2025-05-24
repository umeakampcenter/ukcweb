<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PricingController;
use Illuminate\Support\Facades\Schema;

Route::get('/', [FrontPageController::class, 'show'])->name('front');

// Dynamic page routes like /jujutsu
if (Schema::hasTable('pages')) {
    $pagePathList = DB::table('pages')
        ->whereNull('deleted_at')
        ->where('published', '=', 1)
        ->pluck('linkPath');

    foreach ($pagePathList as $linkPath) {
        Route::get($linkPath, PageController::class);
    }
}

Route::permanentRedirect('/bjjChildren', '/bjj-children');

Route::get('/board', [BoardController::class, 'show'])->name('board');

Route::get('/pricing', PricingController::class)->name('pricing');

Route::get('/findUs', function () {
    return view(App::getLocale() . '/findUs', ['migrated' => false]);
})->name('findUs');

Route::get('/schedule', [ScheduleController::class, 'show'])->name('schedule');
