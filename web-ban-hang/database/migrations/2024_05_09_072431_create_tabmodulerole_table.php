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
        Schema::create('tabmodulerole', function (Blueprint $table) {
            $table->increments('TabModuleROleID');
            $table->decimal('TabModuleID',18,0);
            $table->integer('RoleID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabmodulerole');
    }
};
