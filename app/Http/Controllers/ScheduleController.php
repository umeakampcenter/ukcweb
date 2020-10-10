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
                        "title" => __("schedule.jujutsu"),
                        "start" => "17:30",
                        "end" => "18:55",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.kickboxingAdvance"),
                        "start" => "19:15",
                        "end" => "20:20",
                        "class" => "kickboxing"
                    ],
                    [
                        "title" => __("schedule.kickboxingBeginner"),
                        "start" => "20:40",
                        "end" => "21:45",
                        "class" => "kickboxing"
                    ]
                ],
                __("schedule.tuesday") => [
                    [
                        "title" => __("schedule.jujutsu"),
                        "start" => "17:15",
                        "end" => "18:20",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "18:40",
                        "end" => "19:40",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "20:00",
                        "end" => "21:00",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.wednesday") => [
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "17:30",
                        "end" => "18:30",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "18:50",
                        "end" => "19:50",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.kickboxing"),
                        "start" => "20:10",
                        "end" => "21:30",
                        "class" => "kickboxing"
                    ]
                ],
                __("schedule.thursday") => [
                    [
                        "title" => __("schedule.jujutsu"),
                        "start" => "17:15",
                        "end" => "18:20",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "18:40",
                        "end" => "20:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "20:20",
                        "end" => "21:20",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.friday") => [
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "17:30",
                        "end" => "18:40",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "19:00",
                        "end" => "20:00",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.saturday") => [
                    [
                        "title" => __("schedule.bjjOpen"),
                        "start" => "17:30",
                        "end" => "18:40",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.sunday") => [
                    [
                        "title" => __("schedule.bjjOpen"),
                        "start" => "13:00",
                        "end" => "14:30",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.selfDefence"),
                        "start" => "16:00",
                        "end" => "17:30",
                        "class" => "misc"
                    ],
                    [
                        "title" => __("schedule.kickboxingOpen"),
                        "start" => "19:30",
                        "end" => "20:30",
                        "class" => "kickboxing"
                    ]
                ]
            ]
        ]);
    }
}
