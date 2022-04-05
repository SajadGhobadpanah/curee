<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ActiveCode;
use App\Providers\RouteServiceProvider;
use App\Rules\RecaptchaRule;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, TwoFactorAuth;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request, $user)
    {


        return $this->authenticatedTrait($request, $user);


    }

    protected function validateLogin(Request $request)
    {

        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
//            'g-recaptcha-response' => 'required'
//                [ 'required',new RecaptchaRule]
        ]);
//        , ['g-recaptcha-response . required' => 'بزن']
    }
}