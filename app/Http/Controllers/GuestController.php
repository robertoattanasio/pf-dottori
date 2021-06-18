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
        $users = [];
        $specialization = Specialization::where('name', $data['specialization'])->first();
        $request_users = $specialization->users()->get()->toArray();

        for ($i = 0; $i < count($request_users); $i++) {
            // dd($request_users[$i]['county']);
            // if ($data['county'] == $request_users[$i]['county']) {
                array_push($users, $request_users[$i]);
            // }

        }

        // dd($users);

        // dd(compact('users'));

        return view('guest.doctors', compact('users'));
    }
    
    // public function doctors()
    // {
    //     return view('guest.doctors');
    // }

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
