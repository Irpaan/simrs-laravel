<?php

use App\Models\Pasien;
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
        Schema::create('rekammedis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id')->nullable();
            $table->string('keluhan');
            $table->string('pemeriksaan');
            $table->string('pengobatan');
            $table->timestamps();
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekammedis');
    }
};
