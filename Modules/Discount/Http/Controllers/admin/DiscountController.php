<?php

namespace Modules\Discount\Http\Controllers\admin;

use App\Models\Permission;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Validation\Rule;
use Modules\Discount\Entities\Discount;

class DiscountController extends Controller
{

    public function index()
    {
        $discount = Discount::query();

        if ($search = \request('search')) {
            $discount->where('code', 'LIKE', "%{$search}%")
                ->orWhereHas('products', function ($item) use ($search) {
                    $item->where('title', 'LIKE', "%{$search}%");
                })
                ->orWhere('id', $search);
        }
        $discounts = $discount->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('discount::admin.discounts.alldiscount', compact('discounts'));
    }


    public function create()
    {
        return view('discount::admin.discounts.creatediscount');
    }


    public function store(Request $request)
    {
        $valiData = $request->validate([
            'code' => 'required|unique:discounts,code',
            'percent' => 'integer|required|between:1,99',
            'users' => 'nullable|array|exists:users,id',
            'categories' => 'nullable|array|exists:categories,id',
            'products' => 'nullable|array|exists:products,id',
            'expired_at' => 'required'
        ]);
        $discount = Discount::create($valiData);
        if ($request['users'])
            $discount->users()->attach($valiData['users']);
        if ($request['categories'])
            $discount->categories()->attach($valiData['categories']);
        if ($request['products'])
            $discount->products()->attach($valiData['products']);

        return redirect(route('admin.discounts.index'));
    }

    public function show($id)
    {

    }

    public function edit(Discount $discount)
    {

        return view('discount::admin.discounts.editdiscount', compact('discount'));

    }


    public function update(Request $request, Discount $discount)
    {
        $valiData = $request->validate([
            'code' => 'required', Rule::unique('discounts', 'code')->ignore($discount->id),
            'percent' => 'integer|required|between:1,99',
            'users' => 'nullable|array|exists:users,id',
            'categories' => 'nullable|array|exists:categories,id',
            'products' => 'nullable|array|exists:products,id',
            'expired_at' => 'required'
        ]);
        $discount->update($valiData);
        $request['users'] ?
            $discount->users()->sync($valiData['users']) : $discount->users()->detach();
        $request['categories'] ?
            $discount->categories()->sync($valiData['categories']) : $discount->categories()->detach();
        $request['products'] ?
            $discount->products()->sync($valiData['products']) : $discount->products()->detach();

        return redirect(route('admin.discounts.index'));
    }


    public function destroy(Discount $discount)
    {
        $discount->delete();
        return back();
    }
}
