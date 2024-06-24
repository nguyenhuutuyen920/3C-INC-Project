<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices_book', function (Blueprint $table) {
            $table->increments('Device_Book_ID');
            $table->integer('DeviceID')->unsigned();
            $table->string('DeviceName');
            $table->string('DeviceImage');
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
        Schema::dropIfExists('devices_book');
    }
}
