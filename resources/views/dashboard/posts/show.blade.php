@extends('dashboard.layouts.main')

@section('container')
    
<div class="container">
        <div class="col-lg-8">
            
            <article>
                <h2 class="my-3">{{ $post->title }}</h2>
                
                <a href="/dashboard/posts" class="btn btn-success">
                    <span data-feather="arrow-left"></span> Back to my posts
                </a>
                <a href="" class="btn btn-warning">
                    <span data-feather="edit"></span> Edit
                </a>
                <a href="" class="btn btn-danger">
                    <span data-feather="trash-2"></span> Delete
                </a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>

            </article>
            <a href="/posts" class="btn btn-primary mt-3">Kembali</a>

    </div>
</div>
    
@endsection