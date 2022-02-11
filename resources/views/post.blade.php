
@extends('layouts.app')


@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        {!! $post->body !!}
    </article>
    <a href="/blog" class="btn btn-primary">Kembali</a>
@endsection