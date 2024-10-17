@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <h1 class="mb-4">Authors</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Create New Author
    </a>
    <table class="table table-responsive table-striped table-hover table-bordered align-middle">
        <thead class="bg-black text-white">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Bio</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $key => $author)
                <tr>
                    <td>{{ $key + 1 }}</td> <!-- Nomor urut -->
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->email }}</td>
                    <td>{{ $author->bio }}</td>
                    <td class="text-center">
                        <a href="{{ route('authors.show', $author->id) }}" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> Show
                        </a>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this data?');">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
