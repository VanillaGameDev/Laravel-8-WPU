<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home',
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'active' => 'about',
        'name' => 'windah',
        'email' => 'windahgeming@gmail.co.id.com.yahoo',
        'image' => 'download.jpg',
    ]);
});
Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}',[PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// bye kwkwwk
// Route::get('/categories/{category:slug}', function (Category $category){
//     return view("posts", [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author'),
//     ]);

// });

// bye kwkwk
// Route::get('/authors/{author:username}', function(User $author){
//     return view("posts", [
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);

// });


