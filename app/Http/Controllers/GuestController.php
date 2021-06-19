<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
use App\User;
use App\Mark;
use App\Review;
// use App\Request;

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
    
    public function infoDoctor($id)
    {
        // dd($id);
        $user = User::where('id', $id)->first();
        // dd(compact('user'));
        return view('guest.infoDoctor', compact('user'));
    }


    public function contactIt($id)
    {
        // dd($id);
        return view('guest.contactit', compact('id'));
    }

    public function sendRequest(Request $request, $id)
    {
        // dd($id);
        dd($request);
        // chiamato model uguale a "request"......... cambiare model request.......

    }

    public function reviewIt($id)
    {
        // dd($id);
        $marks = Mark::all();
        // dd($marks);
        return view('guest.reviewit', compact('id'), compact('marks'));
    }

    public function sendReview(Request $request, $id)
    {
        $data = $request->all();
        $user_id = User::where('id', $id)->first()['id'];
        $mark_id = Mark::where('mark', $data['mark'])->first()['id'];
        // dd($mark_id);
        // dd($data);
        $new_review = new Review;

        $new_review->fill($data);
        $new_review['user_id'] = $user_id;
        $new_review['mark_id'] = $mark_id;
        dd($new_review);
        // sistemare la tabella reviews.......... cambiare nome.......
        // $new_review->save();
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
