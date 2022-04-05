<?php

namespace App\Http\Controllers;

use App\Helper\Cart\Cart;
use App\Models\Order;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('سفارشات');
        $orders = auth()->user()->orders()->latest()->paginate(10);;
        return view('profile.orders', compact('orders'));
    }

    public function detail(Order $order)
    {


        $orderdetails = $order->products()->latest()->paginate(10);

        return view('profile.orderdetail', compact('orderdetails'));

    }


    public function payment(Order $order)
    {


        $res_number = Str::random();

        $token = config('services.PAYPING.token');
        $args = [
            "amount" => $order->price,
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
}
