<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\User;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('home.posts', [
            "title" => "All Posts",
            "posts" => Post::with(['user', 'comments'])->latest()->get()
        ]);

    }

    public function addPost(StorePostRequest $request)
    {
        try {
            Post::create([
                'user_id' => auth()->user()->id,
                'body' => $request->body
            ]);
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Failed To Update Post');
        }

        return redirect()->back()->with('success', 'New Post has been added!');
    }


    public function show(Post $post)
    {
        // return view('posts', [
        //     "title" => "All Comments",
        //     "comments" => $comments
        // ]);
    }


    public function edit(Post $post)
    {
        //
    }


    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }


    public function destroy(Post $post)
    {
        //
    }
}
