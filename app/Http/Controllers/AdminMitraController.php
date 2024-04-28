<?php

namespace App\Http\Controllers;
use App\Models\DataCustomer;
use Illuminate\Http\Request;

class AdminMitraController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
    public function customer()
    {
        $customer = DataCustomer::all();
        return view('admin.customer.index', compact('customer'));
    }
    public function orderan()
    {
        return view('admin.orderan.index');
    }
    public function mobil()
    {
        return view('admin.mobil.index');
    }
    public function tambahmobil()
    {
        return view('admin.mobil.tambahmobil');
    }
    public function inbox()
    {
        return view('admin.inbox.index');
    }
    public function sewa()
    {
        return view('admin.detailsewa.index');
    }
    public function riwayatsewa()
    {
        return view('admin.detailsewa.riwayatsewa');
    }
    
}
