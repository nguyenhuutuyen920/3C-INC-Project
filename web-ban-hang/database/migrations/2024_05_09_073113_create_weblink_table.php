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
        Schema::create('weblink', function (Blueprint $table) {
            $table->increments('WeblinkID');
            $table->string('CompanyName',250);
            $table->string('Weblink',250);
            $table->integer('Vieworder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weblink');
    }
};
