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
        Schema::create('material', function (Blueprint $table) {
            $table->increments('MaterialID');
            $table->char('Lang',2);
            $table->string('MaterialAlias',250);
            $table->string('MaterialMetaKeyword',250);
            $table->string('MaterialMetaDescription',250);
            $table->string('MaterialName',250);
            $table->string('MaterialImage',250);
            $table->integer('ViewOrder');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material');
    }
};
