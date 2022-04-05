<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Permission;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:manage-comments');
    }
    public function approved()
    {
        $comment = Comment::query();

        if ($search = \request('search')) {
            $comment->where('comment', 'LIKE', "%{$search}%")
                ->orWhereHas('user', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                ->orWhere('id', $search);
        }
        $comments = $comment->where('approved', 1)->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('admin.comments.allapproved', compact('comments'));
    }

    public function unapproved()
    {
        $comment = Comment::query();
        if ($search = \request('search')) {
            $comment->where('comment', 'LIKE', "%{$search}%")
                ->orWhereHas('user', function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%");
                })
                ->orWhere('id', $search);
        }
        $comments = $comment->where('approved', 0)->latest()->paginate(10)->appends(['search' => \request('search')]);

        return view('admin.comments.allunapproved', compact('comments'));
    }

    public function edit(Comment $comment)
    {
        return view('admin.comments.edit', compact('comment'));
    }


    public function update(Request $request, Comment $comment)
    {

        $request->validate([
            'comment' => 'required'
        ]);

        $comment->update([
            'approved' => 1
        ]);

        return redirect(route('admin.approvedcomments'));

    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
