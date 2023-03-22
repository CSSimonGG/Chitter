<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function redirect()
    {
        return redirect('home');
    }

    public function index()
    {
        // Load All Posts
        $posts = Post::all();

        return view('home', ['posts' => $posts]);
    }
}
