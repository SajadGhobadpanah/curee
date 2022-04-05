<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage-slides');
    }
    public function index()
    {
        $slides = Slide::latest()->paginate(10);
        return view('admin.slides.all', compact('slides'));
    }


    public function create()
    {
        return view('admin.slides.create');
    }


    public function store(Request $request)
    {

        $valiData = $request->validate([
            'images .*.image' => 'required',
            'images .*.alt' => 'required|min:5'
        ]);

        collect($request['images'])->each(function ($item) {
            Slide::create($item);
        });
        return redirect(route('admin.slides.index'));

    }

    public function show($id)
    {
        //
    }


    public function edit(Slide $slide)
    {
        return view('admin.slides.edit', compact('slide'));

    }


    public function update(Request $request, Slide $slide)
    {
        $valiData = $request->validate([
            'images .*.image' => 'required',
            'images .*.alt' => 'required|min:5'
        ]);

        collect($request['images'])->each(function ($item) use ($slide) {
            $slide->update($item);
        });
        return redirect(route('admin.slides.index'));

    }


    public function destroy(Slide $slide)
    {
        $slide->delete();
        return back();
    }
}
