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
        Schema::create('dokter_obat', function (Blueprint $table) {
            $table->unsignedBigInteger('dokter_id');
            $table->unsignedBigInteger('obat_id');
            $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');
            $table->foreign('obat_id')->references('id')->on('obats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokter_obat');
    }
};
