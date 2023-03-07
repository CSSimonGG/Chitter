<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function redirect()
    {
        return redirect('home');
    }
    public function index()
    {
        $posts = Post::all();
        return view('home', ['posts' => $posts]);
    }
}
