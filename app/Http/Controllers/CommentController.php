<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
    public function addComment(StoreCommentRequest $request)
    {
        try {
            Comment::create([
                'user_id' => auth()->user()->id,
                'post_id' => $request->post_id,
                'body' => $request->body
            ]);
        } catch (\Throwable $e) {
            DB::rollback();
            return redirect()->back()->with('error', $e->getMessage());
        }
        return redirect()->back();
    }
}
