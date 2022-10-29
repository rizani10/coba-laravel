@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Semua Postingan berita</h1>
    </div>


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
          Tabel Data Semua Berita
      </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-sm" id="example">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Pembuat Berita</th>
                        <th scope="col">Tanggal Posting Berita</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        
                            <tr>
                                {{-- td pertama dengan loop iteration untuk menghitung angka mulai dari 1 --}}
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ !empty($post->category) ?  $post->category->name: '' }}</td>
                                <td>{{ $post->author->name }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>

                                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                        {{-- request method bajak ke delete --}}
                                        @method('DELETE')
                                        {{-- token untuk menghindari CSRF --}}
                                        @csrf
                                        {{-- tombol hapus --}}
                                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin ingin menghapus postingan ?'"><span data-feather="trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
    </div>
    
@endsection