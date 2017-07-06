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

Route::get('/', 'FrontController@show');

Route::get('/jujutsu', function () {
    return view('jujutsu');
});

Route::get('/kickboxing', function () {
    return view('kickboxing');
});

Route::get('/bjj', function () {
    return view('bjj');
});

Route::get('/schedule', 'ScheduleController@show');
