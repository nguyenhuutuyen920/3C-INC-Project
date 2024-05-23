<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->decimal('ServiceID',18,0);
            $table->integer('TabID');
            $table->string('ServiceAlias',250);
            $table->string('ServiceTitle',250);
            $table->string('ServicePageTitle',250);
            $table->string('ServiceMetaKeyword',250);
            $table->string('ServiceDescription',250);
            $table->string('ServiceImage',250);
            $table->string('Abstract',250);
            $table->longText('ServiceContent');
            $table->binary('IsTypical');
            $table->binary('IsViewAbout');
            $table->decimal('ViewOrder',18,0);
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
        Schema::dropIfExists('services');
    }
}
