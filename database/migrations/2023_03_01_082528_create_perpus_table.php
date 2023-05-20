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
        Schema::create('perpus', function (Blueprint $table) {
            $table->id();
            $table->string('judul', )->nullable();
            $table->string('deskripsi', )->nullable();
            $table->foreignId('categorybook_id', )->default(1);
            $table->foreignId('user_id');
            $table->string('image', )->nullable();
            $table->string('pdf', )->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpus');
    }
};
