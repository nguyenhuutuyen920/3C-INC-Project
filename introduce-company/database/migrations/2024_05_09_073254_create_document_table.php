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
        Schema::create('document', function (Blueprint $table) {
            $table->increments('DocumentID');
            $table->integer('TabID');
            $table->string('DocumentAlias',250);
            $table->string('DocumentName',250);
            $table->string('DocumentImage',250);
            $table->string('DocumentPageTitle',250);
            $table->string('MetaKeyword',250);
            $table->string('MetaDescription',250);
            $table->string('DocumentPath',250);
            $table->binary('IsHotDocument');
            $table->binary('IsApproved');
            $table->decimal('ViewTime',18,0);
            $table->integer('ViewOrder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document');
    }
};
