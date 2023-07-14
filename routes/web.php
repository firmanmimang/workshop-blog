<?php

use App\Models\Post;
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
    // select post dari slug dengan info category
    // et-cum-aperiam-excepturi-minima-consectetur-quas-odit
    // return Post::get();
    return Post::with(['category'])->where('slug', 'et-cum-aperiam-excepturi-minima-consectetur-quas-odit')->first();
});
