<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
      <a class="navbar-brand" href="/">My Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link {{ ($active === 'home') ? 'active' : '' }} "  href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($active === 'posts') ? 'active' : '' }}" href="/posts">Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">Categories Blog</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ ($active === 'authors') ? 'active' : '' }}" href="/authors">Authors Blog</a>
        </li>
      </ul>

      

      {{-- jika sudah login jangn tampilkan tulisan login --}}
      <ul class="navbar-nav ms-auto">
        @auth

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcom back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/dashboard">
                    <i class="bi bi-speedometer2"></i> My Dashboard</a>
                  </li>
                  <li><hr class="dropdown-divider"></li>
                  <li>

                    {{-- form logout --}}
                    <form action="/logout" method="POST">
                      @csrf
                      <button class="dropdown-item" type="submit">
                        <i class="bi bi-power"></i> Logout
                      </button>
                    </form>
                    
                  </li>
                </ul>
              </li>

            @else

              <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : '' }}">
                <i class="bi bi-box-arrow-in-right"></i> Login Admin
              </a>
              <a href="" class="nav-link {{ ($active === 'login') ? 'active' : '' }}">
                <i class="bi bi-box-arrow-in-right"></i> Login Siswa
              </a>
        @endauth
      </ul>
    </div>
  </div>
</nav>