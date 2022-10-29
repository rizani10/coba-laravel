<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangKelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'guru_id',
        'class'
    ];

    protected $with =  ['guru'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    // public function kelas()
    // {
    //     return $this->hasOne(RuangKelas::class);
    // }
}
