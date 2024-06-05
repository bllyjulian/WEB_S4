<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataMobil;
use App\Models\DataMitra;

class ApiDataMobil extends Controller
{
    public function index()
    {
        $mobils = DataMobil::with('akun')->get();
        $mobils = $mobils->map(function ($mobil) {
            return [
                'id_mobil' => $mobil->id_mobil,
                'nama_mobil' => $mobil->nama_mobil,
                'kapasitas_penumpang' => $mobil->kapasitas_penumpang,
                'warna' => $mobil->warna,
                'harga_sewa_perhari' => $mobil->harga_sewa_perhari,
                'tipe' => $mobil->tipe,
                'bahan_bakar' => $mobil->bahan_bakar,
                'kecepatan' => $mobil->kecepatan,
                'transmisi' => $mobil->transmisi,
                'foto_mobil' => $mobil->foto_mobil,
                'username' => $mobil->username,
                'latitude' => $mobil->akun->latitude ?? null,
                'longitude' => $mobil->akun->longitude ?? null,
                'nama_toko' => $mobil->akun->nama_toko ?? null,
                'logo_mitra' => $mobil->akun->logo_mitra ?? null
            ];
        });

        return response()->json($mobils);
    }

    public function show($username)
    {
        $mobils = DataMobil::where('username', $username)->with('akun')->get();

        if ($mobils->isEmpty()) {
            return response()->json(['message' => 'Toko ini tidak memiliki mobil'], 404);
        }

        $mobils = $mobils->map(function ($mobil) {
            return [
                'id_mobil' => $mobil->id_mobil,
                'nama_mobil' => $mobil->nama_mobil,
                'kapasitas_penumpang' => $mobil->kapasitas_penumpang,
                'warna' => $mobil->warna,
                'harga_sewa_perhari' => $mobil->harga_sewa_perhari,
                'tipe' => $mobil->tipe,
                'bahan_bakar' => $mobil->bahan_bakar,
                'kecepatan' => $mobil->kecepatan,
                'transmisi' => $mobil->transmisi,
                'foto_mobil' => $mobil->foto_mobil,
                'username' => $mobil->username,
                'nama_lengkap' => $mobil->akun->nama_lengkap ?? null,
                'nomor_hp' => $mobil->akun->nomor_hp ?? null,
                'nama_toko' => $mobil->akun->nama_toko ?? null,
                'latitude' => $mobil->akun->latitude ?? null,
                'longitude' => $mobil->akun->longitude ?? null,
                'logo_mitra' => $mobil->akun->logo_mitra ?? null
            ];
        });
        return response()->json($mobils);
    }
}