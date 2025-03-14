<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index() {
        // Ambil semua data laporan dari database
        $laporan = Laporan::all();
        
        // Kirim data ke tampilan laporan.blade.php
        return view('laporan', compact('laporan'));
    }
    public function store(Request $request) {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama_pelapor' => 'required',
            'no_id' => 'required',
            'posisi' => 'required',
            'divisi' => 'required',
            'datetime' => 'required',
            'lokasi' => 'required',
            'golden' => 'required',
            'unsafe' => 'required',
            'safe' => 'required',
            'cuaca' => 'required',
            'deskripsi' => 'required',
        ]);

        // Simpan data ke database
        Laporan::create($request->all());

        // Redirect ke halaman laporan setelah berhasil menyimpan data 
        return redirect()->route('laporan.index')->with('success', 'Data berhasil disimpan.');
    }
}
