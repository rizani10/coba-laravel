<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\NilaiPengetahuanController;
use App\Http\Controllers\NilaiUtsController;
use App\Http\Controllers\SiswaBaruController;
use App\Http\Controllers\UserManajemenController;


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

// Route::get('/', function () {
//     return view('home', [
//         'title' => 'Home',
//         'active' => 'home'
//     ]);
// });

Route::get('/', function(){
    return view('home.layout.app',[
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

// create route route buat login dengan middleware
Route::get('/login' , [LoginController::class, 'index'])->name('login')->middleware('guest');

// create route route buat register
Route::get('/register' , [RegisterController::class, 'index'])->middleware('guest');

// create route method register
Route::post('/register' , [RegisterController::class, 'store']);

// create route method authenticate
Route::post('/login' , [LoginController::class, 'authenticate']);


// create dahboard dengan middleware
Route::get('/dashboard' , function() {
    return view('dashboard.index',[
        //hitung jumlah data di database
        'total_post' => Post::count(),
        'total_category' => Category::count(),
        'total_author' => User::count(),
    ]);
})->middleware('auth');


// create route method logout
Route::post('/logout' , [LoginController::class , 'logout']);

// bikin route ketiga ada dalam method get untuk slug
Route::get('dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

// bikin route ketiga ada dalam method get untuk slug
Route::get('dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');


// create route menggunakan resource controller dengan middelware
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// create route category menggunakan resource controller
Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');

Route::resource('/dashboard/users', UserManajemenController::class)->middleware('admin');

Route::resource('/dashboard/siswa', SiswaController::class)->middleware('auth');

Route::resource('/dashboard/ruangkelas', KelasController::class)->middleware('auth');

Route::get('/dashboard/allpost', [DashboardPostController::class, 'allpost'])->middleware('admin');

Route::get('/dashboard/download', [SiswaController::class, 'exsport'])->middleware('admin');

Route::post('/dashboard/prosesimport', [SiswaController::class, 'import'])->middleware('admin');

Route::resource('/dashboard/mapel', MapelController::class)->middleware('auth');

Route::resource('/dashboard/guru', GuruController::class)->middleware('auth');

Route::get('/dashboard/downloadguru', [GuruController::class, 'export'])->middleware('auth');






Route::resource('/dashboard/newstudent', SiswaBaruController::class)->middleware('auth');
// Route::post('/dashboard/newstudent/update', [SiswaBaruController::class, 'update'])->middleware('auth');
Route::get('/ppdb', [SiswaBaruController::class, 'create']);
Route::post('/dashboard/insertppdb', [SiswaBaruController::class, 'insert']);
Route::get('/home/ppdb-sukses', [SiswaBaruController::class, 'sukses']);
// Route::get('/dashboard/siswa/nilai/{id}',[SiswaController::class, 'nilai']);
// Route::post('/dashboard/ruangkelas/{id}', [KelasController::class, 'update'])->middleware('admin');




