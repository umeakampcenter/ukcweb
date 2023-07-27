<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $this->add("Öppen matta", "Open mat", "monday", "17:45", "18:45", "misc");
        $this->add("BJJ teknik", "BJJ technique", "monday", "18:45", "19:30", "bjj");
        $this->add("BJJ drill", "BJJ drill", "monday", "19:30", "20:15", "bjj");
        $this->add("Jujutsu nybörjare & avance", "Jujutsu beginners & advance", "monday", "20:15", "21:30", "jujutsu");

        $this->add("BJJ nybörjare", "BJJ beginners", "tuesday", "17:45", "19:15", "bjj");
        $this->add("BJJ teknik", "BJJ technique", "tuesday", "19.15", "20:00", "bjj");
        $this->add("Öppen matta", "Open mat", "tuesday", "20:00", "21:00", "misc");

        $this->add("Jujutsu nybörjare & avance", "Jujutsu beginners & advance", "wednesday", "18:00", "20:15", "jujutsu");
        $this->add("BJJ nybörjare", "BJJ beginners", "wednesday", "20:15", "21:45", "bjj");

        $this->add("BJJ sparring", "BJJ sparring", "thursday", "17:45", "18:45", "bjj");
        $this->add("BJJ teknik", "BJJ technique", "thursday", "18:45", "19:30", "bjj");
        $this->add("BJJ drill", "BJJ drill", "thursday", "19:30", "20:15", "bjj");

        $this->add("BJJ no-gi", "BJJ no-gi", "friday", "17:45", "19:15", "bjj");
        $this->add("Öppen matta", "Open mat", "friday", "19:15", "20:15", "misc");

        $this->add("BJJ tävlingsträning", "BJJ competition training", "saturday", "13:00", "15:00", "bjj");

        $this->add("BJJ barn 6-9 år (lek, grunder)", "BJJ children 6-9 years (play, basics)", "sunday", "13:00", "14:00", "bjj");
        $this->add("BJJ ungdomar 9-13 år (teknik, sparring)", "BJJ youths 9-13 years (technique, sparring)", "sunday", "14:30", "15:45", "bjj");
        $this->add("Självförsvar för tjejer och transpersoner", "Self defence for women and transgenders", "sunday", "16:15", "17:45", "misc");
        $this->add("Submission wrestling", "Submission wrestling", "sunday", "18:15", "19:45", "misc");
    }

    private function add(string $sv, string $en, string $day, string $start, string $end, string $typeOfClass)
    {
        $today = date("Y-m-d H:i:s");

        $id = DB::table('schedules')->insertGetId([
            "day" => $day,
            "start" => $start,
            "end" => $end,
            "typeOfClass" => $typeOfClass,
            "published" => 1,
            "created_at" => $today
        ]);

        DB::table('schedule_translations')->insert([
            [
                "schedule_id" => $id,
                "locale" => "sv",
                "active" => 1,
                "title" => $sv,
                "created_at" => $today
            ],
            [
                "schedule_id" => $id,
                "locale" => "en",
                "active" => 1,
                "title" => $en,
                "created_at" => $today
            ]
        ]);
    }
}
