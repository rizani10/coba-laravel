<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'guru_id',
        'mapel'
    ];

    protected $with = ['guru'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
