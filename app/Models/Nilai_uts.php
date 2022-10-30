<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai_uts extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'siswa_id',
        'mapel_id',
        'angka'
    ];

    protected $with = ['siswa', 'mapel'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
}
