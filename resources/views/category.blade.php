@extends('layouts.app')
@section('content')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
    <article>
        <article class="mb-5">
            @foreach ($posts as $post)
                <h2>
                    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                <h5>{{ $post->author }}</h5>
                <p>{{ $post->excerpt }}</p>
            @endforeach
        </article>
    </article>
@endsection
