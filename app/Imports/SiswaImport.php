<?php

namespace App\Imports;

use App\Models\RuangKelas;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel, WithHeadingRow
{


    private $kelas_id;
    
    public function __construct()
    {
        $this->kelas = RuangKelas::select('id', 'class')->get();
    }


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $siswa = $this->kelas->where('class', $row['kelas'])->first();
        return new Siswa([
            'kelas_id' => $siswa->id ?? null,
            'nis' => $row['nis'],
            'nisn' => $row['nisn'],
            'nama' => $row['nama'],
            'kelas' => $row['kelas'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tgl_lahir' => date($row['tgl_lahir']),
            'jns_kelamin' => $row['jns_kelamin'],
            'agama' => $row['agama'],
            'telp' => $row['telp'],
            'email' => $row['email'],
            'nik' => $row['nik'],
            'nama_ibu' => $row['nama_ibu'],
            'nama_ayah' => $row['nama_ayah'],
            'telp_ortu' => $row['telp_ortu'],
            'alamat' => $row['alamat'],
            'pekerjaan_ayah' => $row['pekerjaan_ayah'],
            'pekerjaan_ibu' => $row['pekerjaan_ibu'],
        ]);
    }
}
