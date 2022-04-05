<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $valiDate = $request->validate([
            'commentable_id' => 'required',
            'commentable_type' => 'required',
            'parent_id' => 'required',
            'comment' => 'required'
        ]);

        auth()->user()->comments()->create($valiDate);
        alert()->success('نظر شما ثبت و پس از تایید در قسمت نظرات نمایش داده میشود', 'با تشکر')->persistent('تایید');
        return back();
    }
}
