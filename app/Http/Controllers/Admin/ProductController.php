<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Permission;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-products');
    }

    public function index()
    {
        $product = Product::query();

        if ($search = \request('search')) {
            $product->where('title', 'LIKE', "%{$search}%")
                ->orWhere('content', 'LIKE', "%{$search}%")
                ->orWhere('id', $search);
        }
        $products = $product->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('admin.products.allproducts', compact('products'));
    }


    public function create()
    {
        return view('admin.products.createproduct');
    }

    public function store(Request $request)
    {


        $valiData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'inventory' => 'required',
            'percent' => 'nullable',
            'categories' => 'array',
            'attributes' => 'array',
            'image' => 'required'


        ]);

        $product = auth()->user()->products()->create($valiData);
        $product->categories()->sync($request['categories']);
        if ($request['attributes']) {


            $attributes = collect($valiData['attributes']);

            $attributes->each(function ($item) use ($product) {
                if (is_null($item['name']) || is_null($item['value'])) return;


                $attr = Attribute::create([
                    'name' => $item['name']
                ]);

                $attr_value = $attr->values()->create([
                    'value' => $item['value']
                ]);

                $product->attributes()->attach($attr->id, ['value_id' => $attr_value->id]);
            });
        }


        return redirect(route('admin.products.index'));
    }


    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {

//        return $product->attributes[0]->pivot->value_id;
        return view('admin.products.editproduct', compact('product'));
    }

    public function update(Request $request, Product $product)
    {

//        return $request->all();
        $valiData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'inventory' => 'required',
            'percent' => 'nullable',
            'categories' => 'array',
            'attributes' => 'array',

            'image' => 'required'

        ]);


        $product->update($valiData);
        $product->categories()->sync($request['categories']);


        if ($request['attributes']) {
            $product->attributes()->detach();


            $attributes = collect($valiData['attributes']);

            $attributes->each(function ($item) use ($product) {
                if (is_null($item['name']) || is_null($item['value'])) return;


                $attr = Attribute::create([
                    'name' => $item['name']
                ]);

                $attr_value = $attr->values()->create([
                    'value' => $item['value']
                ]);

                $product->attributes()->attach($attr->id, ['value_id' => $attr_value->id]);
            });
        }


        return redirect(route('admin.products.index'));
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
