<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTables extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('googleMaps', 400)->nullable();
            $table->string('streetView', 400)->nullable();
        });

        Schema::create('location_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'location');
            $table->string('title', 200)->nullable();
            $table->text('text')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('location_translations');
        Schema::dropIfExists('locations');
    }
}
