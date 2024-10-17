@extends('layouts.app')

@section('content')
    <h2>Categories</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-4">Create Category</a>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="bg-black text-white">
                <tr>
                    <th class="text-center" style="width: 5%;">No</th>
                    <th style="width: 60%;">Name</th>
                    <th class="text-center" style="width: 35%;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $index => $category)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td> <!-- Nomor urut kategori -->
                        <td>{{ $category->name }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <!-- Show Button -->
                                <a href="{{ route('categories.show', $category) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i> Show
                                </a>

                                <!-- Edit Button -->
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <!-- Delete Button -->
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
