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
        Schema::create('pasien_perawat', function (Blueprint $table) {
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBigInteger('perawat_id');
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('perawat_id')->references('id')->on('perawats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien_perawat');
    }
};
