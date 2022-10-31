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
        <table class="table table-striped table-sm" id="example">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
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
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"> 
                                <span data-feather="eye"></span>
                            </a>

                            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>

                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                {{-- request method bajak ke delete --}}
                                @method('DELETE')
                                {{-- token untuk menghindari CSRF --}}
                                @csrf
                                {{-- tombol hapus --}}
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure delete')"><span data-feather="trash"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection