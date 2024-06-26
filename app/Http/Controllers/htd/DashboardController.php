<?php
namespace App\Http\Controllers\htd;
use App\Http\Controllers\Controller;
use App\Models\DataLaporan;
use App\Models\DataPendaki;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $laporan = DataLaporan::with('pendaki') // Load relasi pendaki
        ->orderBy('timestamp', 'desc') // Urutkan berdasarkan timestamp descending
        ->get();
        $datapendaki = DataPendaki::all(); 
    return view('htdgemastik.dashboard.index', compact('datapendaki', 'laporan'));
    }
}
