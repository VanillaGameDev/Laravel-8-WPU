@extends('layouts.main')

@section('container')

<section>
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-field">
            <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
            <form action="/register" method="POST">
                @csrf

                <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control @error ('name') is-invalid @enderror"
                    id="name" placeholder="name" required value="{{ old('name') }}">
                <label for="name">Name</label>

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                </div>

                <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control @error ('username') is-invalid @enderror"
                id="username" placeholder="username" required value="{{ old('username') }}">
                <label for="username">Username</label>

                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

                </div>

                <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control rounded-bottom @error ('email') is-invalid @enderror"
                id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email Address</label>

                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

                </div>

                <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control rounded-top @error ('password') is-invalid @enderror"
                id="password" placeholder="Password" required>
                <label for="password">Password</label>

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
            </form>
            <small class="d-block text-center mt-3">Already Registered? <a href="/login">Login</a></small>
        </main>

    </div>
</div>

</section>


@endsection
