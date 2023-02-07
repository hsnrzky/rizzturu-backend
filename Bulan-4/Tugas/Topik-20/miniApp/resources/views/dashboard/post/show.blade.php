@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-9">
            <h2 class="mb-3">{{ $post->title }}</h2>

            <a href="/dashboard/posts" class="btn btn-primary btn-sm text-decoration-none"><span data-feather="arrow-left" class="my-1"></span>
                Back to My Posts
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning btn-sm text-decoration-none"><span data-feather="edit" class="my-1"></span>
                Edit
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm text-decoration-none" onclick="return confirm('Are you sure?')">
                    <span data-feather="trash" class="my-1"></span>
                    Delete
                </button>
            </form>
            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image }}" class="img-fluid mt-5">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-4">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection
