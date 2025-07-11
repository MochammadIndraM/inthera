<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'data_gejala';
    // Tentukan primary key
    protected $primaryKey = 'kode_gejala'; // Update primary key to match the new model
    public $incrementing = false; // Karena kode_gejala bukan auto increment

    // Tentukan kolom yang dapat diisi
    protected $guarded = [''];

    // Tentukan jika menggunakan timestamps
    public $timestamps = true;

    // // Relasi jika ada, sesuaikan dengan kebutuhan
    // public function transaksi()
    // {
    //     return $this->hasMany(DataTransaksi::class, 'kode_apoteker', 'kode_apoteker');
    // }
}
