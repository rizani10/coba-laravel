<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //create function index
    public function index()
    {
        return view('login.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }
}
