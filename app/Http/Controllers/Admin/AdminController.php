<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Specialization;
use App\Boost;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
// Use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{

    // protected function validator($data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z ]+$/'],
    //         'surname' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z ]+$/'],
    //         'address' => ['required', 'string', 'max:200', 'regex:/^[a-zA-Z ]+$/'],
    //         'street_number' => ['required', 'integer', 'regex:/^[0-9]+$/'],
    //         'city' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z ]+$/'],
    //         'county' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z ]+$/'],
    //         'phone_number' => ['required', 'string'],
    //         'email' => ['required', 'string', 'email', 'max:50', 'unique:users', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
    //         'password' => ['required', 'string', 'min:8', 'max:500', 'confirmed'],
    //     ]);
    // }

    public function dashboard()
    {
        return view('admin.dashboard-about');
    }

    public function sponsorizeUser() {
        $boosts = Boost::all();
        return view('admin.boost', compact('boosts'));
    }

    public function addSponsorization(Request $request) {
        // dd($request);
        $boost = $request->all();
        // dd($boost);

        Auth::user()->boosts()->sync($boost['boost_stuff']);

        return redirect()->route('dashboard-about');
    }

    public function editUser() {
        $specializations = Specialization::all();
        // dd(compact('specializations'));
        return view('admin.user.edit', compact('specializations'));
    }

    public function updateUser(Request $request) {
        $data = $request->all();
        // $this->validator($data);
        // dd($data);

        // if (array_key_exists('profile_pic', $data)) {
        //     $image_path = Storage::put('post_images', $data['profile_pic']);
        //     $data['profile_pic'] = $image_path;
        //     // dd($data['profile_pic']);
        // }
        // else {
        //     $data['profile_pic'] = null;
        // }

        // if (array_key_exists('cv', $data)) {
        //     $file_path = Storage::put('post_files', $data['cv']);
        //     $data['cv'] = $file_path;
        // }
        // else {
        //     $data['cv'] = null;
        // }

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
