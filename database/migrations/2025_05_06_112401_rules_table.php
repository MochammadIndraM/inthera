<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('kode_rule', 10); // Hapus ->unique()
            $table->string('kode_penyakit', 10);
            $table->string('kode_gejala', 10);

            $table->foreign('kode_penyakit')->references('kode_penyakit')->on('data_penyakit')->onDelete('cascade');
            $table->foreign('kode_gejala')->references('kode_gejala')->on('data_gejala')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};
