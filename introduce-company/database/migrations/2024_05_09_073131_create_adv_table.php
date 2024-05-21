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
        Schema::create('adv', function (Blueprint $table) {
            $table->increments('AdvID');
            $table->integer('TabID');
            $table->string('CompanyName',250);
            $table->string('Location',250);
            $table->string('AdvSource',250);
            $table->string('AdvDescription',250);
            $table->string('AdvLink',250);
            $table->integer('ViewOrder');
            $table->string('ClickType',250);
            $table->string('AdvType',250);
            $table->binary('IsApproved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adv');
    }
};
