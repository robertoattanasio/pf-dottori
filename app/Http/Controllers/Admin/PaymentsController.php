<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Braintree\Transaction;
use App\Boost;
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
            $id = Boost::where('price', $import)->first()['id'];
            // dd($id);
            Auth::user()->boosts()->sync($id);
        } 

        return view('admin.resultpayment', compact('status'));    
    }
}

