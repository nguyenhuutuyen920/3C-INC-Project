<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('ProjectID');
            $table->string('ProjectTitle',250);
            $table->string('BiddingPackage',250);
            $table->string('ConstructionName',250);
            $table->string('ProjectContent',250);
            $table->string('ProjectImage',250);
            $table->string('Investors',250);
            $table->string('PricePackage',250);
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
        Schema::dropIfExists('project');
    }
}
