<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news)
    {
        $this->seo()->setTitle('اخبار');
        return view('home.newspage', compact('news'));
    }
}
