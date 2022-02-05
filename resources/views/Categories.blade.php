@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row">
        @foreach ( $categories as $category )
        <div class="col-md-4">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x500?{{$category->name }}"
                class="card-img" alt="...">
                <div class="card-img-overlay d-flex align-items-center">
                    <h5 class="card-title text-center">{{ $category->name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<h1 class="mb-3">Post Categories</h1>

<p><a href="/posts" class="text-decoration-none">Back To Blog Post</a></p>
    @foreach($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>
        </li>
    </ul>

    @endforeach


@endsection
