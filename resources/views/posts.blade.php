@extends('layouts.main')

@section('container')
{{-- bagian title --}}
<h1 class="mb-3 text-center">{{ $title }}</h1>

{{-- bagian search --}}
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/posts">

            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search"
                value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit">Search</button>
              </div>
        </form>
    </div>
</div>

{{-- bagian post yang baru di bikin --}}
@if($posts->count())

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mb-5">

                @if($posts[0]->image)
                <div>
                    <img src="{{ asset('storage/' . $posts[0]->image) }}"
                    class="card-img-top" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400?{{ $posts[0]->category->name }}"
                class="card-img-top" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                @endif

                <div class="card-body text-center">

                <h3 class="card-title">{{ $posts[0]->title }}</h3>

                    <h5>By: <a href="/posts?author={{ $posts[0]->author->username }}"
                    class="text-decoration-none">{{ $posts[0]->author->name }}</a> in
                    <a href='/posts?category={{ $posts[0]->category->slug }}'

                    class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                    {{ $posts[0]->created_at->diffForHumans() }}</h5>

                    <p class="card-text">{{ $posts[0]->excerpt }}</p>

                    <a href="/posts/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-primary">Read More..</a>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- bagian pagination  --}}
{{-- <div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div> --}}

{{-- bagian posts --}}
<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.5)">
                    <a href="/posts?category={{ $post->category->slug }}"class="text-decoration-none text-white">
                        {{ $post->category->name }}
                    </a>
                </div>

                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}"
                    class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                    class="card-img-top" alt="{{ $post->category->name }}">
                @endif

                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <h5>By: <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a>
                        {{ $post->created_at->diffForHumans() }}</h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <p class="card-text">{{ $post->title }}</p>
                        <a href="/posts/{{ $post->slug }}"class="text-decoration-none btn btn-primary">Read More..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@else

<p class="text-center fs-4">No Posts Found.</p>

@endif

{{-- bagian pagination  --}}
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

    {{-- @foreach($posts->skip(1) as $post)
    <article class="mb-5 border-bottom pb-3">

        <h2>{{ $post->title }}</h2>

        <h5>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"
        class="text-decoration-none">{{ $post->category->name }}</a></h5>

        <p>{{ $post->title }}</p>

        <a href="/posts/{{ $post->slug }}"class="text-decoration-none">Read More..</a>

    </article>

    @endforeach --}}

@endsection
