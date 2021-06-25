<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Specialization;
use App\Boost;
use App\Message;
use App\Reviews;
use App\Mark;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Mail\SendNewMail;
use App\Review;
use Illuminate\Support\Facades\Mail;
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

    public function reviews()
    {
        $reviews = Review::where('user_id', Auth::user()->id)->get()->toArray();
        // dd($reviews);
        // foreach ($reviews as $review) {
        //     $mark = Mark::where('id', $review['mark_id'])->first()['mark'];
        //     $review['mark'] = $mark;
        //     // dd($review);
        // }
        // dd($reviews);
        return view('admin.reviews', compact('reviews'));
    }

    public function messages()
    {
        $messages = Message::where('user_id', Auth::user()->id)->get()->toArray();

        return view('admin.messages', compact('messages'));
    }

    public function infoMessage($email_patient)
    {
        // dd($email_patient);
        $message = Message::where('email_patient', $email_patient)->first();
        // dd($message);
        return view('admin.messageinfo', compact('message'));
    }

    public function messageSent(Request $request)
    {
        // dd($request);
        $message = $request->all();
        $message['doctor'] = 'Dr. ' . Auth::user()->name . ' ' . Auth::user()->surname;
        $message['email_doctor'] = Auth::user()->email;

        // dd($message);

        // ATTENZIONE, se non funziona il Mail::to() e' perche' c'e' un validatore automatico che verifica che la mail sia sintatticamente corretta!!!
        Mail::to($message['email_patient'])->send(new SendNewMail($message));

        $messages = Message::where('user_id', Auth::user()->id)->get()->toArray();

        return view('admin.messages', compact('messages'));
    }

    public function sponsorizeUser()
    {
        $boosts = Boost::all();
        return view('admin.boost', compact('boosts'));
    }

    public function addSponsorization(Request $request)
    {
        // dd($request);
        $boost = $request->all();
        // dd($boost);

        if (count($boost) > 2) {
            $import = Boost::where('id', $boost['boost_stuff'])->first()['price'];
            // dd($payment);    
            return view('admin.payment', compact('import'));    
        } else {
            return redirect()->route('boost-profile');    
        }

    }

    public function statistics()
    {
        $reviews = Review::where('user_id', Auth::user()->id)->get()->toArray();

        return view('admin.statistics', compact('reviews'));
    }

    public function editUser()
    {
        $specializations = Specialization::all();
        // dd(compact('specializations'));
        return view('admin.user.edit', compact('specializations'));
    }

    public function updateUser(Request $request)
    {
        $data = $request->all();
        // $this->validator($data);
        // dd($data);

        if (array_key_exists('profile_pic', $data)) {
            $image_path = Storage::put('post_images', $data['profile_pic']);
            $data['profile_pic'] = $image_path;
            // dd($data['profile_pic']);
        } else {
            $data['profile_pic'] = Auth::user()->profile_pic;
        }

        if (array_key_exists('cv', $data)) {
            $file_path = Storage::put('post_files', $data['cv']);
            $data['cv'] = $file_path;
        } else {
            $data['cv'] = Auth::user()->cv;
        }

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
