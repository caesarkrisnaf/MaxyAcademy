<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\Charge;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function makePayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $charge = Charge::create([
            'amount' => $request->amount,
            'currency' => 'usd',
            'source' => $request->stripeToken,
            'description' => 'Payment for Order ID: ' . $request->order_id,
        ]);

        return response()->json($charge);
    }
}
