<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTables extends Migration
{
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->enum('day', ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'])->nullable();
            $table->string('start', 5)->nullable();
            $table->string('end', 5)->nullable();
            $table->enum('typeOfClass', ['jujutsu', 'bjj', 'misc'])->nullable();
        });

        Schema::create('schedule_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'schedule');
            $table->string('title', 200)->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('schedule_translations');
        Schema::dropIfExists('schedules');
    }
}
