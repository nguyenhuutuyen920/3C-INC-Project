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
        Schema::create('register_book', function (Blueprint $table) {
            $table->increments('UserID');
            $table->string('email',250);
            $table->string('pwd',250);
            $table->string('Fullname',50);
            $table->string('Sex',50);
            $table->string('Birthday',50);
            $table->string('Tel',50);
            $table->string('Mobile',50);
            $table->string('Address',50);
            $table->string('Fax',50);
            $table->dateTime('DegDate');
            $table->string('City',50);
            $table->string('Province',50);
            $table->binary('Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_book');
    }
};
