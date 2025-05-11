<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTables extends Migration
{
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            createDefaultTableFields($table);
        });

        Schema::create('board_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'board');
            $table->string('title', 200)->nullable();
            $table->text('text')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('board_translations');
        Schema::dropIfExists('boards');
    }
}
