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
            $table->id();
            $table->string('name'); //public
            $table->string('kelamin')->nullable(); //public
            $table->string('nim')->unique();
            $table->string('img')->default('user.png');
            $table->string('province_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('kecamatan_id')->nullable();
            $table->string('kelurahan_id')->nullable();
            $table->string('alamat')->nullable()->dafault('uninus pride');
            $table->string('pesantren')->nullable();
            $table->string('t_lahir',)->nullable();
            $table->string('ttl', 20)->nullable();
            $table->string('hobi')->nullable();
            $table->string('sma', 100)->nullable();
            $table->string('thn_lulus', 10)->nullable();
            $table->string('thn_kuliah', 10)->nullable();

            $table->string('wa')->nullable();
            $table->string('twitter')->nullable();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();

            // hal yang berkaitan dengan account 
            $table->foreignId('role_id')->default(4);
            $table->string('bio')->default('tangan terkepan dan maju kemuka!!!');
            $table->string('username')->nullable()->unique(); //public
            $table->string('slug')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable(); //untuk semantara di null aja biar gampang nge faker nyha
            $table->timestamps();
            $table->string('centang', 2)->default('0');

            // hal yang berkaitan dngn orgn 
            $table->string('rayon_id'); //public
            $table->string('prodi')->nullable();
            $table->string('kaderisasi')->default('Belum Mapaba'); //public
            $table->string('thn_mapaba', 50)->nullable();
            $table->string('thn_pkd', 50)->nullable();
            $table->string('thn_pkl', 50)->nullable();
            $table->string('thn_pkn', 50)->nullable();
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
