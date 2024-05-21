<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('UserID');
            $table->string('Email',100)->unique();
            $table->timestamp('email_verified_at')->nullable(); // Thời điểm xác minh email
            $table->string('FullName',100);
            $table->string('Sex',100);
            $table->string('Mobile',100);
            $table->string('Address',250);
            $table->string('Password',200);
            $table->boolean('IsActive')->default(false);
            $table->string('ActiveCode')->nullable(); // Cho phép nullable
            $table->boolean('IsSystemAdmin')->default(false);
            $table->timestamp('LastLogin')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
