<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\DataCustomer;
use App\Models\DataBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAdminController extends Controller
{
    public function customer()
    {
        $user = Auth::user();
        $customers = DataBooking::with(['usermb'])
             ->where('username', $user->username)
            ->selectRaw('username_mb, COUNT(*) as penyewaan_count')
            ->groupBy('username_mb')
            ->get()
            ->map(function($data) {
                return [
                    'username_mb' => $data->username_mb,
                    'foto_profil' => $data->usermb->foto_profil,
                    'nama' => $data->usermb->nama,
                    'email' => $data->usermb->email,
                    'nomor_hp_user' => $data->usermb->nomor_hp_user,
                    'tgl_lahir' => $data->usermb->tgl_lahir,
                    'domisili' => $data->usermb->domisili,
                    'penyewaan_count' => $data->penyewaan_count,
                ];
            });

        return view('admin.customer.index', compact('customers'));
    }
}
