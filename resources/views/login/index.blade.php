@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-field">
            <form>
              <h1 class="h3 mb-3 fw-normal text-center">Pwease Lomgin</h1>

              <div class="form-floating mb-3">
                <input type="email" class="form-control rounded-bottom" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating">
                <input type="password" class="form-control rounded-top" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-1" type="submit">Lomgin</button>
              {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}
            </form>
            <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
        </main>

    </div>
</div>


@endsection
