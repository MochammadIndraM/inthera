<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CfPakarTable extends Migration
{
    public function up()
    {
        Schema::create('cf_pakar', function (Blueprint $table) {
            $table->id();
            $table->string('kode_gejala');       // G01 - G20
            $table->string('kode_penyakit');     // P01 - P08
            $table->float('nilai_cf');           // CF dari pakar (bisa negatif)

            $table->timestamps();

            $table->unique(['kode_gejala', 'kode_penyakit']); // agar tidak duplikat
        });
    }

    public function down()
    {
        Schema::dropIfExists('cf_pakar');
    }
}
