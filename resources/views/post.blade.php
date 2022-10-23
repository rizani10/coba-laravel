
@extends('layouts.app')

@section('content')


    {{-- conten detail post --}}
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                
                <article>
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <p>
                        By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> 
                    </p>

                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">
                    @endif

                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>

                </article>
                <a href="/posts" class="btn btn-primary mt-3">Kembali</a>

            </div>
        </div>
    </div>
    {{-- conten detail post --}}

    
@endsection