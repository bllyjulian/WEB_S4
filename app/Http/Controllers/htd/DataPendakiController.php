<?php

namespace App\Http\Controllers\htd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPendaki;

class DataPendakiController extends Controller
{
    public function index()
    {
        $datapendaki = DataPendaki::orderBy('timestamp', 'desc')->get();
    
        return view('htdgemastik.datapendaki.index', compact('datapendaki'));
    }
    
    public function tambahpendaki(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'umur' => 'required|string|max:255',
            'asal' => 'required|string|max:255',
            'nohp' => 'required|string|max:255',
        ]);

        DataPendaki::create($validatedData);


    }
    public function hapus($id_pendaki)
    {
        $pendaki = DataPendaki::findOrFail($id_pendaki);
        $pendaki->delete();

        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
