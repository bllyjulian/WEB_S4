<?php

namespace App\Http\Controllers\Mobilink;
use App\Http\Controllers\Controller;
use App\Models\DataMitra;
use Illuminate\Http\Request;


class MitraMobilinkController extends Controller
{
    public function mitra()
    {
        $mitra = DataMitra::where('id_lvl', 3)
        ->orderBy('tgl_daftar', 'desc')
        ->get();
return view('mobilink.mitra.index', compact('mitra'));
    }
    public function banAkun(Request $request)
    {
        $mitra = DataMitra::findOrFail($request->username);

        $mitra->status_akun = 2;
        $mitra->save();

        return redirect()->back()->with('success', 'Akun berhasil dibanned');
    }
    public function aktifkanAkun(Request $request)
    {
        $mitra = DataMitra::findOrFail($request->username);

        $mitra->status_akun = 1;
        $mitra->save();

        return redirect()->back()->with('success', 'Akun berhasil diaktifkan.');
    }
    public function tolakAkun(Request $request)
    {
        $mitra = DataMitra::findOrFail($request->username);

        $mitra->status_akun = 3;
        $mitra->save();

        return redirect()->back()->with('success', 'Akun berhasil ditolak.');
    }
}
