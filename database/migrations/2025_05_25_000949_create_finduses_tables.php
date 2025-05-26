<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFindUsesTables extends Migration
{
    public function up()
    {
        Schema::create('finduses', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('googleMaps', 400)->nullable();
            $table->string('streetView', 400)->nullable();
        });

        Schema::create('findus_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'findus');
            $table->string('title', 200)->nullable();
            $table->text('text')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('findus_translations');
        Schema::dropIfExists('finduses');
    }
}
