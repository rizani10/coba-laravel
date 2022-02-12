<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //create method index
    public function index()
    {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
        
    }

    // create method single post
    // Post (Model)
    public function singlePost(Post $post)
    {
        return view('post', [
            "title" => "Single Blog",
            "post" => $post
        ]);
    }


    
}
