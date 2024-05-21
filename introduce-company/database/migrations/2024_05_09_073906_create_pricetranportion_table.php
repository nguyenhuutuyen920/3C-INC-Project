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
        Schema::create('pricetranportion', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Weight',250);
            $table->decimal('PriceTra1',18,0);
            $table->decimal('PriceTra2',18,0);
            $table->decimal('PriceTra3',18,0);
            $table->decimal('WeightDau',18,0);
            $table->decimal('WeightCuoi',18,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricetranportion');
    }
};
