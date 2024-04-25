<?php

namespace App\Http\Controllers;
use App\Models\DataMitra;
use Illuminate\Http\Request;

class AdminMobilinkController extends Controller
{
    public function index()
    {
        return view('mobilink.dashboard.index');
    }
    public function mitra()
    {
        $mitra = DataMitra::where('id_lvl', 3)
        ->orderBy('tgl_daftar', 'desc') // Mengurutkan berdasarkan tgl_daftar dari yang terbaru
        ->get();
return view('mobilink.mitra.index', compact('mitra'));
    }
    public function activateAccount(Request $request)
    {
        $username = $request->username;
        $mitra = DataMitra::where('username', $username)->first();
        if ($mitra) {
            $mitra->status_akun = 1;
            $mitra->save();
            return response()->json(['success' => true, 'message' => 'Akun berhasil diaktifkan.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Akun tidak ditemukan.'], 404);
        }
    }
}
