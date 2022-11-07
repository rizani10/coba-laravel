<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class PostsController extends Controller
{
    //create method index
    public function index()
    {


        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' in ' . $author->name ;
        }

        return view('home.blog',[
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // // "posts" => Post::all()
            // // membuat postingan terbaru
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)
        ]);
        
    }

    // create method single post
    // Post (Model)
    public function singlePost(Post $post)
    {
        return view('home.detail-blog', [
            // "title" => "Single Blog",
            "post" => $post,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7),
        ]);
    }


    
}
