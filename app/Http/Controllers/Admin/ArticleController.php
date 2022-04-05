<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Permission;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-articles');
    }
    public function index()
    {
        $article = Article::query();

        if ($search = \request('search')) {
            $article->where('title', 'LIKE', "%{$search}%")
                ->orWhere('content', 'LIKE', "%{$search}%")
                ->orWhere('id', $search);
        }
        $articles = $article->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('admin.articles.allarticles', compact('articles'));
    }


    public function create()
    {
        return view('admin.articles.createarticle');
    }


    public function store(Request $request)
    {
        $valiData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);

        Article::create($valiData);

        return redirect(route('admin.articles.index'));
    }


    public function show($id)
    {
        //
    }

    public function edit(Article $article)
    {
        return view('admin.articles.editarticle', compact('article'));
    }


    public function update(Request $request, Article $article)
    {
        $valiData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);

        $article->update($valiData);

        return redirect(route('admin.articles.index'));
    }


    public function destroy(Article $article)
    {
        $article->delete();
        return back();
    }
}
