<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Default Route #DELETE
Route::get('/welcome', function () {
    return view('welcome');
});

// Middleware Auth
Route::group(['middleware' => 'auth'], function () {
    // General Routes

    Route::get('/', function () {
        return redirect('/home');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/explore', function () {
        return view('explore');
    });

    Route::get('/notifications', function () {
        return view('notifications');
    });

    Route::get('/messages', function () {
        return view('messages');
    });

    Route::get('/bookmarks', function () {
        return view('bookmarks');
    });

    // User #TODO
    Route::get('/user/lists', function () {
        return view('user.lists');
    });

    Route::get('/user/{user}', function () {
        return view('user.profile');
    });
});

// Chit #TODO

// Route::get('/compose/chit', function () {
//     return view('compose');
// });

// Public Pages
// Terms Of Service Page
Route::get('/tos', function () {
    return view('en.tos');
});

// Privacy Policy Page
Route::get('/privacy', function () {
    return view('en.privacy');
});

// Cookie Policy Page
Route::get('/cookies', function () {
    return view('en.cookies');
});
