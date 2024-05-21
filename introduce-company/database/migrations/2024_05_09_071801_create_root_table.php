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
        Schema::create('root', function (Blueprint $table) {
            $table->id('TabID');
            $table->string('ParentID',250);
            $table->string('TabName',250);
            $table->string('TabAlisa',250);
            $table->string('name',250);
            $table->integer('menuid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('root');
    }
};
