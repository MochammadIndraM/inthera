<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;

    protected $table = 'rules';
    protected $fillable = ['kode_rule', 'kode_gejala', 'kode_penyakit'];
    public $timestamps = false;

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'kode_gejala', 'kode_gejala');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'kode_penyakit', 'kode_penyakit');
    }

    // Ambil semua gejala untuk satu kode_rule
    public static function getGroupedRules()
    {
        return self::all()
            ->groupBy('kode_rule')
            ->map(function ($items) {
                return [
                    'kode_penyakit' => $items->first()->kode_penyakit,
                    'kode_gejala' => $items->pluck('kode_gejala')->toArray()
                ];
            });
    }
}
