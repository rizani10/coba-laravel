<?php

use App\Http\Controllers\PostsController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    $data = [
        'title' => 'About',
        "name" => 'Muhammad Faisal Rizani',
        "email" => 'faisalrizani@gmail.com',
        "img" => 'man.png'
    ];

    return view('about', $data);
});



// blog
Route::get('/blog', [PostsController::class, 'index']);


// halaman single post
Route::get('posts/{post:slug}', [PostsController::class, 'singlePost']);


// halaman semua category
Route::get('categories', function() {
    $categories = Category::all();
    return view('categories', [
        'title' => 'Categories',
        'categories' => $categories
    ]);
});



// halaman categories berdasarkan slug
Route::get('categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
