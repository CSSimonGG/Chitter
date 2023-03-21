<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

class ProfileController extends Controller
{
    public function show($name)
    {
        $user = User::where('name', $name)->first();
        if(empty($user)){
            return view('user.profile', ['name' => $name]);
        }
        
        $posts = Post::all();
        return view('user.profile', ['user' => $user], ['posts' => $posts]);
    }
}
