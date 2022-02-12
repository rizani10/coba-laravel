
@extends('layouts.app')


@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>
            By : Muhammad Faisal Rizani in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> 
        </p>
        {!! $post->body !!}
    </article>
    <a href="/blog" class="btn btn-primary">Kembali</a>
@endsection