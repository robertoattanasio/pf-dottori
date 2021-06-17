<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Specialization;
use App\Boost;
// Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard-about');
    }

    public function sponsorizeUser() {
        $boosts = Boost::all();
        return view('admin.boost', compact('boosts'));
    }

    public function addSponsorization(Request $request) {
        dd($request);
        return view('admin.dashboard-about');
    }

    public function editUser() {
        $specializations = Specialization::all();
        // dd(compact('specializations'));
        return view('admin.user.edit', compact('specializations'));
    }

    public function updateUser(Request $request) {
        $data = $request->all();
        Auth::user()->update($data);
        // dd($data);

        if (array_key_exists('specializations', $data)) {
            // dd($data['specializations']);
            Auth::user()->specializations()->sync($data['specializations']);
        } else {
            Auth::user()->specializations()->sync([]);
        }

        return redirect()->route('dashboard-about');
    }
}
