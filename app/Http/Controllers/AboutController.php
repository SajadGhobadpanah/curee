<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {

        $abouts = About::all();
        return view('admin.about.about', compact('abouts'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

    }


    public function show(About $about)
    {
        //
    }

    public function edit(About $about)
    {
        //
    }


    public function update(Request $request, About $about)
    {
        $request->validate([
            'about' => 'required'
        ]);

        $about->updateOrCreate([
            'id' => $about->id
        ], [
            'about' => $request['about']
        ]);
        return back();
    }

    public function destroy(About $about)
    {
        //
    }
}
