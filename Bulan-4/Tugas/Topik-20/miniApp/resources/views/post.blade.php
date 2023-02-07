
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <p>By. <a href="/posts?author={{  $post->author->username }}">{{  $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>

            @if ($post->image)
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image }}" class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-4">
                {!! $post->body !!}
            </article>

            <a href="/posts">Back to Blog</a>
        </div>
    </div>
</div>

    <article>
    </article>
@endsection
