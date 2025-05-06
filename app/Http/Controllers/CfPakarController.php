<?php

namespace App\Http\Controllers;

use App\Models\CfPakar;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class CfPakarController extends Controller
{
    public function index()
    {
        // Ambil semua data CF Pakar dari database
        $cfPakarList = CfPakar::orderBy('kode_gejala')->orderBy('kode_penyakit')->get();

        // Kirim data ke view
        return view('master-data.bobot-pakar', [
            'cf' => $cfPakarList,
        ]);
    }
}
