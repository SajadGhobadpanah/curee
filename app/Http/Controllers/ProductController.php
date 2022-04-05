<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('محصولات');
        $products = Product::all();
        return view('home.products', compact('products'));
    }

    public function single(Product $product)
    {
        return view('home.singleproduct',compact('product'));
    }
}
