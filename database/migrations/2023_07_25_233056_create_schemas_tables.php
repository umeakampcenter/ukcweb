<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchemasTables extends Migration
{
    public function up()
    {
        Schema::create('schemas', function (Blueprint $table) {
            createDefaultTableFields($table);

            $table->string('start', 5)->nullable();
            $table->string('end', 5)->nullable();
            $table->enum('typeOfClass', ['jujutsu', 'bjj', 'misc'])->nullable();
        });

        Schema::create('schema_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'schema');
            $table->string('title', 200)->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('schema_translations');
        Schema::dropIfExists('schemas');
    }
}
