<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // kirim data dari database ke view berdasarkan postingan user
        return view('dashboard.posts.index', [
            'posts' => Post::latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //form create post dan ambil data category
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        //create validate data
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts|max:255',
            'body' => 'required',
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);


        // cek gambar jika tidak ada gambar yang di upload gunakan api unsplash
        if ($request->file('image')) {
            // maka buat validate dulu dan simpan image nya
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        // ambil data id dan excerpt dulu
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));

        // insert data ke database
        Post::create($validatedData);

        // redirect ke halaman index sambi kirim pesan sukses
        return redirect('/dashboard/posts')->with('success', 'New post has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // kirim satu data post ke view show
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // dd($post);

        //tampilan view buat edit
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //bikin rules untuk validasi
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ];

        // cek slug yang baru itu sama dengan slug yang lama jangan kasih validasi kalau berubah validasi
        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        // validate data rulesnya
        $validatedData = $request->validate($rules);

         // cek gambar jika tidak ada gambar yang di upload gunakan api unsplash jik ada gambar yang lama hapus dlu
        if ($request->file('image')) {
            // jika gambar lama ada maka hapus
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            // maka buat validate dulu dan simpan image nya
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        // ambil data excerpt dan user id dulu
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));
        $validatedData['user_id'] = auth()->user()->id;

        // update data ke database
        Post::where('id', $post->id)
            ->update($validatedData);

        // redirect ke halaman index sambil kirim pesan sukses
        return redirect('/dashboard/posts')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //delete data dari database
        // jika gambar lama ada maka hapus
        if($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        // redirect
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted');
    }

    // create function untuk tugas nya membuat slug
    public function checkSlug(Request $request)
    {
        // ambil data service slug
        $slug =SlugService::createSlug(Post::class, 'slug', $request->title);
        
        // balikkan data slug dalam bentuk json
        return response()->json([
            'slug' => $slug
        ]);
    }




}
