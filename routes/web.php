<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;


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
        'title' => 'Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    $data = [
        'title' => 'About',
        "name" => 'Muhammad Faisal Rizani',
        "email" => 'faisalrizani@gmail.com',
        "img" => 'man.png',
        'active' => 'about'
    ];

    return view('about', $data);
});



// blog
Route::get('/posts', [PostsController::class, 'index']);


// halaman single post
Route::get('posts/{post:slug}', [PostsController::class, 'singlePost']);


// halaman semua category
Route::get('categories', function () {
    $categories = Category::all();
    return view('categories', [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' => $categories
    ]);
});



// halaman categories berdasarkan slug
Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load([
            'author',
            'category'
        ]),
        'active' => 'categories',
    ]);
});



// get data in authors
Route::get('authors', function () {
    $authors = User::all();
    return view('authors', [
        'title' => 'Authors Blog',
        'authors' => $authors,
        'active' => 'authors'
    ]);
});

// create route route buat login
Route::get('/login' , [LoginController::class, 'index']);

// create route route buat register
Route::get('/register' , [RegisterController::class, 'index']);

// create route method register
Route::post('/register' , [RegisterController::class, 'store']);
