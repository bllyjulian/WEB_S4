<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataTransaksi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ApiDataTransaksi extends Controller
{
    public function store(Request $request)
    {
    
        $tanggalSekarang = Carbon::now()->format('Ymd');
    
        $jumlahTransaksiHariIni = DataTransaksi::whereDate('tgl_transaksi', Carbon::today())->count();
    
    
        $id_transaksi = 'MB' . $tanggalSekarang . str_pad($jumlahTransaksiHariIni + 1, 2, '0', STR_PAD_LEFT);
    
        $request->validate([
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $input = $request->all();
    
        $input['id_transaksi'] = $id_transaksi;
    
        $transaksi = DataTransaksi::create($input);
    
        // Menambahkan ID transaksi dalam respons JSON
        $response = [
            'message' =>  $transaksi->id_transaksi
        ];
    
        return response()->json($response, 201);
    }
    
    public function update(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $id_transaksi = $request->input('id_transaksi');
    
        $transaksi = DataTransaksi::findOrFail($id_transaksi);
    
        if ($request->hasFile('bukti_pembayaran')) {
            $gambarBuktiPembayaran = $request->file('bukti_pembayaran');
    
            $imageName = time() . '.' . $gambarBuktiPembayaran->extension();
            $path = $gambarBuktiPembayaran->move(public_path('assets/images/bukti-pembayaran'), $imageName);
    
            $transaksi->bukti_pembayaran = 'assets/images/bukti-pembayaran/' . $imageName;
        }
    
        $transaksi->status = 1;
    
        // Simpan perubahan ke dalam database
        $transaksi->save();
    
        // Menambahkan ID transaksi dalam respons JSON
        $response = [
            'message' =>  $transaksi->id_transaksi
        ];
    
        return response()->json($response, 200);
    }
    
}
