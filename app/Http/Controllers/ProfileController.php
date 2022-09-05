<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.posts', [
            "title" => "Your Posts",
            "posts" => Post::with(['user', 'comments'])->latest()->get()
        ]);
    }

    public function viewProfile()
    {
        return view('profile.setting');
    }
}
