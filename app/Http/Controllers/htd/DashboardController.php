<?php
namespace App\Http\Controllers\htd;
use App\Http\Controllers\Controller;
use App\Models\DataPendaki;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $datapendaki = DataPendaki::all(); 
    return view('htdgemastik.dashboard.index', compact('datapendaki'));
    }
}
