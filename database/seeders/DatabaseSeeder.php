<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ScheduleSeeder::class,
            FrontPageSeeder::class,
            BoardSeeder::class,
            PricingSeeder::class,
            PageSeeder::class
        ]);
    }
}
