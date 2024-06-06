<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\DataCustomer;
use App\Models\DataMobil;
use Illuminate\Http\Request;

class DetailSewaController extends Controller
{
    public function index()
    {
        $mobils = DataMobil::all();
        return view('admin.detailsewa.index', compact('mobils'));
    }

    public function detail($id)
    {
        $mobil = DataMobil::findOrFail($id);
        $customers = DataCustomer::all(); // Mengubah variabel menjadi plural
        return view('admin.detailsewa.riwayatsewa', compact('mobil', 'customers')); // Menambahkan koma yang hilang
    }
    public function getLatitudeLongitude($id)
    {
        $mobil = DataMobil::findOrFail($id);
        $mitra = $mobil->akun; // Assuming DataMobil has a relation 'akun' with DataMitra

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

}
