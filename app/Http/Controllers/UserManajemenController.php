<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class UserManajemenController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.m_users.index',[
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // fungsi delete
        $user->delete($user->id);

        // /redirect ke halaman index dan kirim pesan
        return redirect('/dashboard/users')->with('success', 'Data user berhasil dihapus');

    }

    public function allpost()
    {
        return view('dashboard.m_users.allpost',[
           'posts' =>  Post::latest()->get()
        ]);
    }



    public function hapusAllPost(Post $slug)
    {
        $post = Post::findOrFail($slug);
        // $post = Post::where('slug', $slug)->where('user_id', $user_id)->first();
        $post->delete();
        return parent::delete();
                // /redirect ke halaman index dan kirim pesan
                return redirect('/dashboard/allpost')->with('success', 'Data user berhasil dihapus');
    }
}
