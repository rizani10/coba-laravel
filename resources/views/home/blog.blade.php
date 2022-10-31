  @extends('home.layout.app')
  @section('content')

  <h1 class="mb-3 mt-4 text-center">{{ $title }}</h1>

    {{-- pencarian --}}
    <div class="row justify-content-center mb-3">
      <div class="col-md-8">
            <form action="/posts" method="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Cari Postingan Berita" value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
       </div>
      </div>
    {{-- pencarian --}}

    {{-- Potingan  --}}
    
   @if ($posts -> count())          {{--Hitung jumlah Potstingan --}}
        {{-- Hero --}}
        <div class="card mb-3 rounded">
            {{-- logika jika ada gambar yang di upload, jika tidak ada ambil dari api unsplash --}}
            @if ($posts[0]->image)
                <div style="max-height: 450px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->title }}" class="img-fluid mb-3">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body text-center text-black bg-white">
              <h5 class="fst-italic">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}
                </a>
                 <small class="text-muted">
                    <p>
                        Oleh : <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}
                        </a> Kategori 
                        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}
                        </a> {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                </small>
              </h5>
               <p class="lead my-3 card-text">{{ $posts[0]->excerpt }}</p>
               <p class="lead mb-0"><a href="/posts/{{ $posts[0]->slug }}" class="text-black fw-bold text-decoration-none">Lanjutkan membaca...</a></p>
            </div>
        </div>


        {{-- struktruk postingan --}}
          <div class="row mb-2">
            @foreach ($posts->skip(1) as $post)
              <div class="col-md-6 mb-2">
                <div class="row g-0 border rounded overflow-hidden mb-4 shadow-sm h-md-250 position-relative">
                  <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block  mb-2 text-primary">
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
                        <div class="col-auto d-none d-lg-block">
                          @if ($post->image)
                            <img class="bd-placeholder-img" width="200" height="250" src="{{ asset('storage/' . $post->image) }}" >
                          @else
                            <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x400?{{ $post->category->name }}" >
                          @endif
                        </div>
                      </div>
                </div>
            @endforeach
          </div>
      {{-- struktruk postingan --}}
      @else
         <p class="text-center fs-4">Tidak ada berita yang di buat</p>        {{--Jika tidak ada tampilkan --}}  
    @endif

      {{-- pagination --}}
          <div class="d-flex justify-content-center">
              {{ $posts->appends(request()->query())->links() }}
          </div>
      {{-- pagination --}}
    {{-- Potingan  --}}

  @endsection