@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

<div class="col-lg-10">
    <!-- Alert Created Post Successfull -->
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- Alert Deleted Post Successfull -->
    @if (session()->has('danger'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('danger') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <!-- Button Create -->
    <a href="/dashboard/posts/create" class="btn btn-success mb-3">
        Create new post
    </a>
    <!-- Table Posts -->
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($posts->count())
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye" color="blue"></span></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0 p-0 bg-transparent" onclick="return confirm('Are you sure?')"><span data-feather="trash-2" color="red"></span></button>
                            </form>
                            <a href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit" color="black"></span></a>
                        </td>
                        @endforeach
                        @else
                        <td colspan="4" class="text-center">
                            <span class="mt-3">No Post Found Here</span>
                        </td>
                        @endif
                    </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
