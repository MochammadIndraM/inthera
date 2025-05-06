<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CfPakar extends Model
{
    use HasFactory;

    protected $table = 'cf_pakar'; // Sesuaikan dengan nama tabel di migrasi

    protected $fillable = [
        'kode_gejala',
        'kode_penyakit',
        'nilai_cf',
    ];

    public $timestamps = false;
}
