<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
            'kelas_id',
            'nis',
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
            'nama_ibu',
            'nama_ayah',
            'pekerjaan_ayah',
            'pekerjaan_ibu',
            'telp_ortu'
    ];

    protected $with = ['kelas'];


    // relationship kelas
        public function kelas()
        {
            return $this->belongsTo(Kelas::class);
        }
    
}
