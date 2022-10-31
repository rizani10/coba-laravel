<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaBaru extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'no_pendaftaran',
        'nisn',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jns_kelamin',
        'agama', 
        'alamat',
        'telp',
        'email',
        'nik',
        'nilai_raport',
        'asal_sekolah',
        'nama_ibu',
        'nama_ayah',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'telp_ortu',
        'tgl_daftar',
        'tgl_daftar'
    ];
}
