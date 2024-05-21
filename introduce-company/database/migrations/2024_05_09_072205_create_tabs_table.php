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
        Schema::create('tabs', function (Blueprint $table) {
            $table->increments('TabID');
            $table->string('TabName',250);
            $table->string('TabAlias',250);
            $table->string('TabTitle',250);
            $table->string('Description',250);
            $table->string('TabImage',250);
            $table->binary('IsVisible');
            $table->binary('ParentID');
            $table->binary('AllowDelete');
            $table->binary('IsDelete');
            $table->integer('ViewOrder');
            $table->char('Lang',2);
            $table->string('AuthorizedRoles');
            $table->string('IsAdmin');
            $table->string('Module');
            $table->string('IsTypical');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab');
    }
};
