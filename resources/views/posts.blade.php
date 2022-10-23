@extends('layouts.app')
@section('content')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    {{-- fitur pencarian --}}
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <form action="/posts" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Search.." value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    {{-- fitur pencarian --}}


    {{-- cek jumlah postingan  --}}
    @if ($posts -> count() )
        {{-- hero post --}}
        <div class="card mb-3">

            @if ($posts[0]->image)
                <div style="max-height: 450px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->title }}" class="img-fluid mb-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif

            
            <div class="card-body text-center">

                <h3 class="card-title">
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}
                    </a>
                </h3>
                <small class="text-muted">
                    <p>
                        By : <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}
                        </a> in 
                        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}
                        </a> {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>

                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                {{-- tombol read mi --}}
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more </a>
                {{-- tombol read mi --}}
            </div>
        </div>
        {{-- hero post --}}
    


        {{-- struktur card postingan --}}
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        {{-- card --}}
                        <div class="card">
                            <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.5)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>

                            @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" class="img-fluid mb-3">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                        
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <small class="text-muted">
                                    <p>
                                        By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}
                                        </a> {{ $posts[0]->created_at->diffForHumans() }}
                                    </p>
                                </small>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                            </div>
                        </div>
                        {{-- card --}}
                    </div>
                @endforeach
            </div>
        </div>
        {{-- struktur card postingan --}}

    @else
        <p class="text-center fs-4">No Post Found</p>
    @endif
    {{-- cek jumlah postingan  --}}



    {{-- pagination --}}
    <div class="d-flex justify-content-center">
        {{ $posts->appends(request()->query())->links() }}
    </div>
    {{-- pagination --}}

@endsection

