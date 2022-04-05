<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('مقالات');
        $articles = Article::latest()->paginate(10);
        return view('home.articles', compact('articles'));
    }


    public function single(Article $article)
    {
        $article->update([
            'view_count' => $article->view_count + 1
        ]);

        return view('home.articlesingle', compact('article'));
    }
}
