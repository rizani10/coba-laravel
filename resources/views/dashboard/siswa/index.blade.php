@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-3 border-bottom">
        <h1 class="h2">Data Siswa</h1>
    </div>

    <a href="/dashboard/siswa/create" class="btn btn-primary mb-3"> <span data-feather="plus-circle"></span> Tambah</a>
    
    <a href="/dashboard/download" class="btn btn-info mb-3">
       <span data-feather="download"></span> Download
    </a>

    <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
       <span data-feather="upload"></span> Import Excel
    </a>

    {{-- pesan post baru berhasil ditambah --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- ambil semua data posts dalam bentuk tabel --}}
    <div class="card">
        <div class="card-header">
            Tabel Data Siswa
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example">
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
                                    <td>{{ !empty($siswa->kelas) ?  $siswa->kelas->class :'' }}</td>
                                    <td>{{ $siswa->nisn }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->tempat_lahir }}</td>
                                    <td>{{ $siswa->tgl_lahir }}</td>
                                    <td>{{ $siswa->nama_ibu }}</td>
                                    <td>
                                        <a href="/dashboard/siswa/{{ $siswa->id }}/edit" class="badge bg-warning">
                                            <span data-feather="edit"></span>
                                        </a>
                                        <form action="/dashboard/siswa/{{ $siswa->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data')">
                                                <span data-feather="trash"></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Import Data Siswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" method="POST" enctype="multipart/form-data" action="/dashboard/prosesimport">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Pilih File</label>
                        <input class="form-control" type="file" id="file" name="file">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
        </div>
    </div>

@endsection