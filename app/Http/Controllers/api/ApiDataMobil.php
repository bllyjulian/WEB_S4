<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataMobil;

class ApiDataMobil extends Controller
{
    public function index()
    {
        $mobils = DataMobil::all();
        return response()->json($mobils);
    }
    public function show($username)
    {
        $mobils = DataMobil::where('username', $username)->get();
        if ($mobils->isEmpty()) {
            return response()->json(['message' => 'Toko ini tidak memiliki mobil'], 404);
        }
        return response()->json($mobils);
    }
}