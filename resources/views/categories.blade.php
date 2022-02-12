@extends('layouts.app')
@section('content')
<h1 class="mb-5">Post categories</h1>
    <article>
        <article class="mb-5">
            @foreach ($categories as $category)
                <ul>
                    <li>
                        <h2>
                            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                        </h2>
                    </li>
                </ul>
            @endforeach
        </article>
    </article>
@endsection
