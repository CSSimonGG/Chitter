<?php

use Illuminate\Support\Facades\Route;

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

// Default Route
Route::get('/welcome', function () {
    return view('welcome');
});

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

// User

Route::get('/user/lists', function () {
    return view('user.lists');
});

Route::get('/user', function () {
    return view('user.profile');
});

// Chit

// Route::get('/compose/chit', function () {
//     return view('compose');
// });

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
