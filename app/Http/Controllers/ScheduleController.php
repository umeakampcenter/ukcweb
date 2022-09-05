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
                        "title" => __("schedule.open"),
                        "start" => "17:45",
                        "end" => "18:45",
                        "class" => "misc"
                    ],
                    [
                        "title" => __("schedule.bjjTech"),
                        "start" => "18:45",
                        "end" => "19:30",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjDrill"),
                        "start" => "19:30",
                        "end" => "20:15",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.jujutsu"),
                        "start" => "20:15",
                        "end" => "21:30",
                        "class" => "jujutsu"
                    ],
                ],
                __("schedule.tuesday") => [
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "17:45",
                        "end" => "19:15",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjTech"),
                        "start" => "19:15",
                        "end" => "20:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.open"),
                        "start" => "20:00",
                        "end" => "21:00",
                        "class" => "misc"
                    ]
                ],
                __("schedule.wednesday") => [
                    [
                        "title" => __("schedule.jujutsu"),
                        "start" => "18:00",
                        "end" => "20:15",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "20:15",
                        "end" => "21:45",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.thursday") => [
                    [
                        "title" => __("schedule.bjjSparring"),
                        "start" => "17:45",
                        "end" => "18:45",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjTech"),
                        "start" => "18:45",
                        "end" => "19:30",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjDrill"),
                        "start" => "19:30",
                        "end" => "20:15",
                        "class" => "misc"
                    ]
                ],
                __("schedule.friday") => [
                    [
                        "title" => __("schedule.bjjNogi"),
                        "start" => "17:45",
                        "end" => "19:15",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.open"),
                        "start" => "19:15",
                        "end" => "20:15",
                        "class" => "misc"
                    ]
                ],
                __("schedule.saturday") => [
                    [
                        "title" => __("schedule.bjjComp"),
                        "start" => "11:00",
                        "end" => "13:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.open"),
                        "start" => "13:00",
                        "end" => "14:30",
                        "class" => "misc"
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
                    ],
                    [
                        "title" => __("schedule.sw"),
                        "start" => "18:00",
                        "end" => "19:30",
                        "class" => "misc"
                    ],
                ]
            ]
        ]);
    }
}
