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
        Schema::create('analytic', function (Blueprint $table) {
            $table->increments('AnalyticID');
            $table->string('URL',250);
            $table->dateTime('LastRequestDate');
            $table->decimal('RequestTime',18,0);
            $table->string('IP',250);
            $table->string('Browser',250);
            $table->binary('IsCrawler');
            $table->string('DomainName',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytic');
    }
};
