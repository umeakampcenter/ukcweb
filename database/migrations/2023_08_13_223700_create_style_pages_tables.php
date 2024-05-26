<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylePagesTables extends Migration
{
    public function up()
    {
        Schema::create('style_pages', function (Blueprint $table) {
            // Note that the title is not defined here since it's translatable.
            createDefaultTableFields($table);
            $table->string('linkPath', 30)->nullable();
        });

        Schema::create('style_page_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'style_page');
            $table->string('title', 200)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('style_page_translations');
        Schema::dropIfExists('style_pages');
    }
}
