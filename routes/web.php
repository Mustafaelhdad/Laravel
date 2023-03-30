<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::post('users', function(Request $request) {

//     return $request;
//     // return view('users');
// });

// Route::get('users/{name}', function($username) {

//     return $username;
// });

Route::get('/users', function() {
    return view('users', ['name' => '']);
});

Route::get('/posts', function() {
    return view('posts');
});
