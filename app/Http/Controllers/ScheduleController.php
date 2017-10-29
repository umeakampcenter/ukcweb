<?php

namespace App\Http\Controllers;

class ScheduleController extends Controller
{
    public function show()
    {
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
                        "title" => __("schedule.booked"),
                        "start" => "11:30",
                        "end" => "12:15",
                        "class" => "misc"
                    ],
                    [
                        "title" => __("schedule.jujutsuBjjOpen"),
                        "start" => "17:15",
                        "end" => "18:30",
                        "class" => "misc"
                    ],
                    [
                        "title" => __("schedule.bjjMix"),
                        "start" => "18:30",
                        "end" => "20:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjAdvance"),
                        "start" => "20:00",
                        "end" => "21:15",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.wednesday") => [

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
                        "title" => __("schedule.bjjMix"),
                        "start" => "18:30",
                        "end" => "20:00",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjAdvance"),
                        "start" => "20:00",
                        "end" => "21:15",
                        "class" => "bjj"
                    ]
                ],
                __("schedule.friday") => [
                    [
                        "title" => __("schedule.bjjOpen"),
                        "start" => "17:30",
                        "end" => "19:30",
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
                        "start" => "12:00",
                        "end" => "13:30",
                        "class" => "bjj"
                    ],
                    [
                        "title" => __("schedule.bjjSelfDefence"),
                        "start" => "16:00",
                        "end" => "17:30",
                        "class" => "misc"
                    ],
                    [
                        "title" => __("schedule.flexibility"),
                        "start" => "17:45",
                        "end" => "19:15",
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
