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
        Schema::create('service', function (Blueprint $table) {
            $table->decimal('ServiceID',18,0);
            $table->integer('TabID');
            $table->string('ServiceAlias',250);
            $table->string('ServiceTitle',250);
            $table->string('ServicePageTitle',250);
            $table->string('ServiceMetaKeyword',250);
            $table->string('ServiceDescription',250);
            $table->string('ServiceImage',250);
            $table->string('Abstract',250);
            $table->longText('ServiceContent');
            $table->binary('IsTypical');
            $table->binary('IsViewAbout');
            $table->decimal('ViewOrder',18,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
