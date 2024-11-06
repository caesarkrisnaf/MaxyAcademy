<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TwoFactorController extends Controller
{
    
    public function index() {
        $user = auth()->user();
        $code = rand(100000, 9999999);
        $user->two_factor_code = $code;
        $user->save();

        Mail::raw("Your two-factor code is $code", function ($message) use ($user) {
            $message->to($user->email)->subject('Two-Factor Code');
        });

        return view("auth.two-factor-auth");
    }
    
    public function verify(Request $request) {
        $request->validate([
            'code' => "required|integet",
        ]);

        $user = auth()->user();

        if($request->code == $user->two_factor_code) {
            session(["two_factor_authenticated" => true]);
            return redirect()->intended('cek-role');
        }

        return redirect()->route('two-factor.index')->withError(["code" => "The Provided code is incorrect."]);

    }
    
}
