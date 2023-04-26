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
            $table->string('judul', 40)->nullable();
            $table->foreignId('user_id');
            $table->string('image', 40)->nullable();
            $table->string('pdf', 50)->nullable();
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
