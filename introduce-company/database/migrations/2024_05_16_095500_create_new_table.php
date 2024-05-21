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
        Schema::create('news', function (Blueprint $table) {
            $table->increments('NewsID');
            $table->integer('NewsCategoryID');
            $table->string('NewsImage',250);
            $table->string('NewsAlias',250);
            $table->string('NewsMetaKeyword',250);
            $table->string('NewsMetaDescription',250);
            $table->string('NewsTitle',250);
            $table->longText('Abstract');
            $table->longText('NewsContent');
            $table->string('NewsSource',250);
            $table->integer('ViewTime');
            $table->string('RelatedNews',250);
            $table->string('RelatedProduct',250);
            $table->decimal('ViewOrder',18,0);
            $table->binary('IsHotNews');
            $table->binary('IsTypical');
            $table->binary('IsApproved');
            $table->string('ApprovedBy',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
