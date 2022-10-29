<?php

namespace App\Exports;

use App\Models\RuangKelas;
use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        
        return Siswa::with('kelas')->get();
    }

    public function map($siswa) : array
    {
        
        return [
            $siswa->nis,
            $siswa->nisn,
            $siswa->nama,
            $siswa->kelas->class,
            $siswa->tempat_lahir,
            $siswa->tgl_lahir,
            $siswa->jns_kelamin,
            $siswa->agama,
            $siswa->telp,
            $siswa->email,
            $siswa->nik,
            $siswa->nama_ibu,
            $siswa->nama_ayah,
            $siswa->telp_ortu,
            $siswa->pekerjaan_ayah,
            $siswa->pekerjaan_ibu,
        ];
    }

    public function headings(): array
    {
        return [
            'nis',
            'nisn',
            'nama',
            'kelas',
            'tempat_lahir',
            'tgl_lahir',
            'jns_kelamin',
            'agama',
            'telp',
            'email',
            'nik',
            'nama_ibu',
            'nama_ayah',
            'telp_ortu',
            'pekerjaan_ayah',
            'pekerjaan_ibu',
            
        ];
    }
}
