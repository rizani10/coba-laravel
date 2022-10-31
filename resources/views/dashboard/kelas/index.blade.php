@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-1 mb-3 border-bottom">
        <h1 class="h2">Data Kelas</h1>
    </div>

    <a href="/dashboard/ruangkelas/create"  class="btn btn-primary mb-3"> <span data-feather="plus-circle"></span> Tambah</a>
    
    

    {{-- pesan post baru berhasil ditambah --}}
    <div class="col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    {{-- ambil semua data posts dalam bentuk tabel --}}
    <div class="card col-lg-8">
        <div class="card-header text-white  bg-success">
            Tabel Data Kelas
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Nama Wali Kelas</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->class }}</td>
                                    <td>{{ !empty($item->guru) ? $item->guru->nama : '' }}</td>
                                    <td>
                                        <a href="/dashboard/ruangkelas/{{ $item->id }}/edit" class="badge bg-warning">
                                            <span data-feather="edit"></span>
                                        </a>
                                        <form action="/dashboard/ruangkelas/{{ $item->id }}" method="post" class="d-inline">
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
    
@endsection
