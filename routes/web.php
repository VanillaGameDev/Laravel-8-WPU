<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

Route::get('/posts/{post:slug}',[PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category){
    return view("Category", [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);

});


