<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('introduces', function (Blueprint $table) {
            $table->increments('IntroduceID');
            $table->integer('TabID');
            $table->string('IntroducePageTitle',250);
            $table->string('IntroduceAlias',250);
            $table->string('IntroduceMetaKeyword',250);
            $table->string('IntroduceMetaDescription',250);
            $table->string('IntroduceImage',250);
            $table->string('Title',250);
            $table->longText('IntroduceAbtract');
            $table->longText('IntroduceContent');
            $table->integer('ViewOrder');
            $table->binary('IsTypical');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('introduces');
    }
};
