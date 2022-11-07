<?php

namespace App\Imports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;;

class GuruImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guru([
            'nip' => $row['nip'],
            'nuptk' => $row['nuptk'],
            'nama' => $row['nama'],
            'nik' => $row['nik'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tgl_lahir' => date($row['tgl_lahir']),
            'jns_kelamin' => $row['jns_kelamin'],
            'agama' => $row['agama'],
            'telp' => $row['telp'],
            'email' => $row['email'],
            'alamat' => $row['alamat'],
            'jabatan' => $row['jabatan'],
        ]);
    }
}
