<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        // Ambil semua data penyakit
        $pertanyaans = Gejala::all();

        // Ambil pertanyaan terakhir berdasarkan kode
        $lastPertanyaan = Gejala::orderBy('kode_gejala', 'desc')->first();

        // Generate kode pertanyaan berikutnya
        if ($lastPertanyaan) {
            $lastKode = substr($lastPertanyaan->kode_gejala, 1); // ambil angka belakang, contoh '01'
            $nextKode = 'G' . str_pad((int)$lastKode + 1, 2, '0', STR_PAD_LEFT);
        } else {
            $nextKode = 'G01';
        }

        // Kirim data ke view
        return view('master-data.data-pertanyaan', compact('pertanyaans', 'nextKode'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'kode_gejala' => 'required|string|max:10|unique:data_gejala,kode_gejala',
            'pertanyaan' => 'required|string|max:255',
        ]);

        // Menyimpan data gejala ke database
        Gejala::create([
            'kode_gejala' => $request->kode_gejala,
            'pertanyaan' => $request->pertanyaan,
        ]);

        // Menyimpan session flash untuk pesan sukses
        return redirect()->route('data-pertanyaan')->with('success', 'Data Pertanyaan berhasil ditambahkan!');
    }

    public function update(Request $request, $kode_gejala)
    {
        // Cari data berdasarkan kode_gejala, bukan id
        $pertanyaan = Gejala::where('kode_gejala', $kode_gejala)->firstOrFail();

        // Update data pertanyaan
        $pertanyaan->update($request->all());

        return redirect()->route('data-pertanyaan')->with('success', 'Data pertanyaan berhasil diperbarui.');
    }

    public function destroy($kode_gejala)
    {
        // Cari data berdasarkan kode_gejala
        $pertanyaan = Gejala::where('kode_gejala', $kode_gejala)->firstOrFail();

        // Hapus data pertanyaan
        $pertanyaan->delete();


        // Redirect ke halaman data-pertanyaan dengan pesan sukses
        return redirect()->route('data-pertanyaan')->with('success', 'Data pertanyaan berhasil dihapus.');
    }
}
