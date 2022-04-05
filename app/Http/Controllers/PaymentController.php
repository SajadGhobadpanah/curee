<?php

namespace App\Http\Controllers;

use App\Helper\Cart\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function payment()
    {
        $cart = Cart::all();

        if ($cart->count()) {
            $price = $cart->sum(function ($sum) use ($cart) {
                return $sum['discount_percent'] == 0
                    ?
                    $sum['product']->percent ? ($sum['product']->price - ($sum['product']->price * $sum['product']->percent / 100)) * $sum['quantity'] : $sum['product']->price * $sum['quantity']
                    :
                    ($sum['product']->percent ? (($sum['product']->price - ($sum['product']->price * $sum['product']->percent / 100) - ($sum['product']->price - ($sum['product']->price * $sum['product']->percent / 100)) * $sum['discount_percent'])) * $sum['quantity'] : ($sum['product']->price - ($sum['product']->price * $sum['discount_percent'])) * $sum['quantity']);


            });

            $orderItems = $cart->mapWithKeys(function ($cart) {
                return [$cart['product']->id => ['quantity' => $cart['quantity']]];
            });

            $order = auth()->user()->orders()->create([
                'price' => $price,
                'status' => 'unpaid'
            ]);
            $order->products()->attach($orderItems);

            $res_number = Str::random();

            $token = config('services.PAYPING.token');
            $args = [
                "amount" => $price,
                "payerName" => auth()->user()->name,
                "returnUrl" => route('payment.callback'),
                "clientRefId" => $res_number,
            ];

            $payment = new \PayPing\Payment($token);

            try {
                $payment->pay($args);
            } catch (\Exception $e) {
                var_dump($e->getMessage());
            }
            $order->payments()->create([
                'res_number' => $res_number
            ]);
            Cart::flush();
            alert()->error(' با عرض پوزش انتقال به درگاه پرداخت انجام نشد! لطفا دقایقی بعد از طریق منوی کاربری خود اقدام به پرداخت این خرید کنید')->persistent('تایید');
            return back();
            return redirect($payment->getPayUrl());

        }
        return back();
    }

    public function callback(Request $request)
    {
        $token = config('services.PAYPING.token');
        $pay = Payment::where('res_number', $request->clientrefid)->firstOrFail();

        $payment = new \PayPing\Payment($token);

        try {
            if ($payment->verify($request->refid, $pay->order()->price)) {
                $pay->update([
                    'status' => 1
                ]);
                $pay->order->update([
                    'status' => 'paid'
                ]);
                alert()->success('پرداخت شما موفق بود');
                return redirect('/');
            } else {
                alert()->error('پرداخت شما تایید نشد');
                return redirect('/');
            }
        } catch (\Exception $e) {
            $errors = collect(json_decode($e->getMessage(), true));

            alert()->error($errors->first());
            return redirect('/');
        }

    }

}
