<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    // fungsi registrasi
    public function store()
    {
        // validation
        $validatedData = request()->validate([
            'name' => 'required',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|email:dns|unique:users|min:3|max:50',
            'password' => 'required|min:5|max:55',
        ]);

        // encrypt password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // insert ke database
        User::create($validatedData);

        // request session flash data
        // request()->session()->flash('status', 
        //     'Register Success! Please Login
        // ');

        // redirect ke halaman login dengan membawa flashdata
        return redirect('/login')->with('status', 'Register Success! Please Login');
    }
}
