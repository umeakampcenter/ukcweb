<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StylePageController;

Route::get('/', [FrontPageController::class, 'show'])->name('front');

// Dynamic style routes like /jujutsu
$stylePages = DB::table('style_pages')
    ->whereNull('deleted_at')
    ->where('published', '=', 1)
    ->pluck('linkPath');

foreach ($stylePages as $linkPath) {
    Route::get($linkPath, StylePageController::class);
}

Route::get('/bjj', function () {
    return view(App::getLocale() . '/bjj');
})->name('bjj');

Route::get('/bjjChildren', function () {
    return view(App::getLocale() . '/bjjChildren');
})->name('bjjChildren');

Route::get('/self-defence', function () {
    return view(App::getLocale() . '/selfDefence');
})->name('selfDefence');

Route::get('/board', function () {
    return view(App::getLocale() . '/board');
})->name('board');

Route::get('/pricing', function () {
    return view(App::getLocale() . '/pricing');
})->name('pricing');

Route::get('/findUs', function () {
    return view(App::getLocale() . '/findUs');
})->name('findUs');

Route::get('/schedule', [ScheduleController::class, 'show'])->name('schedule');
