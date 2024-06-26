<?php

namespace App\Http\Controllers\htd;
use App\Http\Controllers\Controller;
use App\Models\DataLaporan;
use App\Models\DataPendaki;
use Illuminate\Http\Request;

class LacakController extends Controller
{
    public function index($id_pendaki = null)
    {
        $laporan = DataLaporan::with('pendaki') // Load relasi pendaki
        ->orderBy('timestamp', 'desc') // Urutkan berdasarkan timestamp descending
        ->get();
        $datapendaki = DataPendaki::all(); // Ambil semua data pendaki
        
        if ($id_pendaki) {
            $pendaki = DataPendaki::findOrFail($id_pendaki); // Ambil data pendaki berdasarkan ID yang dipilih
            return view('htdgemastik.lacak.detail', compact('pendaki', 'datapendaki','laporan'));
        }

        return view('htdgemastik.lacak.index', compact('datapendaki','laporan'));
    }
}
