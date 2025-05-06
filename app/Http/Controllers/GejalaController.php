<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function index()
    {
        // Ambil semua data penyakit
        $gejalas = Gejala::all();

        // Ambil gejala terakhir berdasarkan kode
        $lastGejala = Gejala::orderBy('kode_gejala', 'desc')->first();

        // Generate kode gejala berikutnya
        if ($lastGejala) {
            $lastKode = substr($lastGejala->kode_gejala, 1); // ambil angka belakang, contoh '01'
            $nextKode = 'G' . str_pad((int)$lastKode + 1, 2, '0', STR_PAD_LEFT);
        } else {
            $nextKode = 'G01';
        }

        // Kirim data ke view
        return view('master-data.data-gejala', compact('gejalas', 'nextKode'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'kode_gejala' => 'required|string|max:10|unique:data_gejala,kode_gejala',
            'nama_gejala' => 'required|string|max:255',
        ]);

        // Menyimpan data gejala ke database
        Gejala::create([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);

        // Menyimpan session flash untuk pesan sukses
        return redirect()->route('gejala.store')->with('success', 'Data Gejala berhasil ditambahkan!');
    }

    public function update(Request $request, $kode_gejala)
    {
        // Cari data berdasarkan kode_gejala, bukan id
        $gejala = Gejala::where('kode_gejala', $kode_gejala)->firstOrFail();

        // Update data gejala
        $gejala->update($request->all());

        return redirect()->route('data-gejala')->with('success', 'Data gejala berhasil diperbarui.');
    }

    public function destroy($kode_gejala)
    {
        // Cari data berdasarkan kode_gejala
        $gejala = Gejala::where('kode_gejala', $kode_gejala)->firstOrFail();

        // Hapus data gejala
        $gejala->delete();

        // Redirect ke halaman data-gejala dengan pesan sukses
        return redirect()->route('data-gejala')->with('success', 'Data gejala berhasil dihapus.');
    }

    public function dashboard()
    {
        $totalGejala = Gejala::count();
        return view('master-data.dashboard', compact('totalGejala'));
    }
}
