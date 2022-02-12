
@extends('layouts.app')


@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>
            By : <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> 
        </p>
        {!! $post->body !!}
    </article>
    <a href="/blog" class="btn btn-primary mt-3">Kembali</a>
@endsection