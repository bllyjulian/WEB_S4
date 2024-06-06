<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\DataCustomer;
use Illuminate\Http\Request;

class CustomerAdminController extends Controller
{
    public function customer()
    {
        $customers = DataCustomer::all();
        return view('admin.customer.index', compact('customers'));
    }
}
