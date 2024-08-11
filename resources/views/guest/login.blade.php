@extends('template.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark shadow-sm p-4">
                <div class="card-header text-white">
                    <h3 class="mb-0">Login</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Email address" required autofocus>
                            <label for="email">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label text-light" for="remember">Remember Me</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-warning w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
