@extends('home.layout.app')
@section('content')

<div class="container marketing">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">

               

                {{-- flash data login gagal --}}
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
                    
                     {{-- flash data --}}
                @if (session()->has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
                    <form action="/login" method="POST">
                        {{-- Cross-site request forgeries --}}
                        @csrf
                    
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                    
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    </form>

                    {{-- halaman registrasi --}}
                    <small class="d-block text-center mt-3">
                        <a href="/register">
                            Don't have an account? Register
                        </a>

                </main>
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
</div>
@endsection