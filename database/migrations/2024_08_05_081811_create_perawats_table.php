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
        Schema::create('perawats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perawat_id');
            $table->string('nama_perawat');
            $table->string('jenis_kelamin');
            $table->string('no_telp');
            $table->timestamps();
            $table->foreign('perawat_id')->references('id')->on('dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perawats');
    }
};
