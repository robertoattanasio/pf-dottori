<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
use App\User;

class GuestController extends Controller
{

    public function index()
    {
        $data = Specialization::all();
        $specializations = [];

        foreach ($data as $name) {
            array_push($specializations, $name->name);
        }

        sort($specializations, SORT_REGULAR);
        // dd($specializations);

        return view('guest.index', compact('specializations'));
    }

    public function filter_specialization(Request $request) {
        $data = $request->all();
        // dd($data);
        $specialization = Specialization::where('name', $data['specialization'])->first();
        $users = $specialization->users()->get();
        // dd($specialization_id);
        // $users = User::where('', $specialization_id)->first();

        // per prendere tutti i dati usare ->get();
        dd($users);
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
