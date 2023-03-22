<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function create()
    {
        $user = Auth::user();

        if (Auth::check()) {
            $user_id = $user->id;
        }

        // Create New Post
        $post = new Post();
        $post->user_id = $user_id;
        $post->chit = request('chit');
        $post->save();

        return redirect('home');
    }

    public function show(Post $post)
    {
        // Load All Posts
        $post = Post::all();

        return view('home', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        // Make sure logged in user is owner
        if ($post->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        // Delete Post
        $post->delete();

        return redirect('/');
    }
}
