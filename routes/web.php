<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontController@show')->name('home');

Route::get('/jujutsu', function () {
    return view(App::getLocale() . '/jujutsu');
})->name('jujutsu');

Route::get('/bjj', function () {
    return view(App::getLocale() . '/bjj');
})->name('bjj');

Route::get('/self-defence', function () {
    return view(App::getLocale() . '/selfDefence');
})->name('selfDefence');

Route::get('/board', function () {
    return view(App::getLocale() . '/board');
})->name('board');

Route::get('/findUs', function () {
    return view(App::getLocale() . '/findUs');
})->name('findUs');

Route::get('/schedule', 'ScheduleController@show')->name('schedule');

Route::get('/lang/{language}', '\\ied3vil\\LanguageSwitcher\\LanguageSwitcherController@setLanguage')
    ->name('setLanguage');
