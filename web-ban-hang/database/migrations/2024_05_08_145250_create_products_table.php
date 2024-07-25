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
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('ProductID');
            $table->unsignedBigInteger('CategoryParentID');
            $table->string('SupplierID', 250);
            $table->string('ProductCode', 250);
            $table->string('ProductName', 250);
            $table->string('ProductAlias', 250);
            $table->string('ProductKeyword', 250);
            $table->string('ProductImage', 250);
            $table->integer('CurentPrice');
            $table->integer('OldPrice');
            $table->boolean('IsShowprice');
            $table->integer('Discount');
            $table->string('StoreStatus', 250);
            $table->longText('Abstract');
            $table->longText('ProductContent');
            $table->longText('OtherContent');
            $table->string('Promotion', 250);
            $table->string('RelatedProduct', 150);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
