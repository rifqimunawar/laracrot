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
            $table->string('nim')->unique();
            $table->string('img')->default('user.png');
            $table->string('provinces')->nullable();
            $table->string('cities')->nullable();
            $table->string('districts')->nullable();
            $table->string('villages')->nullable();
            $table->string('alamat')->nullable();
            $table->string('bio', 100)->default('tangan terkepan dan maju kemuka!!!');
            $table->string('t_lahir', 20)->nullable();
            $table->string('ttl', 20)->nullable();
            $table->string('hobi', 15)->nullable();
            $table->string('sma', 50)->nullable();
            $table->string('thn_lulus', 10)->nullable();
            $table->string('thn_kuliah', 10)->nullable();

            $table->string('wa', 20)->nullable();
            $table->string('twitter')->nullable();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('kelamin')->nullable(); //public

            // hal yang berkaitan dengan account 
            $table->id();
            $table->foreignId('role_id')->default(4);
            $table->string('username')->unique(); //public
            $table->string('slug');
            $table->string('email')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable(); //untuk semantara di null aja biar gampang nge faker nyha
            $table->timestamps();
            $table->string('centang', 2)->default('0');

            // hal yang berkaitan dngn orgn 
            $table->string('rayon_id'); //public
            $table->string('prodi', 30)->nullable();
            $table->string('kaderisasi')->default('Belum Mapaba'); //public
            $table->string('thn_mapaba', 10)->nullable();
            $table->string('thn_pkd', 10)->nullable();
            $table->string('thn_pkl', 10)->nullable();
            $table->string('thn_pkn', 10)->nullable();
            $table->string('informal', 100)->nullable();
            $table->string('nonformal', 100)->nullable();
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
