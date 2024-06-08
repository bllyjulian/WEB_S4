<?php

namespace App\Http\Controllers\Mobilink;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardMobilinkController extends Controller
{
    public function index()
    {
        return view('mobilink.dashboard.index');
    }
}
