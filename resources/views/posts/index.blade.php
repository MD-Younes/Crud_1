@extends('layout')

@section('content')
<div class="container">
    <h1>M_Younes</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td><img src="{{ asset('storage/' . $post->image) }}" width="100"></td>
                <td>
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
