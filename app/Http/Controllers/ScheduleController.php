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
                        "end" => "19:00",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.kickboxingAdvance"),
                        "start" => "19:15",
                        "end" => "20:30",
                        "class" => "kickboxing"
                    ],
                    [
                        "title" => __("schedule.kickboxingBeginner"),
                        "start" => "20:30",
                        "end" => "21:45",
                        "class" => "kickboxing"
                    ]
                ],
                __("schedule.tuesday") => [
                    [
                        "title" => __("schedule.jujutsuBjjOpen"),
                        "start" => "17:15",
                        "end" => "18:30",
                        "class" => "bjjAndJujutsu"
                    ],
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "18:30",
                        "end" => "19:45",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "19:45",
                        "end" => "21:00",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.wednesday") => [
                    [
                        "title" => __("schedule.bjjBegin"),
                        "start" => "17:30",
                        "end" => "19:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.kickboxingAdvance"),
                        "start" => "19:15",
                        "end" => "20:30",
                        "class" => "kickboxing"
                    ],
                    [
                        "title" => __("schedule.kickboxingBeginner"),
                        "start" => "20:30",
                        "end" => "21:45",
                        "class" => "kickboxing"
                    ]
                ],
                __("schedule.thursday") => [
                    [
                        "title" => __("schedule.jujutsu"),
                        "start" => "17:15",
                        "end" => "18:30",
                        "class" => "jujutsu"
                    ],
                    [
                        "title" => __("schedule.bjjIntermediateAdvance"),
                        "start" => "18:30",
                        "end" => "20:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjSpecific"),
                        "start" => "20:00",
                        "end" => "20:30",
                        "class" => "bjj small"
                    ],
                    [
                        "title" => __("schedule.bjjOpen"),
                        "start" => "20:30",
                        "end" => "22:00",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.friday") => [
                    [
                        "title" => __("schedule.bjjSw"),
                        "start" => "17:30",
                        "end" => "19:00",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.saturday") => [
                    [
                        "title" => __("schedule.bjjComp"),
                        "start" => "11:00",
                        "end" => "12:30",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.sunday") => [
                    [
                        "title" => __("schedule.bjjSw"),
                        "start" => "13:00",
                        "end" => "14:30",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjSelfDefence"),
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
