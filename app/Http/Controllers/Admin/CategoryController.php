<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-categories');
    }

    public function index()
    {
        $categories = Category::where('parent', 0)->get();

        return view('admin.categories.allcategories', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.createcategory');
    }


    public function store(Request $request, Category $category)
    {
        $valiData = $request->validate([
            'name' => 'required'
        ]);

        if ($request['parent']) {
            $request->validate([
                'parent' => 'exists:categories,id'
            ]);
            $valiData['parent'] = $request['parent'];
        }

        Category::create($valiData);

        return redirect(route('admin.categories.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit(Category $category)
    {
        return view('admin.categories.editcategory', compact('category'));
    }


    public function update(Request $request, Category $category)
    {

        $valiData = $request->validate([
            'name' => 'required'
        ]);


        if ($request['parent']) {
            $request->validate([
                'parent' => 'exists:categories,id'
            ]);
            $valiData['parent'] = $request['parent'];
        }

        $category->update($valiData);

        return redirect(route('admin.categories.index'));
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
