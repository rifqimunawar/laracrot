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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('penyelenggara', 50)->nullable();
            $table->string('start', 20)->nullable();
            $table->string('tempat', 50)->nullable();
            $table->string('description', 100)->nullable(); //di frontendnya jadi category
            $table->string('jmlh_peserta', 3)->nullable();
            $table->string('target_capaian')->nullable();
            $table->string('evaluasi')->nullable();
            $table->string('status')->default(false);
            $table->string('pamflet',100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
