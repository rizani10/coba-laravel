<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nuptk',
        'nik',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jns_kelamin',
        'agama',
        'alamat',
        'telp',
        'email',
        'jabatan',
    ];

}
