<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataBooking;
use Illuminate\Http\Request;

class ApiDataBooking extends Controller
{
    public function index()
    {
        $bookings = DataBooking::with('mobil', 'mitra')->get();
        
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
                'latitude' => $booking->mitra->latitude ?? null,
                'longitude' => $booking->mitra->longitude ?? null,
                'nama_toko' => $booking->mitra->nama_toko ?? null,
                'logo_mitra' => $booking->mitra->logo_mitra ?? null
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
                'latitude' => $booking->mitra->latitude ?? null,
                'longitude' => $booking->mitra->longitude ?? null,
                'nama_toko' => $booking->mitra->nama_toko ?? null,
                'logo_mitra' => $booking->mitra->logo_mitra ?? null
            ];
        });

        return response()->json($bookings);
    }
    public function showByUserName($username_mb)
{
    $bookings = DataBooking::where('username_mb', $username_mb)->with('mobil')->get();
    
    if ($bookings->isEmpty()) {
        return response()->json(['message' => 'No bookings found for this username_mb'], 404);
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
            'latitude' => $booking->mitra->latitude ?? null,
            'longitude' => $booking->mitra->longitude ?? null,
            'nama_toko' => $booking->mitra->nama_toko ?? null,
            'logo_mitra' => $booking->mitra->logo_mitra ?? null
        ];
    });

    return response()->json($bookings);
}

}
