<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
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

// General Routes
// Redirect to Home Page
Route::get('/', [HomeController::class, 'redirect'])->middleware('auth');

// Home Page
Route::get('/home', [PostsController::class, 'show'])->middleware('auth');

// Explore Page
Route::get('/explore', [ExploreController::class, 'index'])->middleware('auth');

// Notifications
Route::get('/notifications', [NotificationController::class, 'index'])->middleware('auth');

// Messages
Route::get('/messages', [MessageController::class, 'index'])->middleware('auth');

// Bookmarks
Route::get('/bookmarks', [BookmarkController::class, 'index'])->middleware('auth');

// User #TODO
Route::get('/user/{name}', [ProfileController::class, 'show'])->middleware('auth');

// Chit Create
Route::post('/create', [PostsController::class, 'create']);

// Chit Delete
Route::delete('/delete/{post}', [PostsController::class, 'destroy']);

// Chit Like
Route::post('/likes/add', [LikeController::class, 'addLike'])->name('likes.add');

// Popup
// Route::get('/compose/chit', [PostsController::class, 'show'])->middleware('auth');

// Public Pages
// Terms Of Service Page
Route::get('/tos', [PolicyController::class, 'tos']);

// Privacy Policy Page
Route::get('/privacy', [PolicyController::class, 'privacy']);

// Cookie Policy Page
Route::get('/cookies', [PolicyController::class, 'cookies']);
