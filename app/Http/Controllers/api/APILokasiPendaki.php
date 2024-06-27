<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPendaki;

class APILokasiPendaki extends Controller
{
    public function index()
    {
        $datapendaki = DataPendaki::all();
        return response()->json($datapendaki);
    }
    public function updateLocation(Request $request, $id)
{
    $data = $request->validate([
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ]);

    $datapendaki = DataPendaki::find($id);
    if (!$datapendaki) {
        return response()->json(['message' => 'Data Pendaki not found.'], 404);
    }

    $datapendaki->latitude = $data['latitude'];
    $datapendaki->longitude = $data['longitude'];
    $datapendaki->save();

    return response()->json(['message' => 'Data lokasi telah diperbarui.', 'data' => $datapendaki]);
}

}
