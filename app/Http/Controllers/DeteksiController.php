<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rule;
use App\Models\CfPakar;
use App\Models\Gejala;
use App\Models\Penyakit;

class DeteksiController extends Controller
{
    public function index()
    {
        $deteksi = Gejala::all(); // Ambil semua gejala
        return view('deteksi', compact('deteksi')); // Kirim ke view
    }


    public function process(Request $request)
    {
        // Ambil input CF dari user
        $userInput = collect($request->all())->filter(function ($value, $key) {
            return str_starts_with($key, 'cf');
        });

        // Ambil semua kode_gejala yang valid dari database
        $validGejala = Gejala::pluck('kode_gejala')->toArray();

        // Pemetaan input ke kode_gejala, hanya ambil yang valid
        $selectedGejala = $userInput->keys()->map(function ($key) {
            // Ambil angka dari nama input (cf01, cf02, ...)
            preg_match('/cf(\d+)/', $key, $matches);
            $index = isset($matches[1]) ? (int) $matches[1] : 0;

            // Pastikan format kode_gejala sesuai (G01, G02, ...)
            return 'G' . str_pad($index, 2, '0', STR_PAD_LEFT);
        })->filter(function ($kodeGejala) use ($validGejala) {
            // Hanya ambil kode_gejala yang valid
            return in_array($kodeGejala, $validGejala);
        });

        // Filter gejala berdasarkan nilai CF user >= 0.6
        $filteredGejala = $selectedGejala->filter(function ($kodeGejala) use ($userInput) {
            $cfUser = $this->ambilNilaiCFUser($userInput, $kodeGejala);
            return $cfUser >= 0.6;
        });

        // Ambil data gejala yang dipilih dan sudah difilter
        $gejala = Gejala::whereIn('kode_gejala', $filteredGejala)->get();

        // Proses Forward Chaining
        $groupedRules = Rule::getGroupedRules();
        $hasil = [];

        foreach ($groupedRules as $kodeRule => $rule) {
            $kodePenyakit = $rule['kode_penyakit'];
            $gejalaRule = $rule['kode_gejala'];

            $cfGabungan = null;

            foreach ($gejalaRule as $kodeGejala) {
                $cfUser = $this->ambilNilaiCFUser($userInput, $kodeGejala);
                $cfPakar = CfPakar::where('kode_penyakit', $kodePenyakit)
                    ->where('kode_gejala', $kodeGejala)
                    ->value('nilai_cf');

                if (!is_null($cfUser) && !is_null($cfPakar)) {
                    $cf = $cfUser * $cfPakar;
                    $cfGabungan = is_null($cfGabungan) ? $cf : $cfGabungan + $cf * (1 - $cfGabungan);
                }
            }

            if (!is_null($cfGabungan)) {
                $hasil[$kodePenyakit] = $cfGabungan;
            }
        }

        // Ambil penyakit dengan CF tertinggi
        arsort($hasil);
        $penyakitTertinggi = key($hasil);
        $nilaiCfTertinggi = reset($hasil);

        $penyakit = Penyakit::where('kode_penyakit', $penyakitTertinggi)->first();

        // Kirim data ke view
        return view('result', compact('hasil', 'penyakit', 'nilaiCfTertinggi', 'gejala', 'selectedGejala'));
    }


    private function ambilNilaiCFUser($userInput, $kodeGejala)
    {
        foreach ($userInput as $key => $value) {
            if (preg_match('/cf(\d+)/', $key, $matches)) {
                $index = (int)$matches[1] - 1;
                $kode = 'G' . str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                if ($kode === $kodeGejala) {
                    return (float) $value;
                }
            }
        }
        return null;
    }
}
