<?php


namespace App\Http\Controllers\Api;
use App\Models\DataJenisPembayaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiDataJenisPembayaran extends Controller
{
    public function index()
    {
        $jenispembayaran = DataJenisPembayaran::all();
        return response()->json($jenispembayaran);
    }
    public function show($id_jenis)
    {
        $jenispembayaran = DataJenisPembayaran::findOrFail($id_jenis);
        return response()->json($jenispembayaran);
    }
}
