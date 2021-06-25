<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Transaction;
use App\Boost;
use App\Receipt;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    public function make(Request $request)
    {
        // dd($request);
        $import = $request->all()['import'];
        $nonce = $request->all()['payment_method_nonce'];
        $status = Transaction::sale([
            'amount' => $import,
            'paymentMethodNonce' => $nonce,
            'options' => [
                        'submitForSettlement' => True
                        ]
        ]);

        if ($status->success == true) {
            $boost = Boost::where('price', $import)->first();
            // dd($id);
            Auth::user()->boosts()->sync($boost['id']);

            $receipt = new Receipt();

            $receipt->user_id = Auth::user()->id;
            $receipt->name = Auth::user()->name;
            $receipt->surname = Auth::user()->surname;
            $receipt->phone_number = Auth::user()->phone_number;
            $receipt->created_at = date("Y-m-d h:i:sa");
            $receipt->expires_at = date("Y-m-d h:i:sa", strtotime('+' . $boost['hours'] . ' hours'));
            // dd($receipt);
            $receipt->save();
        } 

        return view('admin.resultpayment', compact('status'));    
    }
}

