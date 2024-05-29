<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataMitra;

class ApiDataMitra extends Controller
{
    public function index()
    {
        $mitras = DataMitra::where('id_lvl', 3)->get();
        return response()->json($mitras);
    }

    public function show($username)
    {
        $mitra = DataMitra::where('username', $username)->where('id_lvl', 3)->firstOrFail();
        return response()->json($mitra);
    }
}
