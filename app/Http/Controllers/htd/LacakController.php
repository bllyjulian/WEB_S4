<?php

namespace App\Http\Controllers\htd;
use App\Http\Controllers\Controller;
use App\Models\DataPendaki;
use Illuminate\Http\Request;

class LacakController extends Controller
{
    public function index($id_pendaki = null)
    {
        $datapendaki = DataPendaki::all(); // Ambil semua data pendaki
        
        if ($id_pendaki) {
            $pendaki = DataPendaki::findOrFail($id_pendaki); // Ambil data pendaki berdasarkan ID yang dipilih
            return view('htdgemastik.lacak.detail', compact('pendaki', 'datapendaki'));
        }

        return view('htdgemastik.lacak.index', compact('datapendaki'));
    }
}
