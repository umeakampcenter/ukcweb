<?php

use App\Models\StylePage;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTables extends Migration
{
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            createDefaultTableFields($table);
            
            $table->integer('position')->unsigned()->nullable();

            // Note that this must be constrained() to actually add a FK
            $table->foreignIdFor(StylePage::class)->nullable()->constrained();
        });

        Schema::create('section_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'section');
            $table->string('title', 200)->nullable();
            $table->text('text')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_translations');
        Schema::dropIfExists('sections');
    }
}
