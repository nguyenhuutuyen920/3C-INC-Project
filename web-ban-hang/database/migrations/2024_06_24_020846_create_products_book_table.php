<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_book', function (Blueprint $table) {
            $table->increments('Product_Book_ID');
            $table->integer('ProductID')->unsigned();
            $table->string('ProductName');
            $table->string('ProductImage');
            $table->string('SenderEmail');
            $table->string('PhoneNumber');
            $table->string('SenderName');
            $table->string('Quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_book');
    }
}
