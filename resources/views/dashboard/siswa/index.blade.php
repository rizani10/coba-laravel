@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-3 border-bottom">
        <h1 class="h2">Data Siswa</h1>
    </div>

    <a href="/dashboard/siswa/create" class="btn btn-primary mb-5 "> <span data-feather="plus-circle"></span> Tambah</a>

    {{-- pesan post baru berhasil ditambah --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- ambil semua data posts dalam bentuk tabel --}}
    <div class="table-responsive">
        <table class="table table-striped table-sm table-bordered" id="example">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Kelas</th>
                <th scope="col">NISN</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Nama Ibu</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($siswas as $siswa)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->kelas->nama_kelas }}</td>
                    <td>{{ $siswa->nisn }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->tempat_lahir }}</td>
                    <td>{{ $siswa->tgl_lahir }}</td>
                    <td>{{ $siswa->nama_ibu }}</td>
                    <td>Aksi</td>
                  </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    
@endsection