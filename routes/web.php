<?php

use Illuminate\Routing\Router;
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
    return view('home');
});

Route::get('/about', function () {
    $data = [
        "name" => 'Muhammad Faisal Rizani',
        "email" => 'faisalrizani@gmail.com',
        "img" => 'man.png'
    ]; 
    
    return view('about', $data);
});

Route::get('/blog', function () {
    return view('post');
});
