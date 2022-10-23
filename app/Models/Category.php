<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];


    // fungsi relasi tabel category dengan tabel post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    

    
    // create function Sluggable untuk membuat slug otomatis
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}


