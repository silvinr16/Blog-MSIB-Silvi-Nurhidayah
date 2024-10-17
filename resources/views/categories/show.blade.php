@extends('layouts.app')

@section('content')
    <h2>Category Details</h2>

    <div class="card">
        <div class="card-header">
            {{ $category->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Description</h5>
            <p class="card-text">{{ $category->description }}</p>
        </div>
    </div>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Back to Categories</a>
@endsection
