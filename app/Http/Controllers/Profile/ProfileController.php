<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\ActiveCode;
use App\Models\User;
use App\Notifications\ActiveCodeNotification;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function profile()
    {
        $this->seo()
            ->setDescription('سایت cure سایتی از جنس سلامتی');

        return view('profile.main');

    }

    public function phone()
    {
        alert()->info('با عرض پوزش این قسمت به زودی تکمیل خواهد شد!')->persistent('تایید');
        return back();
        return view('profile.enablePhone');
    }

    public function enablePhone(Request $request)
    {
        $this->seo()
            ->setTitle('پروفایل کاربری');

        $data = $request->validate([
            'type' => 'required|in:off,sms',
            'phone' => ['required_unless:type,off', Rule::unique('users')->ignore($request->user()->id)]
        ]);
        if ($data['type'] === 'sms') {
            if ($request->user()->phone !== $data['phone']) {
                $code = ActiveCode::generateCode($request->user());
                $request->user()->notify(new ActiveCodeNotification($code, $data['phone']));
                $request->session()->flash('phone', $data['phone']);
                return redirect(route('profile.phone.code'));
            } else {
                $request->user()->update([
                    'type' => 'sms'
                ]);
            }
        }

        if ($data['type'] === 'off') {
            $request->user()->update([
                'type' => 'off'
            ]);
        }
        return back();

    }

    public function code(Request $request)
    {
        $this->seo()
            ->setTitle('دریافت کد');
        if (!$request->session()->has('phone')) {
            return redirect(route('profile.phone'));
        }
        $request->session()->reflash();
        return view('profile.code');
    }

    public function postCode(Request $request)
    {
        $this->seo()
            ->setTitle('دریافت کد');
        $request->validate([
            'code' => 'required|integer'
        ]);
        if (!$request->session()->has('phone')) {
            return redirect(route('profile.phone'));
        }

        $status = ActiveCode::verifyCode($request['code'], $request->user());

        if ($status) {
            $request->user()->activecodes()->delete();

            $request->user()->update([
                'phone' => $request->session()->get('phone'),
                'type' => 'sms'
            ]);
            alert()->success('شماره تلفن شما تایید شد', 'عملیات موفق')->persistent('تایید');
            return redirect(route('profile.phone'));
        } else {

            alert()->error('شماره تلفن شما تایید نشد', 'عملیات نا موفق')->persistent('تایید');
            return redirect(route('profile.phone'));
        }


    }
}
