@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-3 border-bottom">
        <h1 class="h2">Data Siswa Baru</h1>
    </div>

    <a href="/ppdb"  class="btn btn-primary mb-3" target="blank"> <span data-feather="plus-circle"></span> Tambah</a>
    
    <div class="col-lg-12">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="card col-lg-12">
        <div class="card-header">
            Tabel Data Siswa Baru
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal Daftar</th>
                            <th scope="col">No. Pendaftaran</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Ibu</th>
                            <th scope="col">Aksi</th>
                            <th scope="col">Kartu Pendaftaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->no_pendaftaran }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>{{ $item->nama_ibu }}</td>
                                    <td>
                                        <a href="/dashboard/newstudent/{{ $item->id }}" class="badge bg-info">
                                            <span data-feather="eye"></span>
                                        </a>

                                        <a href="/dashboard/newstudent/{{ $item->id }}/edit" class="badge bg-warning">
                                            <span data-feather="edit"></span>
                                        </a>
                                        <form action="/dashboard/newstudent/{{ $item->id }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus data')">
                                                <span data-feather="trash"></span>
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="/dashboard/cetakkartu/{{ $item->id }}" class="badge bg-primary">
                                            <span data-feather="file-text"></span>  Cetak
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection
