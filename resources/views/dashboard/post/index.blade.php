@extends('layouts.dashboard')

@section('title', 'Post List')

@section('content')
<div class="container mt-5">
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
            <th>Images</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>${{ number_format($post->price, 2) }}</td>
                <td>
                    <div class="d-flex flex-wrap">
                        @foreach($post->images as $image)
                            <img
                                src="{{ $image ? asset('storage/' . $image->image) : '' }}"
                                alt="post image"
                                class="img-thumbnail me-2 mb-2"
                                width="100">
                        @endforeach
                    </div>
                </td>
                <td>
                    <div class="d-flex">
                        <!-- Edit Button -->
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                        <!-- Delete Form -->
                        <form action="{{ route('post.destroy', $post->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
@endsection
