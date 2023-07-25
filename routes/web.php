<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view(App::getLocale() . '/home');
})->name('home');

Route::get('/jujutsu', function () {
    return view(App::getLocale() . '/jujutsu');
})->name('jujutsu');

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

Route::get('/schedule', 'ScheduleController@show')->name('schedule');

Route::get('/lang/{language}', '\\ied3vil\\LanguageSwitcher\\LanguageSwitcherController@setLanguage')
    ->name('setLanguage');
