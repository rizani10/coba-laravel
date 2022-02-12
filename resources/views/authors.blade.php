@extends('layouts.app')
@section('content')
<h1 class="mb-5">Authors Blog</h1>
    <article>
        <article class="mb-5">
            @foreach ($authors as $author)
                <ul>
                    <li>
                        <h2>
                            <a href="/authors/{{ $author->username }}" class="text-decoration-none">{{ $author->name }}</a>
                        </h2>
                    </li>
                </ul>
            @endforeach
        </article>
    </article>
@endsection
