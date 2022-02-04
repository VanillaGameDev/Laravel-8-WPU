@extends('layouts.main')

@section('container')
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
