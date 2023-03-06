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

// Middleware Auth
Route::group(['middleware' => 'auth'], function () {
    // General Routes
    // Redirect to Home Page
    Route::get('/', [HomeController::class, 'redirect']);

    // Home Page
    Route::get('/home', [HomeController::class, 'show']);

    // Explore Page
    Route::get('/explore', [ExploreController::class, 'show']);

    // Notifications
    Route::get('/notifications', [NotificationController::class, 'show']);

    // Messages
    Route::get('/messages', [MessageController::class, 'show']);

    // Bookmarks
    Route::get('/bookmarks', [BookmarkController::class, 'show']);

    // User #TODO
    Route::get('/user/{name}', [ProfileController::class, 'show']);
});

// Chit #TODO

// Route::get('/compose/chit', function () {
//     return view('compose');
// });

// Public Pages
// Terms Of Service Page
Route::get('/tos', [PolicyController::class, 'tos']);

// Privacy Policy Page
Route::get('/privacy', [PolicyController::class, 'privacy']);

// Cookie Policy Page
Route::get('/cookies', [PolicyController::class, 'cookies']);
