<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialization;
use App\User;
use App\Mark;
use App\Review;
use App\Message;
use App\Boost;

class GuestController extends Controller
{

    public function index()
    {
        $boosts = Boost::all();
        $users = User::all();
        $data = Specialization::all();
        $specializations = [];
        $sponsorized_users = [];

        for ($i = 0; $i < count($users); $i++) {

            foreach ($boosts as $boost) {

                if ($users[$i]->boosts->contains($boost)) {
                    
                    // dd($users[$i]);

                    $somma_voti = 0;
                    $media_voti = 0;
                    $numero_recensioni = 0;
                    $reviews = Review::where('user_id', $users[$i]['id'])->get();
                    foreach ($reviews as $review) {
                        $somma_voti += Mark::where('id', $review['mark_id'])->first()['mark'];
                    }
                    if (count($reviews) != 0) {
                        $media_voti = $somma_voti/count($reviews);
                    }
        
                    $users[$i]['media_voti'] = $media_voti;
                    $users[$i]['numero_recensioni'] = count($reviews);
        
                    array_push($sponsorized_users, $users[$i]);
                }    

            }

        }

        foreach ($data as $name) {
            array_push($specializations, $name->name);
        }

        sort($specializations, SORT_REGULAR);
        // dd($specializations);

        return view('guest.index', compact('specializations'), compact('sponsorized_users'));
    }

    public function filter_specialization(Request $request) {
        $data = $request->all();
        // dd($data);
        $users = [];
        $contatore = 0;
        $boosts = Boost::all();
        // dd($boosts);
        $specialization = Specialization::where('name', $data['specialization'])->first();
        $request_users = $specialization->users()->get()->toArray();

        for ($i = 0; $i < count($request_users); $i++) {
            $somma_voti = 0;
            $media_voti = 0;
            $numero_recensioni = 0;
            $reviews = Review::where('user_id', $request_users[$i]['id'])->get();
            foreach ($reviews as $review) {
                $somma_voti += Mark::where('id', $review['mark_id'])->first()['mark'];
            }
            if (count($reviews) != 0) {
                $media_voti = $somma_voti/count($reviews);
            }

            $request_users[$i]['media_voti'] = $media_voti;
            $request_users[$i]['numero_recensioni'] = count($reviews);
            
            array_push($users, $request_users[$i]);
        }

        for ($i = 0; $i < count($users); $i++) {
            $user = User::where('id', $users[$i])->first();

            foreach ($boosts as $boost) {

                if ($user->boosts->contains($boost)) {
                    // dd($user);
                    $somma_voti = 0;
                    $media_voti = 0;
                    $numero_recensioni = 0;
                    $reviews = Review::where('user_id', $user['id'])->get();
                    foreach ($reviews as $review) {
                        $somma_voti += Mark::where('id', $review['mark_id'])->first()['mark'];
                    }
                    if (count($reviews) != 0) {
                        $media_voti = $somma_voti/count($reviews);
                    }
        
                    $user['media_voti'] = $media_voti;
                    $user['numero_recensioni'] = count($reviews);
                    // dd($user);
                    $v = $users[$contatore];
                    // dd($v);
                    $users[$contatore] = $user;
                    // dd($users[$contatore]);
                    $users[$i] = $v;
                    $contatore += 1;
                    // dd($contatore);
                }    

            }

        }

        // dd($users);

        // dd(compact('users'));

        return view('guest.doctors', compact('users'));
    }
    
    public function infoDoctor($id)
    {
        // dd($id);
        $user = User::where('id', $id)->first();
        $reviews = Review::where('user_id', $user['id'])->get()->toArray();
        // dd($reviews);
        $somma_voti = 0;
        $media_voti = 0;
        $numero_recensioni = 0;
        $reviews = Review::where('user_id', $user['id'])->get();
        foreach ($reviews as $review) {
            $somma_voti += Mark::where('id', $review['mark_id'])->first()['mark'];
        }
        if (count($reviews) != 0) {
            $media_voti = $somma_voti/count($reviews);
        }

        $user['media_voti'] = $media_voti;
        $user['numero_recensioni'] = count($reviews);

        // dd(compact('user'));
        return view('guest.infoDoctor', compact('user'), compact('reviews'));
    }


    public function contactIt($id)
    {
        // dd($id);
        return view('guest.contactit', compact('id'));
    }

    public function sendRequest(Request $request, $id)
    {
        // dd($id);
        // dd($request);
        $data = $request->all();
        $user = User::where('id', $id)->first();
        $somma_voti = 0;
        $media_voti = 0;
        $numero_recensioni = 0;
        $reviews = Review::where('user_id', $user['id'])->get();
        foreach ($reviews as $review) {
            $somma_voti += Mark::where('id', $review['mark_id'])->first()['mark'];
        }
        if (count($reviews) != 0) {
            $media_voti = $somma_voti/count($reviews);
        }

        $user['media_voti'] = $media_voti;
        $user['numero_recensioni'] = count($reviews);

        $user_id = $user['id']; 

        $new_message = new Message;

        $new_message->fill($data);
        $new_message['user_id'] = $user_id;
        $new_message->save();

        return view('guest.infoDoctor', compact('user'), compact('reviews'));
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
        $user = User::where('id', $id)->first();
        $somma_voti = 0;
        $media_voti = 0;
        $numero_recensioni = 0;
        $reviews = Review::where('user_id', $user['id'])->get();
        foreach ($reviews as $review) {
            $somma_voti += Mark::where('id', $review['mark_id'])->first()['mark'];
        }
        if (count($reviews) != 0) {
            $media_voti = $somma_voti/count($reviews);
        }

        $user['media_voti'] = $media_voti;
        $user['numero_recensioni'] = count($reviews);

        $user_id = $user['id'];
        $mark_id = Mark::where('mark', $data['mark'])->first()['id'];
        // dd($mark_id);
        // dd($data);
        $new_review = new Review;

        $new_review->fill($data);
        $new_review['user_id'] = $user_id;
        $new_review['mark_id'] = $mark_id;
        // dd($new_review);
        $new_review->save();
        return view('guest.infoDoctor', compact('user'), compact('reviews'));
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
