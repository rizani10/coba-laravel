<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    // fungsi Manually Authenticating Users
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // cek class auth
        if (Auth::attempt($credentials)) {
            //    jika berhasil buat session
            $request->session()->regenerate();

            // redirect middelware
            return redirect()->intended('/dashboard');
        }

        // jika salah
        return back()->with('loginError', 'Login Failed');
    }


    // method logout
    public function logout(Request $request)
    {
        Auth::logout();
        // hapus session
        $request->session()->invalidate();

        // bikin session baru
        $request->session()->regenerateToken();

        // redirect halaman home
        return redirect('/');
    }
}
