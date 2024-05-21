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
        Schema::create('hotline', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Hanoi',250);
            $table->string('Hotline1',250);
            $table->string('HCM',250);
            $table->string('Hotline2',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotline');
    }
};
