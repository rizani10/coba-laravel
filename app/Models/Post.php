<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];    //guarde jangan me edit id jdi filed yang lain bisa di esekusi

    // menambah fungsi agar datanya sudah di eager load
    protected $with = ['author' , 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // create fungsi untuk mengambil user yang membuat post
    public function author()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    // create fungsi pencarian scope filter
    public function scopeFilter($query , array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'LIKE', '%' . $filters['search'] . '%')
        //     ->orWhere('body', 'LIKE', '%' . $filters['search'] . '%');
        // }

        // memanfattkan fitur when laravel
        $query->when($filters['search'] ?? false, function($query) use ($filters) {
            return $query->where('title', 'LIKE', '%' . $filters['search'] . '%')
            ->orWhere('body', 'LIKE', '%' . $filters['search'] . '%');
        });

        // cari filter berdasrkan name category
        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // cari berdasarkan author
        $query->when($filters['author'] ?? false, function($query, $author) {
            return $query->whereHas('author', function($query) use ($author) {
                $query->where('username', $author);
            });
        });

    }


    // setiap route otomatis mencari berdasarkan slug jgn id
    public function getRouteKeyName()
    {
        return 'slug';
    }


    // create function Sluggable untuk membuat slug otomatis
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}


