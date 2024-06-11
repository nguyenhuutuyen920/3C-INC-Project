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
            $table->string('ProductPageTitle', 250);
            $table->string('ProductMetaKeyword', 250);
            $table->string('ProductMetaDescription', 250);
            $table->string('ProductImage', 250);
            $table->float('CurentPrice');
            $table->float('OldPrice');
            $table->boolean('IsShowprice');
            $table->float('Discount');
            $table->string('StoreStatus', 250);
            $table->longText('Abstract');
            $table->longText('ProductContent');
            $table->longText('OtherContent');
            $table->string('Promotion', 250);
            $table->longText('TransportInformation');
            $table->string('RelatedNews', 150);
            $table->string('RelatedProduct', 150);
            $table->binary('ViewOder');
            $table->boolean('IsTypical');
            $table->boolean('IsHotProduct');
            $table->boolean('IsPromotion');
            $table->boolean('IsBestSeller');
            $table->boolean('IsWeeklyProduct');
            $table->boolean('IsApproved');
            $table->string('ApprovedBy', 50);
            $table->integer('ViewTime');
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
