<?php

namespace App\Http\Controllers;
use App\Models\DataMitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfilAdminController extends Controller
{
    public function index()
    {
        $user = Session::get('user');
        return view('admin.profil.index', compact('user'));
    }
    public function updateLogoMitra(Request $request)
    {
        $request->validate([
            'logo_mitra' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('logo_mitra')) {
            $imageName = time() . '.' . $request->logo_mitra->extension();
            $request->logo_mitra->move(public_path('assets/images/fp_mitra'), $imageName);
            $user->logo_mitra = 'assets/images/fp_mitra/' . $imageName;
            $user->save();

            return response()->json(['logo_mitra' => asset($user->logo_mitra)], 200);
        }

        return response()->json(['error' => 'Failed to upload logo.'], 400);
    }
}

