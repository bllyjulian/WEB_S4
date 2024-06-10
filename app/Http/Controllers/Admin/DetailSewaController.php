<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\DataCustomer;
use App\Models\DataBooking;

use App\Models\DataMobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailSewaController extends Controller
{
    public function index()
    {
       $user = Auth::user();
        $databooking = DataBooking::with(['usermb','mitra', 'mobil',])
             ->where('username', $user->username)
            ->get()
            ->map(function($data) {
                return [
                    'username_mb' => $data->username_mb,
                    'status' => $data->status,
                    'id_booking' => $data->id_booking,
                    'foto_profil' => $data->usermb->foto_profil,
                    'nama' => $data->usermb->nama,
                    'email' => $data->usermb->email,
                    'nomor_hp_user' => $data->usermb->nomor_hp_user,
                    'tgl_lahir' => $data->usermb->tgl_lahir,
                    'domisili' => $data->usermb->domisili,
                    'id_mobil' => $data->id_mobil,
                    'foto_mobil' => $data->mobil->foto_mobil,
                    'nama_mobil' => $data->mobil->nama_mobil,
                    'kapasitas_penumpang' => $data->mobil->kapasitas_penumpang,
                    'warna' => $data->mobil->warna,
                    'harga_sewa_perhari' => $data->mobil->harga_sewa_perhari,
                    'tipe' => $data->mobil->tipe,
                    'bahan_bakar' => $data->mobil->bahan_bakar,
                    'kecepatan' => $data->mobil->kecepatan,
                    'transmisi' => $data->mobil->transmisi,
                ];
            });

        return view('admin.detailsewa.index', compact('databooking'));
    }
    public function detail($id, $id_booking, $username_mb)
    {
        $user = Auth::user();
        $dataBooking = DataBooking::with(['mobil', 'usermb'])
            ->where('username', $user->username)
            ->where('id_mobil', $id) 
            ->get();
    
        if($dataBooking->isEmpty()) {
            return redirect()->back()->with('error', 'Data sewa tidak ditemukan.');
        }
        $mobils = $dataBooking->first()->mobil;
        $customers = $dataBooking->map(function($data)  use ($id_booking) {
            return [
                // 'id_booking' => $data->id_booking,
                'id_booking' => DataBooking::where('id_booking', $id_booking)->first()->id_booking,
                'status' => DataBooking::where('id_booking', $id_booking)->first()->status,
                'tanggal_mulai' => DataBooking::where('id_booking', $id_booking)->first()->tanggal_mulai,
                'tanggal_akhir' => DataBooking::where('id_booking', $id_booking)->first()->tanggal_akhir,
                'foto_mobil' => $data->mobil->foto_mobil,
                'nama_mobil' => $data->mobil->nama_mobil,
                'kapasitas_penumpang' => $data->mobil->kapasitas_penumpang,
                'warna' => $data->mobil->warna,
                'harga_sewa_perhari' => $data->mobil->harga_sewa_perhari,
                'tipe' => $data->mobil->tipe,
                'bahan_bakar' => $data->mobil->bahan_bakar,
                'kecepatan' => $data->mobil->kecepatan,
                'transmisi' => $data->mobil->transmisi,
                'username_mb' => $data->username_mb,
                'foto_profil' => $data->usermb->foto_profil,
                'nama' => $data->usermb->nama,
                'email' => $data->usermb->email,
                'nomor_hp_user' => $data->usermb->nomor_hp_user,
                'tgl_lahir' => $data->usermb->tgl_lahir,
                'domisili' => $data->usermb->domisili,
                'penyewaan_count' => $data->penyewaan_count,
            ];
        });
        
        return view('admin.detailsewa.riwayatsewa', compact('mobils', 'customers'));
    }
    
    
    
    public function getLatitudeLongitude($id)
    {
        $mobil = DataMobil::findOrFail($id);
        $mitra = $mobil->akun; 

        if ($mitra) {
            return response()->json([
                'latitude' => $mitra->latitude,
                'longitude' => $mitra->longitude
            ]);
        } else {
            return response()->json([
                'error' => 'Mitra not found for this mobil'
            ], 404);
        }
    }
    public function mbdiambil(Request $request)
    {
        $booking = DataBooking::findOrFail($request->id_booking);

        $booking->status = 'Sedang Disewa';
        $booking->save();

        return redirect()->back()->with('success', 'mobil telah diambil');
    }
    public function mbdikembalikan(Request $request)
    {
        $booking = DataBooking::findOrFail($request->id_booking);

        $booking->status = 'Selesai Disewa';
        $booking->save();

        return redirect()->back()->with('success', 'mobil telah selesai disewa');
    }

}
