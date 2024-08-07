<?php
namespace App\Http\Controllers;

use App\Models\DataMitra;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function halamandaftar()
    {
        return view('login.daftar');
    }
    public function proseslogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->id_lvl === 3) {
                switch ($user->status_akun) {
                    case 0:
                        // Akun belum disetujui oleh admin
                        return response()->json(['success' => false, 'message' => 'Akun Anda belum disetujui oleh admin.'], 401);
                    case 1:
                        // Akun aktif dan dapat login
                        $request->session()->put('user', $user);
                        return response()->json(['success' => true, 'redirect' => route('admin.dashboard'), 'message' => 'Login berhasil!'], 200);
                    case 2:
                        // Akun dibanned oleh admin
                        return response()->json(['success' => false, 'message' => 'Akun Anda dibanned oleh admin.'], 401);
                    case 3:
                        // Akun ditolak oleh admin
                        return response()->json(['success' => false, 'message' => 'Akun Anda ditolak oleh admin.'], 401);
                    default:
                        return response()->json(['success' => false, 'message' => 'Status akun tidak valid.'], 401);
                }
            } else {
                return response()->json(['success' => true, 'redirect' => route('mobilink.dashboard'), 'message' => 'Login berhasil!'], 200);
            }
        } else {
            return response()->json(['success' => false, 'message' => 'Username atau password salah!'], 401);
        }
    }
    
    
    
    public function daftar(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'nama_toko' => 'required|string|max:255',
            'nama_lengkap' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:255',
            'latitude' => 'required|string|max:255',
            'longitude' => 'required|string|max:255',
            'status_akun' => 'numeric',
            'id_lvl' => 'numeric'
        ]);
    
        // Hash password
        $hashedPassword = Hash::make($validatedData['password']);
        $validatedData['password'] = $hashedPassword;
    
        $validatedData['status_akun'] = 0;
        $validatedData['id_lvl'] = 3; 
    
        DataMitra::create($validatedData);
        return response()->json(['success' => true, 'message' => 'Registrasi berhasil!'], 200);
    }
}
