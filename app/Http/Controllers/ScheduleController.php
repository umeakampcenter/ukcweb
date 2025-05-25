<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;

class ScheduleController extends Controller
{
    public function show()
    {
        $scheduledClasses = DB::table('schedules')
            ->join('schedule_translations', function (JoinClause $join) {
                $join->on('schedules.id', '=', 'schedule_translations.schedule_id')
                    ->where('schedule_translations.locale', '=', App::currentLocale());
            })
            ->select('schedule_translations.title as title', 'schedules.day as day', 'schedules.start as start', 'schedules.end as end', 'schedules.typeOfClass as typeOfClass')
            ->orderBy('start')
            ->get();

        $events = [
            'monday' => [],
            'tuesday' => [],
            'wednesday' => [],
            'thursday' => [],
            'friday' => [],
            'saturday' => [],
            'sunday' => []
        ];

        foreach ($scheduledClasses as $scheduledClass) {
            $arr = json_decode(json_encode($scheduledClass), true);
            $events[$arr['day']][] = $arr;
        }

        return view('schedule', [
            "title" => App::currentLocale() === 'sv' ? 'Schema' : 'Schedule',
            "events" => [
                __("schedule.monday") => $events['monday'],
                __("schedule.tuesday") => $events['tuesday'],
                __("schedule.wednesday") => $events['wednesday'],
                __("schedule.thursday") => $events['thursday'],
                __("schedule.friday") => $events['friday'],
                __("schedule.saturday") => $events['saturday'],
                __("schedule.sunday") => $events['sunday']
            ]
        ]);
    }
}
