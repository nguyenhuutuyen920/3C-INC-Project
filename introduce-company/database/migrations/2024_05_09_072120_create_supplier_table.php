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
        Schema::create('supplier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SupplierAlias',250);
            $table->string('SupplierMetaKeyword',250);
            $table->string('SupplierMetaDescription',250);
            $table->string('SupplierName',250);
            $table->string('SupplierImage',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier');
    }
};
