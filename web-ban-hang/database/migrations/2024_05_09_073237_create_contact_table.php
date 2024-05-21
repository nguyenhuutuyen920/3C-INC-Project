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
        Schema::create('contact', function (Blueprint $table) {
            $table->increments('ContactID');
            $table->string('SenderName',250);
            $table->string('SenderEmail',250);
            $table->string('Sender',250);
            $table->string('ContactTitle',250);
            $table->longText('ContactContent');
            $table->string('ContactIP',250);
            $table->binary('IsApproved');
            $table->string('ApprovedBy',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
