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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('CategoryID');
            $table->unsignedInteger('CategoryParentID')->default(0); 
            $table->string('CategoryName', 250)->unique();
            $table->string('CategoryAlias', 250);
            $table->string('CategoryPageTitle', 250);
            $table->string('CategoryMetaKeyword', 250);
            $table->string('CategoryMetaDescription', 250);
            $table->integer('ViewOrder');
            $table->binary('IsVisible');
            $table->binary('IsTypical');
            $table->string('TypicalImage', 150);
            $table->timestamps();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->unsignedInteger('CategoryParentID')->nullable()->change(); // Hoặc ->default(0)->change();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
