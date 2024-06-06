<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\DataCustomer;
use App\Models\DataBooking;
use Illuminate\Http\Request;

class CustomerAdminController extends Controller
{
    public function customer()
    {
        $customers = DataBooking::with(['user'])
            ->selectRaw('username_mb, COUNT(*) as penyewaan_count')
            ->groupBy('username_mb')
            ->get()
            ->map(function($data) {
                return [
                    'username_mb' => $data->username_mb,
                    'foto_profil' => $data->user->foto_profil,
                    'nama' => $data->user->nama,
                    'email' => $data->user->email,
                    'nomor_hp_user' => $data->user->nomor_hp_user,
                    'tgl_lahir' => $data->user->tgl_lahir,
                    'domisili' => $data->user->domisili,
                    'penyewaan_count' => $data->penyewaan_count,
                ];
            });

        return view('admin.customer.index', compact('customers'));
    }
}
