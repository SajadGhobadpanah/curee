<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ActiveCode;
use App\Models\User;
use Illuminate\Http\Request;

class AuthPhoneController extends Controller
{
    public function code(Request $request)
    {
        if (!$request->session()->has('auth'))
            return redirect(route('login'));

        $request->session()->reflash();
        return view('auth.code');
    }

    public function postcode(Request $request)
    {
        if (!$request->session()->has('auth'))
            return redirect(route('login'));
        $request->validate([
            'code' => 'integer|required'
        ]);

        $user = User::findOrFail($request->session()->get('auth.user_id'));

        $status = ActiveCode::verifyCode($request['code'], $user);

        if (!$status) {
            alert()->error('ورود موفقیت آمیز نبود', 'ورود نا موفق')->persistent('تایید');

            return redirect(route('login'));
        }
        if (auth()->loginUsingId($user->id, $request->session()->get('auth.remember'))) {
            $user->activecodes()->delete();
    alert()->success('ورود  موفقیت آمیز بود', 'ورود موفق')->persistent('تایید');

            return redirect('/');
        }

    }
}
