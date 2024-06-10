<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automation', function (Blueprint $table) {
            $table->increments('AutomationID');
            $table->integer('FieldID')->unsigned();
            $table->string('AutomationTitle',255);
            $table->string('AutomationContent',255);
            $table->string('Technicaldata',255);
            $table->string('RelatedProduct',255);
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
        Schema::dropIfExists('automation');
    }
}
