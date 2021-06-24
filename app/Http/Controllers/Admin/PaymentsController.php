<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Transaction;

class PaymentsController extends Controller
{
    public function make(Request $request)
    {
        dd($request);
        $import = $request->all()['import'];
        $payload = $request->input('payload', false);
        $nonce = $payload['nonce'];
        $status = Transaction::sale([
            'amount' => $import,
            'paymentMethodNonce' => $nonce,
            'options' => [
                        'submitForSettlement' => True
                        ]
        ]);
        return response()->json($status);    
    }
}

// $import = $request->all()['import'];
// $user = Auth::user();
// $user->createAsBraintreeCustomer();
// $user->charge(1, [
//     'custom_option' => $import,
// ]);        
// return response()->json($user);    

