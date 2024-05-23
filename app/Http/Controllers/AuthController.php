<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\DataMitra;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('dashboard'); // Redirect to a protected route after successful login
        }

        return back()->withErrors([
            'message' => 'Invalid credentials, please try again.',
        ]);
    }

    public function prosesdaftar(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:tb_akun',
            'password' => 'required|min:6|confirmed',
            'nama_lengkap' => 'required',
            'nomor_hp' => 'required',
            'nama_toko' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);
    
        try {
            $user = DataMitra::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'nama_lengkap' => $request->nama_lengkap,
                'nomor_hp' => $request->nomor_hp,
                'nama_toko' => $request->nama_toko,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'status_akun' => 0, // Assuming default status
                'id_lvl' => 3, // Assuming a default level ID
                'tgl_daftar' => now(),
            ]);
    
            // Autentikasi pengguna setelah mendaftar
            auth()->login($user);
    
            // Tampilkan pesan sukses
            Alert::success('Pendaftaran Berhasil', 'Selamat, Anda telah berhasil mendaftar!')->autoclose(3000);
    
            // Redirect ke halaman login
            return redirect()->route('login.index');
        } catch (\Exception $e) {
            // Tangani kesalahan dan tampilkan pesan kesalahan jika ada
            Alert::error('Error', 'Terjadi kesalahan saat melakukan pendaftaran. Silakan coba lagi.')->autoclose(3000);
            return back()->withErrors(['message' => $e->getMessage()]);
        }
    }
    
}
