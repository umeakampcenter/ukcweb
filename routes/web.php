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

Route::get('/schedule', function () {
    return view('schedule', [
        "events" => [
            __("schedule.monday") => [
                [
                    "title" => __("schedule.jujutsu"),
                    "start" => "17:30",
                    "end" => "19:00"
                ],
                [
                    "title" => __("schedule.kickboxingAdvance"),
                    "start" => "19:15",
                    "end" => "20:30"
                ],
                [
                    "title" => __("schedule.kickboxingBeginner"),
                    "start" => "20:30",
                    "end" => "21:45"
                ]
            ],
            __("schedule.tuesday") => [
                [
                    "title" => __("schedule.bjjMix"),
                    "start" => "18:30",
                    "end" => "20:00"
                ],
                [
                    "title" => __("schedule.bjjAdvance"),
                    "start" => "20:00",
                    "end" => "21:15"
                ]
            ],
            __("schedule.wednesday") => [
                [
                    "title" => __("schedule.jujutsu"),
                    "start" => "17:30",
                    "end" => "19:00"
                ],
                [
                    "title" => __("schedule.kickboxingAdvance"),
                    "start" => "19:15",
                    "end" => "20:30"
                ],
                [
                    "title" => __("schedule.kickboxingBeginner"),
                    "start" => "20:30",
                    "end" => "21:45"
                ]
            ],
            __("schedule.thursday") => [
                [
                    "title" => __("schedule.jujutsu"),
                    "start" => "17:15",
                    "end" => "18:30"
                ],
                [
                    "title" => __("schedule.bjjMix"),
                    "start" => "18:30",
                    "end" => "20:00"
                ],
                [
                    "title" => __("schedule.bjjAdvance"),
                    "start" => "20:00",
                    "end" => "21:15"
                ]
            ],
            __("schedule.friday") => [
                [
                    "title" => __("schedule.bjjOpen"),
                    "start" => "17:30",
                    "end" => "19:30"
                ]
            ],
            __("schedule.saturday") => [
                [
                    "title" => __("schedule.bjjComp"),
                    "start" => "11:00",
                    "end" => "12:30"
                ]
            ],
            __("schedule.sunday") => [
                [
                    "title" => __("schedule.bjjSw"),
                    "start" => "12:00",
                    "end" => "13:30"
                ],
                [
                    "title" => __("schedule.bjjSelfDefence"),
                    "start" => "16:00",
                    "end" => "17:30"
                ],
                [
                    "title" => __("schedule.flexibility"),
                    "start" => "17:45",
                    "end" => "19:15"
                ],
                [
                    "title" => __("kickboxingOpen"),
                    "start" => "19:30",
                    "end" => "20:30"
                ]
            ]
        ]
    ]);
});