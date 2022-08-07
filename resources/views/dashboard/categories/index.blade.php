@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-6" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="col-lg-8">
    <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
</div>

<div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $categories as $category )
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
              <a href="/posts?category={{ $category->slug }}" class="badge bg-info text-decoration-none">
                <span data-feather="eye"></span>View</a>

              {{-- <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning text-decoration-none">
                <span data-feather="edit"></span>Edit</a> --}}

              <form action="/dashboard/categories/{{ $category->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin Mau Hapus?')">
                    <span data-feather="x-circle"></span>Delete</button>
              </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
