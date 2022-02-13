<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
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
}
