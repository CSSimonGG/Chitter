<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function show()
    {
        return view('bookmarks');
    }
}
