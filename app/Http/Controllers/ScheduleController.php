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
            ->whereNull('schedules.deleted_at')
            ->where('schedules.published', 1)
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
                __("main.monday") => $events['monday'],
                __("main.tuesday") => $events['tuesday'],
                __("main.wednesday") => $events['wednesday'],
                __("main.thursday") => $events['thursday'],
                __("main.friday") => $events['friday'],
                __("main.saturday") => $events['saturday'],
                __("main.sunday") => $events['sunday']
            ]
        ]);
    }
}
