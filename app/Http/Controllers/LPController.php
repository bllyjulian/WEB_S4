<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LPController extends Controller
{
    public function index()
    {
    return view('index');
    }
    public function about()
    {
    return view('LP.about');
    }
    public function features()
    {
    return view('LP.features');
    }
    public function faq()
    {
    return view('LP.faq');
    }
    public function contact()
    {
    return view('LP.contact');
    }
    public function pp()
    {
    return view('LP.privacy-policy');
    }
}
