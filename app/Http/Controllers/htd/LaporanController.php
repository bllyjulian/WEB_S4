<?php

namespace App\Http\Controllers\htd;
use App\Http\Controllers\Controller;

use App\Models\DataLaporan;
use App\Models\DataPendaki;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = DataLaporan::with('pendaki') // Load relasi pendaki
                              ->orderBy('timestamp', 'desc') // Urutkan berdasarkan timestamp descending
                              ->get();
        $datapendaki = DataPendaki::all(); 
        return view('htdgemastik.laporan.index', compact('laporan', 'datapendaki'));
    }  
    public function store(Request $request)
    {
        $request->validate([
            'id_pendaki' => 'required',
            'jenis_laporan' => 'required',
        ]);

        DataLaporan::create($request->all());

        return redirect()->route('laporan')
            ->with('success', 'Laporan berhasil disimpan.');
    }

}
