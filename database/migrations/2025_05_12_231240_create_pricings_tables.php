<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingsTables extends Migration
{
    public function up()
    {
        Schema::create('pricings', function (Blueprint $table) {
            createDefaultTableFields($table);
        });

        Schema::create('pricing_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'pricing');
            $table->string('title', 200)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing_translations');
        Schema::dropIfExists('pricings');
    }
}
