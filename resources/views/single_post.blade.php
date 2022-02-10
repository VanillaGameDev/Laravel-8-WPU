@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-7">

            <h2 class="mb-4">{{ $post->title }}</h2>

            <h6>By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in
                <a href="/posts?category={{ $post->category->slug }}"
                class="text-decoration-none">{{ $post->category->name }}</a></h6>

            @if($post->image)
            <div>
                <img src="{{ asset('storage/' . $post->image) }}"
                class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
            class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-5 fs-5">

                <p>{!! $post->body !!}</p>

            </article>


            <a href="/posts">Back To Post</a>
        </div>
    </div>
</div>

@endsection
