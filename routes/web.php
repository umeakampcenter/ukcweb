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
    return view('jujutsu');
})->name('jujutsu');

Route::get('/kickboxing', function () {
    return view('kickboxing');
})->name('kickboxing');

Route::get('/bjj', function () {
    return view('bjj');
})->name('bjj');

Route::get('/schedule', 'ScheduleController@show')->name('schedule');

Route::get('/lang/{language}', '\\ied3vil\\LanguageSwitcher\\LanguageSwitcherController@setLanguage')
    ->name('setLanguage');

//Route::name('lang')
//    ->get('/lang/{language}')
//    ->uses('\\ied3vil\\LanguageSwitcher\\LanguageSwitcherController@setLanguage');