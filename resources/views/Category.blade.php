@extends('layouts.main')

@section('container')
<h1 class="mb-3">Post Category : {{ $category }}</h1>
<p><a href="/categories" class="text-decoration-none">See All Category</a></p>
<p><a href="/posts" class="text-decoration-none">Back To Post</a></p>


@foreach($posts as $post)
<article class="mb-5 border-bottom pb-3">

    <h2>{{ $post->title }}</h2>

    <h5>By: {{ $post->user->name }} in <a href="/categories/{{ $post->category->slug }}"
    class="text-decoration-none">{{ $post->category->name }}</a></h5>

    <p>{{ $post->excerpt }}</p>

    <a href="/posts/{{ $post->slug }}"class="text-decoration-none">Read More..</a>

</article>

@endforeach

@endsection
