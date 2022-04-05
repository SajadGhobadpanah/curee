<?php

namespace App\Http\Controllers\Admin;

use Alexusmai\LaravelFileManager\Events\Download;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductGallery;
use http\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductGalleryController extends Controller
{

    public function index(Product $product)
    {
        $products = $product->galleries()->get();

        return view('admin.products.galleries.all', compact('products', 'product'));
    }


    public function create(Product $product)
    {
        return view('admin.products.galleries.create', compact('product'));
    }


    public function store(Request $request, Product $product)
    {


        $valiDate = $request->validate([
            'images.*.image' => 'required',
            'images.*.alt' => 'required|min:4',
        ]);

        collect($valiDate['images'])->each(function ($item) use ($product) {
            $product->galleries()->create($item);
        });

        return redirect(route('admin.product.gallery.index', $product->id));
    }


    public function show($id)
    {


    }

    public function edit(Product $product, ProductGallery $gallery)
    {
        return view('admin.products.galleries.edit', compact('product', 'gallery'));
    }


    public function update(Request $request, Product $product, ProductGallery $gallery)
    {
        $valiDate = $request->validate([
            'images.*.image' => 'required',
            'images.*.alt' => 'required|min:4',
        ]);


        collect($valiDate['images'])->each(function ($item) use ($product) {
            $product->galleries()->update($item);
        });

        return redirect(route('admin.product.gallery.index', $product->id));
    }


    public function destroy(Product $product, ProductGallery $gallery)
    {
        $gallery->delete();
        return back();
    }

    public function sajad()
    {
//        echo 'sakaks';
//     Storage::download(\request('path'));


    }

    public function sa()
    {
//        \Illuminate\Support\Facades\URL::temporarySignedRoute('download',now()->addSeconds(40),['file'=>\request('path')]);

    }
}
