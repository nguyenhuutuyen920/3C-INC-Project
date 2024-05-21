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
        Schema::create('faq', function (Blueprint $table) {
            $table->increments('FAQID');
            $table->integer('TabID');
            $table->string('FAQAlias',250);
            $table->string('PageTitle',250);
            $table->string('MetaKeyword',250);
            $table->string('MetaDescription',250);
            $table->string('Question',250);
            $table->longText('Answer');
            $table->string('Author',250);
            $table->decimal('ViewOrder',18,0);
            $table->binary('IsApproved');
            $table->decimal('ViewTime',18,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq');
    }
};
