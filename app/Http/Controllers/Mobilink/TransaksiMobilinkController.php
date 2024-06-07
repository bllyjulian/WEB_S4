<?php
namespace App\Http\Controllers\Mobilink;
use App\Http\Controllers\Controller;
use App\Models\DataTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiMobilinkController extends Controller
{
    public function index()
    {
        $datatransaksi = DataTransaksi::with(['mitra', 'mobil', 'jenisPembayaran'])
        ->orderBy('tgl_transaksi', 'desc') 
        ->get()
        ->map(function($transaksi) {
            return [
                'id_transaksi' => $transaksi->id_transaksi,
                'total' => $transaksi->total,
                'status' => $transaksi->status,
                'bukti_pembayaran' => $transaksi->bukti_pembayaran,
                'username' => $transaksi->username,
                'username_mb' => $transaksi->username_mb,
                'logo_mitra' => $transaksi->mitra->logo_mitra,
                'nama_toko' => $transaksi->mitra->nama_toko,
                'nama_mitra' => $transaksi->mitra->nama_lengkap,
                'id_mobil' => $transaksi->id_mobil,
                'foto_mobil' => $transaksi->mobil->foto_mobil,
                'nama_mobil' => $transaksi->mobil->nama_mobil,
                'kapasitas_penumpang' => $transaksi->mobil->kapasitas_penumpang,
                'warna' => $transaksi->mobil->warna,
                'harga_sewa_perhari' => $transaksi->mobil->harga_sewa_perhari,
                'tipe' => $transaksi->mobil->tipe,
                'bahan_bakar' => $transaksi->mobil->bahan_bakar,
                'kecepatan' => $transaksi->mobil->kecepatan,
                'transmisi' => $transaksi->mobil->transmisi,
                'id_jenis' => $transaksi->id_jenis,
                'nama_pembayaran' => $transaksi->jenisPembayaran->nama_pembayaran,
                'tanggal_mulai' => $transaksi->tanggal_mulai,
                'tanggal_akhir' => $transaksi->tanggal_akhir,
                'tipe_bayar' => $transaksi->tipe_bayar,
                'tgl_transaksi' => $transaksi->tgl_transaksi,
            ];
        });
        
        return view('mobilink.transaksi.index', compact('datatransaksi'));
    }
    public function setujuTransaksi($id_transaksi)
    {
        $transaksi = DataTransaksi::findOrFail($id_transaksi);
    
        $transaksi->status = 2;
        $transaksi->save();
    
        return redirect()->back()->with('success', 'Transaksi disetujui');
    }
    public function tolakTransaksi($id_transaksi)
{
    $transaksi = DataTransaksi::findOrFail($id_transaksi);

    $transaksi->status = 3;
    $transaksi->save();

    return redirect()->back()->with('success', 'Transaksi ditolak');
}

    
}
