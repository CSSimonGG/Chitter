<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function show($name)
    {
        try {
            $user = User::where('name', $name)->firstOrFail();
            return view('user.profile', ['user' => $user]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('user.profile');
        }
    }
}
