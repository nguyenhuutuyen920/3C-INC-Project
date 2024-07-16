<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('NewsID');
            $table->string('NewsAlias',250);
            $table->string('NewsMetaKeyword',250);
            $table->string('NewsMetaDescription',250);
            $table->string('NewsTitle',250);
            $table->string('NewsImage',250);
            $table->longText('Abstract');
            $table->longText('NewsContent');
            $table->string('NewsSource',250);
            $table->string('RelatedNews',250)->nullable();
            $table->decimal('ViewOrder',18,0)->nullable();
            $table->boolean('IsHotNews')->default(false);
            $table->boolean('IsTypical')->default(false);
            $table->boolean('IsApproved')->default(false);
            $table->string('ApprovedBy',250)->nullable();
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
        Schema::dropIfExists('news');
    }
}
