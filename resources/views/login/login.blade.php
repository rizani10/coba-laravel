@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                {{-- flash data --}}
                @if (session()->has('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin">
                    <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                    <form>
                    
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
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
    </div>


@endsection