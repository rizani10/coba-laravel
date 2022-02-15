@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-registrasi">
                    <h1 class="h3 mb-3 fw-normal text-center">Registrasi Form</h1>
                    <form action="/register" method="POST">
                    {{-- Cross-site request forgeries --}}
                    @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Your Name" name="name" required value="{{ old('name') }}">
                            <label for="name">Your Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Your Name" name="username" required value="{{ old('username') }}">
                            <label for="username">Username</label>
                            {{-- validation --}}
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required>
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    
                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                    </form>

                    {{-- halaman login --}}
                    <small class="d-block text-center mt-3">
                        <a href="/login">Already have an account?</a>
                    </small>
                </main>
            </div>
        </div>
    </div>


@endsection