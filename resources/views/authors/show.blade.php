@extends('layouts.app')

@section('title', 'Author Details')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Author Details</h3>
        </div>
        <div class="card-body">
            <h5>Name: {{ $author->name }}</h5>
            <h6>Email: {{ $author->email }}</h6>
            <p>Bio: {{ $author->bio }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('authors.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
@endsection
