<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->increments('DeviceID');
            $table->integer('CategoryID');
            $table->string('DeviceTitle',255);
            $table->string('DeviceImage',255);
            $table->string('DeviceContent',255);
            $table->longText('Technicaldata');
            $table->string('RelatedProduct',255);
            $table->integer('hienThiTuDongHoa');
            $table->integer('HienThiVienThongXayLap');
            $table->integer('HienThiThiNghiemDoLuong');
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
        Schema::dropIfExists('devices');
    }
}
