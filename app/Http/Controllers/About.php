<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class About extends Controller
{
    public function about()
    {

        $abouts = \App\Models\About::all();
        return view('home.about', compact('abouts'));
    }


    public function search()
    {
        $sa = \request('search');


        $articles = Article::where('title', 'LIKE', "%{$sa}%")->orWhere('content', 'LIKE', "%{$sa}%")->get();
        return view('home.search', compact('articles'));
    }
}
