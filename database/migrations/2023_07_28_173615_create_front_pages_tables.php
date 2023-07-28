<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontPagesTables extends Migration
{
    public function up()
    {
        Schema::create('front_pages', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
        });

        Schema::create('front_page_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'front_page');
            $table->text('intro')->nullable();
        });
    }

    public function down()
    {
        
        Schema::dropIfExists('front_page_translations');
        Schema::dropIfExists('front_pages');
    }
}
