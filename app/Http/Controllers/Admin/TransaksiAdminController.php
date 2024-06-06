<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\DataTransaksi;
use Illuminate\Http\Request;

class TransaksiAdminController extends Controller
{
    public function index()
    {
        $datatransaksi = DataTransaksi::with(['mitra', 'mobil', 'jenisPembayaran'])->get()
        ->map(function($transaksi) {
            return [
                'id_transaksi' => $transaksi->id_transaksi,
                'total' => $transaksi->total,
                'status' => $transaksi->status,
                'bukti_pembayaran' => $transaksi->bukti_pembayaran,
                'username' => $transaksi->username,
                'username_mb' => $transaksi->username_mb,
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
        
        return view('admin.orderan.index', compact('datatransaksi'));
    }
}
