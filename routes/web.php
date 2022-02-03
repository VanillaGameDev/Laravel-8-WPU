<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'name' => 'windah',
        'email' => 'windahgeming@gmail.co.id.com.yahoo',
        'image' => 'download.jpg',
    ]);
});
Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{slug}',[PostController::class, 'show']);
