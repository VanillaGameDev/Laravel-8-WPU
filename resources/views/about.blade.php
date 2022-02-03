@extends('layouts.main')

@section('container')

<h2>about page</h2>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle">

@endsection
