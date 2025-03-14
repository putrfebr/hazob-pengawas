<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporans'; // Pastikan tabelnya benar

    protected $fillable = [
        'nama_pelapor', 'no_id', 'posisi', 'divisi', 'datetime',
        'lokasi', 'golden', 'unsafe', 'safe', 'cuaca', 'deskripsi'
    ];
}
