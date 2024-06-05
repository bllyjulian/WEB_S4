<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataTransaksi;
use App\Models\DataMitra;
use App\Models\DataMobil;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ApiDataTransaksi extends Controller
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
                    'nama_mobil' => $transaksi->mobil->nama_mobil,
                    'id_jenis' => $transaksi->id_jenis,
                    'nama_pembayaran' => $transaksi->jenisPembayaran->nama_pembayaran,
                    'tanggal_mulai' => $transaksi->tanggal_mulai,
                    'tanggal_akhir' => $transaksi->tanggal_akhir,
                    'tipe_bayar' => $transaksi->tipe_bayar,
                    'tgl_transaksi' => $transaksi->tgl_transaksi,
                ];
            });

        return response()->json($datatransaksi);
    }

    public function showByStatus($status)
    {
        $datatransaksi = DataTransaksi::with(['mitra', 'mobil', 'jenisPembayaran'])
            ->where('status', $status)
            ->get()
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
                    'nama_mobil' => $transaksi->mobil->nama_mobil,
                    'id_jenis' => $transaksi->id_jenis,
                    'nama_pembayaran' => $transaksi->jenisPembayaran->nama_pembayaran,
                    'tanggal_mulai' => $transaksi->tanggal_mulai,
                    'tanggal_akhir' => $transaksi->tanggal_akhir,
                    'tipe_bayar' => $transaksi->tipe_bayar,
                    'tgl_transaksi' => $transaksi->tgl_transaksi,
                ];
            });

        return response()->json($datatransaksi);
    }

    public function showByUsernameMb($username_mb)
    {
        $datatransaksi = DataTransaksi::with(['mitra', 'mobil', 'jenisPembayaran'])
            ->where('username_mb', $username_mb)
            ->get()
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
                    'nama_mobil' => $transaksi->mobil->nama_mobil,
                    'id_jenis' => $transaksi->id_jenis,
                    'nama_pembayaran' => $transaksi->jenisPembayaran->nama_pembayaran,
                    'tanggal_mulai' => $transaksi->tanggal_mulai,
                    'tanggal_akhir' => $transaksi->tanggal_akhir,
                    'tipe_bayar' => $transaksi->tipe_bayar,
                    'tgl_transaksi' => $transaksi->tgl_transaksi,
                ];
            });

        return response()->json($datatransaksi);
    }

    public function showByStatusAndUsernameMb($status, $username_mb)
    {
        $datatransaksi = DataTransaksi::with(['mitra', 'mobil', 'jenisPembayaran'])
            ->where('status', $status)
            ->where('username_mb', $username_mb)
            ->get()
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
                    'nama_mobil' => $transaksi->mobil->nama_mobil,
                    'id_jenis' => $transaksi->id_jenis,
                    'nama_pembayaran' => $transaksi->jenisPembayaran->nama_pembayaran,
                    'tanggal_mulai' => $transaksi->tanggal_mulai,
                    'tanggal_akhir' => $transaksi->tanggal_akhir,
                    'tipe_bayar' => $transaksi->tipe_bayar,
                    'tgl_transaksi' => $transaksi->tgl_transaksi,
                ];
            });

        return response()->json($datatransaksi);
    }
    public function store(Request $request)
    {
        $tanggalSekarang = Carbon::now()->format('Ymd');

        $request->validate([
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $input = $request->all();

        // Generate unique id_transaksi
        $jumlahTransaksiHariIni = DataTransaksi::whereDate('tgl_transaksi', Carbon::today())->count();
        $id_transaksi = 'MB' . $tanggalSekarang . str_pad($jumlahTransaksiHariIni + 1, 2, '0', STR_PAD_LEFT);

        // Make sure the generated id_transaksi is unique for today
        while (DataTransaksi::where('id_transaksi', $id_transaksi)->exists()) {
            $jumlahTransaksiHariIni++;
            $id_transaksi = 'MB' . $tanggalSekarang . str_pad($jumlahTransaksiHariIni + 1, 2, '0', STR_PAD_LEFT);
        }

        $input['id_transaksi'] = $id_transaksi;
        $input['tgl_transaksi'] = Carbon::now()->toDateString();  // Set the transaction date

        $transaksi = DataTransaksi::create($input);

        $response = [
            'message' => $transaksi->id_transaksi
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


        $transaksi->save();

        $response = [
            'message' => $transaksi->id_transaksi
        ];

        return response()->json($response, 200);
    }
}


