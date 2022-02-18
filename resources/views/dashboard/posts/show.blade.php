@extends('dashboard.layouts.main')

@section('container')
    
<div class="container">
        <div class="col-lg-8">
            
            <article>
                <h2 class="my-3">{{ $post->title }}</h2>
                
                <a href="/dashboard/posts" class="btn btn-success">
                    <span data-feather="arrow-left"></span> Back to my posts
                </a>

                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">
                    <span data-feather="edit"></span> Edit
                </a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    {{-- request method bajak ke delete --}}
                    @method('DELETE')
                    {{-- token untuk menghindari CSRF --}}
                    @csrf
                    {{-- tombol hapus --}}
                    <button class="btn btn-danger" onclick="return confirm('Are you sure delete')"><span data-feather="trash"></span> Delete</button>
                </form>

                {{-- cek jika gambar terisi dari database --}}
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3" alt="{{ $post->title }}" class="img-fluid mb-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">
                @endif

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </article>
            <a href="/dashboard/posts" class="btn btn-primary mb-3">Back</a>

    </div>
</div>
    
@endsection