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
            $table->id();
            $table->string('username')->unique();
            $table->foreignId('role_id')->default(3);
            $table->string('email');
            $table->string('nim')-> nullable();//unique();
            $table->string('kelamin')->nullable();
            $table->string('rayon_id');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken() ->nullable(); //untuk semantara di null aja biar gampang nge faker nyha
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
