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
        Schema::create('register', function (Blueprint $table) {
            $table->bigIncrements('RegisterID');
            $table->string('companyName', 250);
            $table->string('TransactionName', 250);
            $table->string('Address', 450);
            $table->string('Tel', 250);
            $table->string('Fax', 250);
            $table->string('Email', 250);
            $table->string('Website', 250);
            $table->string('TaxCode', 250);
            $table->string('ContactPerson', 250);
            $table->string('Position', 250);
            $table->string('Naketsector', 250);
            $table->longText('Content');
            $table->dateTime('RegisterDate');
            $table->binary('Approved'); 
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
