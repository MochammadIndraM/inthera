<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GejalaTable extends Migration // Ubah nama kelas agar unik
{
    public function up(): void
    {
        Schema::create('data_gejala', function (Blueprint $table) {
            $table->string('kode_gejala')->primary();
            $table->string('nama_gejala')->nullable();
            $table->string('pertanyaan')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_gejala');
    }
}
