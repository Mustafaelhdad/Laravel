<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('users', function(Request $request) {

//     return $request;
//     // return view('users');
// });

// Route::get('users/{name}', function($username) {

//     return $username;
// });

// Route::get('/users', function() {
//     return view('users', ['name' => '']);
// });

// Route::get('/posts', function() {
//     return view('posts');
// });


// Route::controller(PostController::class)->group(function(){
//     Route::get('posts', 'showUsers');
//     Route::get('posts/create', 'createPosts');
//     Route::get('posts/edit/{id}', 'editPosts');
//     Route::get('posts/update/{id}', 'updatePosts');
//     Route::get('posts/delete/{id}', 'deletePosts');
// });

// Route::get('users', [PostController::class, 'showUsers']);

// Route::get('posts/create', [PostController::class, 'createPosts']);

// Route::get('posts/edit/{id}', [PostController::class, 'editPosts']);

// Route::get('posts/update/{id}', [PostController::class, 'updatePosts']);

// Route::get('posts/delete/{id}', [PostController::class, 'deletePosts']);

// Route::resource('users', UserController::class)->except(['create']);

Route::resource('users', UserController::class)->only(['create']);


Route::get('user-profile', UserProfileController::class);
