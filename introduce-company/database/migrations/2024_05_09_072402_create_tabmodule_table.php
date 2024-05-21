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
        Schema::create('tabmodule', function (Blueprint $table) {
            $table->decimal('TabModuleID',18,0);
            $table->integer('TabID');
            $table->integer('ModuleID');
            $table->integer('CacheTime');
            $table->string('TItle');
            $table->integer('ViewOrder');
            $table->string('Localtion');
            $table->string('AuthorizedEditRoles');
            $table->binary('IsPublic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabmodule');
    }
};
