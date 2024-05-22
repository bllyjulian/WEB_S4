<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataMitra;

class ApiDataMitra extends Controller
{
    public function index()
    {
        $mitras = DataMitra::all();
        return response()->json($mitras);
    }

    public function show($username)
    {
        $mitra = DataMitra::findOrFail($username);
        return response()->json($mitra);
    }
}
