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
        Schema::create('brand', function (Blueprint $table) {
            $table->increments('BrandID');
            $table->integer('TabID');
            $table->string('BrandAlias',250);
            $table->string('BrandImage',250);
            $table->string('BrandName',250);
            $table->string('BrandPagetitle',250);
            $table->string('BrandMetaKeyword',250);
            $table->string('BrandMetaDescription',250);
            $table->longText('BrandContent');
            $table->binary('IsTypical');
            $table->string('Weblink',250);
            $table->integer('ViewOrder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand');
    }
};
