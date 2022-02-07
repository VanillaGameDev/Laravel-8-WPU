@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="container">
    <div class="row">
        @foreach ( $categories as $category )
        <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}" class="text-decoration-none">
            <div class="card bg-dark text-white mb-4">
                <img src="https://source.unsplash.com/500x500?{{$category->name }}"
                class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center p-0">

                    <h5 class="card-title text-center flex-fill p-4 fs-4"
                    style="background-color: rgba(0, 0, 0, 0.5)">{{ $category->name }}</h5>

                </div>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>


{{-- <p><a href="/posts" class="text-decoration-none">Back To Blog Post</a></p>
    @foreach($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>
        </li>
    </ul>

    @endforeach --}}


@endsection
