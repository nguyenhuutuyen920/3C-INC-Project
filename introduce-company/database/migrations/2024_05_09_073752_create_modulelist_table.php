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
        Schema::create('modulelist', function (Blueprint $table) {
            $table->increments('ModuleListID');
            $table->string('ModuleKey',250);
            $table->string('ModuleName',250);
            $table->integer('ParentModuleListID');
            $table->integer('ViewOrder');
            $table->binary('Visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulelist');
    }
};
