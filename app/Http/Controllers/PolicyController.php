<?php

namespace App\Http\Controllers;

class PolicyController extends Controller
{
    public function tos()
    {
        return view('en.tos');
    }

    public function privacy()
    {
        return view('en.privacy');
    }

    public function cookies()
    {
        return view('en.cookies');
    }
}
