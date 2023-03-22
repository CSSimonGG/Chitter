<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class ProfileController extends Controller
{
    public function show($name)
    {
        // Check If User Exists
        $user = User::where('name', $name)->first();
        // If User Does Not Exist
        if (empty($user)) {
            // Return With Name
            return view('user.profile', ['name' => $name]);
        }

        // Load All Posts
        $posts = Post::all();

        // Return With Name And Posts
        return view('user.profile', ['user' => $user], ['posts' => $posts]);
    }
}
