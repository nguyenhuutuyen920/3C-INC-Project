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

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
