@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
    <h1>Create Post</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" class="form-control">
                <option value="">Choose</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <select name="author_id" class="form-control">
                <option value="">Choose</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-check">
            <input type="checkbox" name="is_published" class="form-check-input">
            <label for="isPublished" class="form-check-label">Publish</label>
        </div>
         <div class="d-flex mt-3">
            <button type="submit" class="btn btn-primary me-2">Create Post</button>
            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>
    </form>
@endsection
