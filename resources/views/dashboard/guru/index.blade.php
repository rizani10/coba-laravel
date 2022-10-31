@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-3 border-bottom">
        <h1 class="h2">Data Guru</h1>
    </div>

    <a href="/dashboard/guru/create" class="btn btn-primary mb-3"> <span data-feather="plus-circle"></span> Tambah</a>
    
    <a href="/dashboard/downloadguru" class="btn btn-info mb-3">
        <span data-feather="download"></span> Download
    </a>

    {{-- <a href="#" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
       <span data-feather="upload"></span> Import Excel
    </a> --}}

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
            Tabel Data Guru
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NIP</th>
                                <th scope="col">NUPTK</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nip }}</td>
                                    <td>{{ $item->nuptk }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tempat_lahir }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>
                                        <a href="/dashboard/guru/{{ $item->id }}/edit" class="badge bg-warning">
                                            <span data-feather="edit"></span>
                                        </a>
                                        <form action="/dashboard/guru/{{ $item->id }}" method="post" class="d-inline">
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
    {{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Import Data item</h5>
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
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
        </div>
    </div> --}}

@endsection