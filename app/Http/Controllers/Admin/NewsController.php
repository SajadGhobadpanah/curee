<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Permission;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:manage-news');
    }

    public function index()
    {
        $news = News::query();

        if ($search = \request('search')) {
            $news->where('title', 'LIKE', "%{$search}%")
                ->orWhere('content', 'LIKE', "%{$search}%")
                ->orWhere('id', $search);
        }
        $newss = $news->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('admin.news.allnews', compact('newss'));
    }


    public function create()
    {
        return view('admin.news.createnews');
    }

    public function store(Request $request)
    {
        $valiData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);
        News::create($valiData);
        return redirect(route('admin.news.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit(News $news)
    {
        return view('admin.news.editnews', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $valiData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required'
        ]);
        $news->update($valiData);
        return redirect(route('admin.news.index'));
    }


    public function destroy(News $news)
    {
        $news->delete();
        return back();
    }
}
