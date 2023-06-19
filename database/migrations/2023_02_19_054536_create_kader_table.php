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
        Schema::create('kader', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('alamat', 150)->nullable();
            $table->string('nim', 16)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->string('t_lahir', 20)->nullable();
            $table->string('ttl', 20)->nullable();
            $table->string('wa', 15)->nullable();
            $table->string('hobi', 15)->nullable();
            $table->string('sma', 50)->nullable();
            $table->string('thn_lulus', 10)->nullable();
            $table->string('pesantren', 50)->nullable();
            $table->string('thn_kuliah', 10)->nullable();
            $table->string('fakultas', )->nullable();
            $table->string('jurusan', )->nullable();
            $table->string('thn_mapaba', 10)->nullable();
            $table->string('penyelenggara_mapaba', 30)->nullable();
            $table->string('thn_pkd', 10)->nullable();
            $table->string('thn_pkl', 10)->nullable();
            $table->string('thn_pkn', 10)->nullable();
            $table->string('informal', 100)->nullable();
            $table->string('penyelenggara_informal', 100)->nullable();
            $table->string('nonformal', 100)->nullable();
            $table->string('penyelenggara_nonformal', 100)->nullable();
            $table->string('photo', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kader');
    }
};
