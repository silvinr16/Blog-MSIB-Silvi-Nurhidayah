@extends('layouts.app')

@section('content')
    <h2>{{ isset($author) ? 'Update' : 'Create' }} Author</h2>

    <form action="{{ isset($author) ? route('authors.update', $author) : route('authors.store') }}" method="POST">
        @csrf
        @if(isset($author))
            @method('PUT')
        @endif
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $author->name ?? '') }}" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $author->email ?? '') }}" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control" placeholder="Write a short bio">{{ old('bio', $author->bio ?? '') }}</textarea>
        </div>

        <!-- Tombol Create dan Back berada sejajar di bagian bawah dengan Create di kiri -->
        <div class="d-flex justify-content-start mt-3">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> {{ isset($author) ? 'Update' : 'Create Author' }}
            </button>
            <a href="{{ route('authors.index') }}" class="btn  btn-outline-secondary ms-3">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </form>
@endsection
