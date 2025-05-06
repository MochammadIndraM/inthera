<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function index()
    {
        // Ambil semua data penyakit
        $penyakiters = Penyakit::all();

        // Ambil penyakit terakhir berdasarkan kode
        $lastPenyakit = Penyakit::orderBy('kode_penyakit', 'desc')->first();

        // Generate kode penyakit berikutnya
        if ($lastPenyakit) {
            $lastKode = substr($lastPenyakit->kode_penyakit, 1); // ambil angka belakang, contoh '01'
            $nextKode = 'P' . str_pad((int)$lastKode + 1, 2, '0', STR_PAD_LEFT);
        } else {
            $nextKode = 'P01';
        }

        // Kirim data ke view
        return view('master-data.data-penyakit', compact('penyakiters', 'nextKode'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'kode_penyakit' => 'required|string|max:10|unique:data_penyakit,kode_penyakit',
            'nama_penyakit' => 'required|string|max:255',
        ]);

        // Menyimpan data penyakit ke database
        Penyakit::create([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit,
        ]);

        // Menyimpan session flash untuk pesan sukses
        return redirect()->route('penyakit.store')->with('success', 'Data Penyakit berhasil ditambahkan!');
    }

    public function update(Request $request, $kode_penyakit)
    {
        // Cari data berdasarkan kode_penyakit, bukan id
        $penyakit = Penyakit::where('kode_penyakit', $kode_penyakit)->firstOrFail();

        // Update data penyakit
        $penyakit->update($request->all());

        return redirect()->route('data-penyakit')->with('success', 'Data penyakit berhasil diperbarui.');
    }

    public function destroy($kode_penyakit)
    {
        // Cari data berdasarkan kode_penyakit
        $penyakit = Penyakit::where('kode_penyakit', $kode_penyakit)->firstOrFail();

        // Hapus data penyakit
        $penyakit->delete();

        // Redirect ke halaman data-penyakit dengan pesan sukses
        return redirect()->route('data-penyakit')->with('success', 'Data penyakit berhasil dihapus.');
    }

    public function dashboard()
    {
        $totalPenyakit = Penyakit::count();
        return view('master-data.dashboard', compact('totalPenyakit'));
    }
}
