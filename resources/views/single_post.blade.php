@extends('layouts.main')

@section('container')
<h1 class="mb-4">{{ $post->title }}</h1>
<p><a href="/categories" class="text-decoration-none">See All Category</a></p>

<article class="mb-5">

    <h6>By: <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"
    class="text-decoration-none">{{ $post->category->name }}</a></h6>

    <p>{!! $post->body !!}</p>

    <a href="/posts" class="text-decoration-none">Back To Post</a>
</article>


@endsection
