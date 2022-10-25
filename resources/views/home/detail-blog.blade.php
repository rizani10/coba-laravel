
@extends('home.layout.app')
@section('content')
    <div class="row g-5 mt-3">
      <div class="col-md-8">

        {{-- Detail postingan --}}
        <article class="blog-post">
          <h2 class="blog-post-title">{{ $post->title }}</h2>
          <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} Oleh: <a href="#">{{ $post->author->name }}</a> Kategori: <a href="#">{{ $post->category->name }}</a></p>

          
            {{-- gambar --}}
              @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                  <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" class="img-fluid">
                 </div>
              @else
                 <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">
              @endif           
            {{-- gambar --}}

            <article class="my-3 fs-5">
              {!! $post->body !!}
            </article>some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
        </article>

      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
          {{-- <div class="p-4 mb-3 bg-light rounded">
            <h4 class="fst-italic">About</h4>
            <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
          </div> --}}

          <div class="p-4">
            <h4 class="fst-italic">Archives</h4>
            @foreach ($posts as $post)
                    <strong class="d-inline-block text-primary">
                       <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name  }}
                       </a>  
                    </strong>
                      <h4 class="mb-0">
                         <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}
                         </a>
                        </h4>
                        <div class="mb-1 text-muted">
                          Oleh : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}
                          </a> {{ $post->created_at->diffForHumans() }}
                        </div>
                        <p class="card-text mb-auto">{{ $post->excerpt }} .... </p>
                        <a href="/posts/{{ $post->slug }}" class="stretched-link text-decoration-none">Lanjutkan membaca....</a>
                      </div>
            @endforeach

        </div>
      </div>
    </div>

@endsection