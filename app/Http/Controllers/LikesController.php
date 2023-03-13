<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function addLike(Request $request)
    {
        // Get the post ID from the request
        $postId = $request->input('post_id');

        // Add a like for the post in the database
        $post = Post::findOrFail($postId);
        $like = new Like();
        $post->likes()->save($like);

        // Get the updated number of likes for the post
        $likesCount = $post->likes()->count();

        // Return a JSON response with the updated number of likes
        return response()->json(['likes_count' => $likesCount]);
    }
}
