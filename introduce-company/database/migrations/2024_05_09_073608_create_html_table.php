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
        Schema::create('html', function (Blueprint $table) {
            $table->increments('TabModuleID');
            $table->string('HTMLTitle',250);
            $table->string('HTMLMetaKeyword',250);
            $table->string('HTMLDescription',250);
            $table->longText('HTMlContent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('html');
    }
};
