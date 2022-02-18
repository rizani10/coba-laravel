<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // tampilkan view
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //data view create
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:categories',
            'slug' => 'required|unique:categories|max:255'
        ]);

        // insert data ke database
        Category::create($validatedData);

        // redirect ke halaman index dan kirim message
        return redirect('/dashboard/categories')->with('success', 'Category created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //tampilkan view dan datanya
        return view('dashboard.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //validate data dulu
        $validatedData = $request->validate([
            'name' => 'required|max:255|unique:categories,name,' . $category->id,
            'slug' => 'required|max:255|unique:categories,slug,' . $category->id
        ]);

        //update data
        $category->update($validatedData);

        //redirect ke halaman index dan kirim message
        return redirect('/dashboard/categories')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //delete data in database
        $category->delete($category->id);

        //redirect ke halaman index dan kirim pesan
        return redirect('/dashboard/categories')->with('success', 'Category deleted successfully');
    }

    // create function untuk tugas nya membuat slug
    public function checkSlug(Request $request)
    {
        // ambil data service slug
        $slug =SlugService::createSlug(Category::class, 'slug', $request->name);
        
        // balikkan data slug dalam bentuk json
        return response()->json([
            'slug' => $slug
        ]);
    }
}
