<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rule;

class RuleSeeder extends Seeder
{
    public function run()
    {
        $rules = [
            'R01' => ['penyakit' => 'P01', 'gejala' => ['G01', 'G02', 'G03', 'G04', 'G05', 'G06', 'G08', 'G09', 'G10', 'G11', 'G12', 'G15', 'G16', 'G19']],
            'R02' => ['penyakit' => 'P02', 'gejala' => ['G01', 'G02', 'G04', 'G05', 'G06', 'G08', 'G09', 'G10', 'G15', 'G19']],
            'R03' => ['penyakit' => 'P03', 'gejala' => ['G01', 'G02', 'G03', 'G04', 'G06', 'G08', 'G09', 'G10', 'G14', 'G15', 'G20']],
            'R04' => ['penyakit' => 'P04', 'gejala' => ['G01', 'G02', 'G03', 'G05', 'G06', 'G08', 'G09', 'G10', 'G13', 'G17', 'G18']],
            'R05' => ['penyakit' => 'P05', 'gejala' => ['G01', 'G02', 'G03', 'G04', 'G05', 'G06', 'G08', 'G09', 'G10', 'G13', 'G15', 'G17']],
            'R06' => ['penyakit' => 'P06', 'gejala' => ['G01', 'G02', 'G03', 'G04', 'G05', 'G06', 'G08', 'G09', 'G10', 'G13', 'G15', 'G17', 'G19']],
            'R07' => ['penyakit' => 'P07', 'gejala' => ['G01', 'G02', 'G03', 'G04', 'G05', 'G06', 'G08', 'G09', 'G10', 'G13', 'G15', 'G17', 'G19']],
            'R08' => ['penyakit' => 'P08', 'gejala' => ['G01', 'G02', 'G03', 'G04']],
        ];

        foreach ($rules as $kode_rule => $data) {
            foreach ($data['gejala'] as $kode_gejala) {
                Rule::create([
                    'kode_rule' => $kode_rule,
                    'kode_penyakit' => $data['penyakit'],
                    'kode_gejala' => $kode_gejala
                ]);
            }
        }
    }
}
