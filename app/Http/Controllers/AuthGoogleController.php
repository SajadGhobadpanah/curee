<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\TwoFactorAuth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Mockery\Exception;

class AuthGoogleController extends Controller
{
    use TwoFactorAuth;

    public function login()
    {
        return Socialite::driver('google')->redirect();

    }

    public function callback(Request $request)
    {
        try {
            $googleuser = Socialite::driver('google')->user();

            $user = User::where('email', $googleuser->email)->first();

            if (!$user) {
                $user = User::create([
                    'name' => $googleuser->name,
                    'email' => $googleuser->email,
                    'password' => bcrypt(Str::random(16)),
                    'type' => 'off'
                ]);
            }
            if (!$user->hasVerifiedEmail()) {
                $user->markEmailAsVerified();
            }
            auth()->loginUsingId($user->id);
            return $this->authenticatedTrait($request, $user) ?: redirect('/');
//            alert()->success('ورود با حساب گوگل موفقیت آمیز بود', 'ورود موفق')->persistent('تایید');
//
//            return redirect('/');

        } catch (Exception $e) {
            alert()->error('ورود با حساب گوگل موفقیت آمیز نبود', 'ورود نا موفق')->persistent('تایید');
        }
    }

    public function sa()
    {
        return view('sajad');
    }
}
