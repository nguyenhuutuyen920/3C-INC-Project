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
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('FeedBackID');
            $table->string('Email',250);
            $table->string('Title',250);
            $table->string('FeedbackContent',250);
            $table->string('FeedBackIP',250);
            $table->string('FeedBackDate',250);
            $table->binary('IsApproved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
