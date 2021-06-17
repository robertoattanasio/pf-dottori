<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Specialization;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator($data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z ]+$/'],
            'surname' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z ]+$/'],
            'address' => ['required', 'string', 'max:200', 'regex:/^[a-zA-Z ]+$/'],
            'street_number' => ['required', 'integer', 'regex:/^[0-9]+$/'],
            'city' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z ]+$/'],
            'county' => ['required', 'string', 'max:50', 'regex:/^[a-zA-Z ]+$/'],
            'phone_number' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users', 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'password' => ['required', 'string', 'min:8', 'max:500', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // $this->validator($data);
        // dd($data);
        if (array_key_exists('profile_pic', $data)) {
            $image_path = Storage::put('post_images', $data['profile_pic']);
            $data['profile_pic'] = $image_path;
            // dd($data['profile_pic']);
        }
        else {
            $data['profile_pic'] = null;
        }

        if (array_key_exists('cv', $data)) {
            $file_path = Storage::put('post_files', $data['cv']);
            $data['cv'] = $file_path;
        }
        else {
            $data['cv'] = null;
        }

        

        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'address' => $data['address'],
            'street_number' => $data['street_number'],
            'city' => $data['city'],
            'county' => $data['county'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'profile_pic' => $data['profile_pic'],
            'cv' => $data['cv'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
