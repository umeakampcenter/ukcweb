<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Log;

class ScheduleController extends Controller
{
    public function show()
    {
//        $laravel = app();
//        $version = $laravel::VERSION;
//        Log::error($version);
        return view('schedule', [
            "events" => [
                __("schedule.monday") => [
                    [
                        "title" => __("schedule.bjjIntermediate"),
                        "start" => "17:45",
                        "end" => "19:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.jujutsu"),
                        "start" => "19:15",
                        "end" => "20:30",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.bjjSparring"),
                        "start" => "20:45",
                        "end" => "21:45",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.tuesday") => [
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "17:45",
                        "end" => "19:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjAdvance"),
                        "start" => "19:15",
                        "end" => "20:30",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjDrill"),
                        "start" => "20:45",
                        "end" => "21:45",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.wednesday") => [
                    [
                        "title" => __("schedule.jujutsu"),
                        "start" => "17:45",
                        "end" => "19:00",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.jujutsuSparring"),
                        "start" => "19:15",
                        "end" => "20:30",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "20:45",
                        "end" => "22:00",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.thursday") => [
                    [
                        "title" => __("schedule.bjjAdvance"),
                        "start" => "17:45",
                        "end" => "19:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediate"),
                        "start" => "19:15",
                        "end" => "20:30",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.open"),
                        "start" => "20:45",
                        "end" => "21:45",
                        "class" => "misc"
                    ]
                ],
                __("schedule.friday") => [
                    [
                        "title" => __("schedule.bjjSw"),
                        "start" => "17:45",
                        "end" => "19:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.open"),
                        "start" => "19:15",
                        "end" => "20:00",
                        "class" => "misc"
                    ]
                ],
                __("schedule.saturday") => [
                    [
                        "title" => __("schedule.bjjComp"),
                        "start" => "11:00",
                        "end" => "13:00",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.sunday") => [
                    [
                        "title" => __("schedule.bjjChildren"),
                        "start" => "14:00",
                        "end" => "15:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.selfDefence"),
                        "start" => "16:00",
                        "end" => "17:30",
                        "class" => "misc"
                    ]
                ]
            ]
        ]);
    }
}
