<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class ProfileController extends Controller
{
    public function show($name)
    {
        try {
            $user = User::where('name', $name)->firstOrFail();
            $posts = Post::all();

            return view('user.profile', ['user' => $user], ['posts' => $posts]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('user.profile', ['name' => $name]);
        }
    }
}
