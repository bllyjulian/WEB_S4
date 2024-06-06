<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataBooking;
use Illuminate\Http\Request;

class ApiDataBooking extends Controller
{
    public function index()
    {
        $bookings = DataBooking::with('mobil')->get();
        
        $bookings = $bookings->map(function ($booking) {
            return [
                'id_booking' => $booking->id_booking,
                'id_mobil' => $booking->id_mobil,
                'username_mb' => $booking->username_mb,
                'nama_mobil' => $booking->mobil->nama_mobil,
                'tipe' => $booking->mobil->tipe,
                'foto_mobil' => $booking->mobil->foto_mobil,
                'tanggal_mulai' => $booking->tanggal_mulai,
                'tanggal_akhir' => $booking->tanggal_akhir,
                'status' => $booking->status,
                // 'latitude' => $booking->akun->latitude ?? null,
                // 'longitude' => $booking->akun->longitude ?? null,
                'nama_toko' => $booking->akun->nama_toko ?? null,
                'logo_mitra' => $booking->akun->logo_mitra ?? null
            ];
        });

        return response()->json($bookings);
    }

    public function showByMobil($id_mobil)
    {
        $bookings = DataBooking::where('id_mobil', $id_mobil)->with('mobil')->get();
        
        if ($bookings->isEmpty()) {
            return response()->json(['message' => 'No bookings found for this mobil'], 404);
        }

        $bookings = $bookings->map(function ($booking) {
            return [
                'id_booking' => $booking->id_booking,
                'id_mobil' => $booking->id_mobil,
                'username_mb' => $booking->username_mb,
                'nama_mobil' => $booking->mobil->nama_mobil,
                'tipe' => $booking->mobil->tipe,
                'foto_mobil' => $booking->mobil->foto_mobil,
                'tanggal_mulai' => $booking->tanggal_mulai,
                'tanggal_akhir' => $booking->tanggal_akhir,
                'status' => $booking->status,
                // 'latitude' => $booking->akun->latitude ?? null,
                // 'longitude' => $booking->akun->longitude ?? null,
                'nama_toko' => $booking->akun->nama_toko ?? null,
                'logo_mitra' => $booking->akun->logo_mitra ?? null
            ];
        });

        return response()->json($bookings);
    }
}
