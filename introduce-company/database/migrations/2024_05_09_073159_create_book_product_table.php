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
        Schema::create('book_product', function (Blueprint $table) {
            $table->increments('UserID');
            $table->string('FullName',250);
            $table->string('Email',250);
            $table->string('Tel',250);
            $table->string('AddressCus',250);
            $table->string('Address',250);
            $table->dateTime('CreateDate');
            $table->string('Method',250);
            $table->string('Transport',250);
            $table->string('messager',250);
            $table->string('InfoProduct',250);
            $table->integer('RoleID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_product');
    }
};
