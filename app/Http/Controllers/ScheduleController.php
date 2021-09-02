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
                        "title" => __("schedule.bjjSw"),
                        "start" => "17:45",
                        "end" => "19:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.jujutsuBegin"),
                        "start" => "19:15",
                        "end" => "20:30",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.jujutsuAdvance"),
                        "start" => "20:45",
                        "end" => "21:45",
                        "class" => "jujutsu"
                    ]
                ],
                __("schedule.tuesday") => [
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "18:00",
                        "end" => "19:15",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "19:30",
                        "end" => "20:45",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.open"),
                        "start" => "21:00",
                        "end" => "21:45",
                        "class" => "misc"
                    ]
                ],
                __("schedule.wednesday") => [
                    [
                        "title" => __("schedule.jujutsuBegin"),
                        "start" => "17:45",
                        "end" => "19:00",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.jujutsuAdvance"),
                        "start" => "19:15",
                        "end" => "20:30",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.open"),
                        "start" => "20:45",
                        "end" => "21:30",
                        "class" => "misc"
                    ]
                ],
                __("schedule.thursday") => [
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "18:00",
                        "end" => "19:15",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "19:30",
                        "end" => "20:45",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.open"),
                        "start" => "21:00",
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
