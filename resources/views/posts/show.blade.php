@extends('layouts.app')

@section('title', $post->title . ' - Blog MSIB')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card mb-4 shadow border-0 rounded-lg" style="border: 2px solid #007bff;">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top rounded-top" alt="{{ $post->title }}" style="max-height: 400px; object-fit: cover;">
                    @endif
                    <div class="card-body p-4">
                        <h1 class="card-title mb-3 fw-bold text-primary">{{ $post->title }}</h1>
                        <p class="text-muted mb-3">
                            <i class="bi bi-calendar"></i> Posted on {{ $post->created_at->format('F d, Y') }}
                            <span class="mx-2">|</span>
                            <i class="bi bi-folder"></i> In <strong>{{ $post->category->name }}</strong>
                            <span class="mx-2">|</span>
                            <i class="bi bi-person"></i> By <strong>{{ $post->author->name }}</strong>
                        </p>
                        <hr>
                        <p class="card-text fs-5">
                            {!! nl2br(e($post->content)) !!}
                        </p>
                        <div class="mt-4 d-flex justify-content-between">
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left"></i> Back to Home
                            </a>
                            @auth
                                @if (Auth::id() === $post->author_id)
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">
                                        <i class="bi bi-pencil-square"></i> Edit Post
                                    </a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
