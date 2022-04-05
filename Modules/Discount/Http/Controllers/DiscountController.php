<?php

namespace Modules\Discount\Http\Controllers;

use App\Helper\Cart\Cart;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Discount\Entities\Discount;

class DiscountController extends Controller
{
    public function check(Request $request)
    {
        $request->validate([
            'code' => 'required|exists:discounts,code'
        ]);


        $discount = Discount::wherecode($request['code'])->first();


        if (!auth()->check()) {
            return back()->withErrors([
                'code' => 'لطفا برای بررسی کد وارد سایت شوید!'
            ]);
        }


        if ($discount->expired_at < now()) {
            return back()->withErrors([
                'code' => 'این کد منقضی شده است!'
            ]);
        }

        if ($discount->users->count()) {
            if (!in_array(auth()->user()->id, $discount->users->pluck('id')->toArray())) {
                return back()->withErrors([
                    'code' => 'این کد برای شما قابل استفاده نمیباشد!'
                ]);
            }
        }
        $cart = Cart::addDiscount($discount->code);
        return back();


    }

    public function delete()
    {
        $cart = Cart::addDiscount(null);
        return back();
    }

//    public function index()
//    {
//        return view('discount::index');
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     * @return Renderable
//     */
//    public function create()
//    {
//        return view('discount::create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     * @param Request $request
//     * @return Renderable
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Show the specified resource.
//     * @param int $id
//     * @return Renderable
//     */
//    public function show($id)
//    {
//        return view('discount::show');
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     * @param int $id
//     * @return Renderable
//     */
//    public function edit($id)
//    {
//        return view('discount::edit');
//    }
//
//    /**
//     * Update the specified resource in storage.
//     * @param Request $request
//     * @param int $id
//     * @return Renderable
//     */
//    public function update(Request $request, $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     * @param int $id
//     * @return Renderable
//     */
//    public function destroy($id)
//    {
//        //
//    }
}
