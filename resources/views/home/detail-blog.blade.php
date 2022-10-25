{{-- 
@extends('home.layout.app')
@section('content')
    <div class="row g-5 mt-3">
      <div class="col-md-8">

        <article class="blog-post">
          <h2 class="blog-post-title">{{ $post->title }}</h2>
          <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} Oleh: <a href="#">{{ $post->author->name }}</a> Kategori: <a href="#">{{ $post->category->name }}</a></p>

          
              @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                  <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" class="img-fluid">
                 </div>
              @else
                 <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">
              @endif         

            <article class="my-3 fs-5">
              {!! $post->body !!}
        </article>

      </div>

      <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">

          <div class="p-4">
            <h4 class="fst-italic">Archives</h4>
          </div>
        </div>
      </div>
    </div>
@endsection --}}

@extends('home.layout.app')
@section('content')
  
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-8">
          <article class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} Oleh: <a href="#">{{ $post->author->name  }}</a>
            Kategori: <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p> 
            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                  <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">
            @endif 
          </article>
          <article class="my-3 fs-5">
            {!! $post->body !!}
          </article>
        </div>

        <div class="col-lg-4">
          <div class="position-sticky" style="top: 2rem;">
            <div class="p-4">
              <h4 class="fst-italic">Berita Sebelumnya</h4>
              <div class="card-body shadow-sm h-md-250 position-relative">
                @foreach ($posts->skip(1) as $post)
                  {{-- <strong class="d-inline-block  mb-2 text-primary">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name  }}
                    </a>  
                  </strong> --}}
                  <h4 class="mb-2">
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }} ....
                    </a>
                  </h4>
                  <div class="mb-1 text-muted">
                    Oleh : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}
                    </a> {{ $post->created_at->diffForHumans() }}
                  </div>
                @endforeach
                <a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 https://dumetschool.com">
                  <img src="https://www.kursuswebsite.org/wp-content/uploads/2017/03/email.png" alt="Email" />
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection