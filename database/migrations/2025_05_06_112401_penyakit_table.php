<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenyakitTable extends Migration // Ubah nama kelas agar unik
{
    public function up(): void
    {
        Schema::create('data_penyakit', function (Blueprint $table) {
            $table->string('kode_penyakit')->primary();
            $table->string('nama_penyakit');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('data_penyakit');
    }
}
