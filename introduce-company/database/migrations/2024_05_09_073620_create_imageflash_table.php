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
        Schema::create('imageflash', function (Blueprint $table) {
            $table->increments('TabModuleID');
            $table->string('Image',250);
            $table->string('Flash',250);
            $table->string('Title',250);
            $table->string('Description',250);
            $table->string('Link',250);
            $table->binary('IsImage');
            $table->binary('ViewOrder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imageflash');
    }
};
