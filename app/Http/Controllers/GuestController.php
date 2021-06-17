<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function index()
    {
        return view('guest.index');
    }
    
    public function doctors()
    {
        return view('guest.doctors');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function faq()
    {
        return view('guest.faq');
    }

    public function terms()
    {
        return view('guest.terms');
    }
}
