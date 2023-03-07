<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create()
    {
        $user = Auth::user();

        if (Auth::check()) {
            $user_id = $user->id;
        }

        $post = new Post();
        $post->user_id = $user_id;
        $post->chit = request('chit');
        $post->save();

        return redirect('home');
    }
    public function show()
    {
        abort(404);
    }
}
