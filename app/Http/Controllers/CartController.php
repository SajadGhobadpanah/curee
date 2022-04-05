<?php

namespace App\Http\Controllers;


use App\Helper\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function cart()
    {
        $this->seo()->setTitle('سبد خرید');
        return view('home.cart');
    }

    public function add(Product $product)
    {


        if (Cart::has($product)) {
            if (Cart::count($product) < $product->inventory)
                Cart::update($product, 1);
        } else {
            Cart::put(
                [
                    'quantity' => 1,
                ],
                $product
            );
        }

        alert()->success('محصول مورد نظر با موفقیت به سبد خرید شما افزوده شد!')->persistent('عالیه');
        return redirect(route('cart'));
    }

    public function quantityChange(Request $request)
    {
        $data = $request->validate([
            'quantity' => 'required',
            'id' => 'required',
//           'cart' => 'required'
        ]);

        if (Cart::has($data['id'])) {
            Cart::update($data['id'], [
                'quantity' => $data['quantity']
            ]);

            return response(['status' => 'success']);
        }

        return response(['status' => 'error'], 404);
    }

    public function delete($id)
    {
        Cart::destroy($id);
        return back();


    }
}
