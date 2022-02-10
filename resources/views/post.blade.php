
@extends('layouts.app')


@section('content')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>{{ $post['author'] }}</h5>
        <p>{{ $post['content'] }}</p>
    </article>
    <a href="/blog" class="btn btn-primary">Kembali</a>
@endsection