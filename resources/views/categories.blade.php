@extends('layouts.app')
@section('content')
<h1 class="mb-5">Post categories</h1>
    @foreach ($categories as $category)
        <article class="mb-5 border-bottom pb-4">
            <ul>
                <li>
                    <h2>
                        <a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a>
                    </h2>
                </li>
            </ul>
        </article>
    @endforeach

@endsection
