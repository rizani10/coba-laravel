<?php

namespace App\Exports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GuruExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Guru::all();
    }

    public function map($guru): array
    {
        return [
            !empty($guru->nip) ? $guru->nip: '',
            !empty($guru->nuptk) ? $guru->nuptk: '',
            $guru->nik,
            $guru->nama,
            $guru->tempat_lahir,
            $guru->tgl_lahir,
            $guru->jns_kelamin,
            $guru->agama,
            $guru->alamat,
            $guru->telp,
            $guru->email,
            $guru->jabatan,
        ];
    }

    public function  headings(): array
    {
        return [
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
}
