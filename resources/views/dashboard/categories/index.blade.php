@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Categories</h1>
    </div>

    {{-- add data in the modal bootstraps --}}
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3"> <span data-feather="grid"></span> Create new category</a>

    {{-- buat pesan message --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- ambil semua data categories dalam bentuk tabel --}}
    <div class="table-responsive">
        <table class="table table-striped table-sm" id="example">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->id }}/edit" class="badge bg-warning">
                                <span data-feather="edit"></span>
                            </a>
                            <form action="/dashboard/categories/{{ $category->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure delete')">
                                    <span data-feather="trash"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection