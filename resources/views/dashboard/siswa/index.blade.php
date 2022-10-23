@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts, {{ auth()->user()->name }}</h1>
    </div>

    <a href="/dashboard/posts/create" class="btn btn-primary mb-3"> <span data-feather="file-plus"></span> Create new post</a>

    <a href="/" class="btn btn-secondary mb-3"><span data-feather="globe"></span> Visit Blog</a>

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