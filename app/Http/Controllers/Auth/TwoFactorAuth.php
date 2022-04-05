<?php

namespace App\Http\Controllers\Auth;

use App\Models\ActiveCode;
use App\Notifications\ActiveCodeNotification;
use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;

trait TwoFactorAuth
{
    protected function authenticatedTrait(Request $request, $user)
    {
        if ($user->type != 'off') {
            auth()->logout();
            $request->session()->flash('auth', [
                'user_id' => $user->id,
                'using_sms' => false,
                'remember' => $request->has('remember')
            ]);
            if ($user->type == 'sms') {
                $code = ActiveCode::generateCode($user);
                $user->notify(new ActiveCodeNotification($code, $user->phone));
                $request->session()->push('auth.using_sms', true);
            }
            return redirect(route('code.login'));
        }
        $user->notify(new SendEmailNotification());
        return false;

    }

}
