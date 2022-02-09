@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row mb-5">
        <div class="col-lg-7">

            <h1 class="mb-4">{{ $post->title }}</h1>
            <h6>Your Post in
                <a href="/posts?category={{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}
                </a>
                Category
            </h6>


            <div>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back To All My Post</a>
                <a href="" class="btn btn-warning"><span data-feather="eye"></span> Edit This Post</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete This Post</a>
            </div>


            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
            class="card-img-top mt-3" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-5 fs-5">

                <p>{!! $post->body !!}</p>

            </article>
        </div>
    </div>
</div>

@endsection
