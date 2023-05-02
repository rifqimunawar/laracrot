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
          
          // hal yang bersifat pribadi
          $table->string('name'); //public
          $table->string('nim'); //->unique();
          $table->string('img')->default('profile.png');
          $table->string('alamat')->nullable()->dafault('uninus pride');
          $table->string('wa')->nullable();
          $table->string('twitter')->nullable();
          $table->string('fb')->nullable();
          $table->string('ig')->nullable();
          $table->string('kelamin')->nullable(); //public
          
          // hal yang berkaitan dengan account 
          $table->id();
          $table->foreignId('role_id')->default(3);
          $table->string('username')->unique(); //public
          $table->string('slug');
          $table->string('email')->nullable();
          $table->string('password');
          $table->timestamp('email_verified_at')->nullable();
          $table->rememberToken() ->nullable(); //untuk semantara di null aja biar gampang nge faker nyha
          $table->timestamps();

          // hal yang berkaitan dngn orgn 
          $table->string('rayon_id'); //public
          $table->string('kaderisasi')->default('Belum Mapaba'); //public

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
