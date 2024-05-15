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
}