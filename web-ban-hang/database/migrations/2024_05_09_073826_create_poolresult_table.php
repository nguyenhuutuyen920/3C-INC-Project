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
        Schema::create('poolresult', function (Blueprint $table) {
            $table->increments('PoolResultID');
            $table->integer('PoolToppicID');
            $table->integer('ProductID');
            $table->string('PoolQuestion',250);
            $table->integer('ViewTime');
            $table->string('PoolIP',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poolresult');
    }
};
