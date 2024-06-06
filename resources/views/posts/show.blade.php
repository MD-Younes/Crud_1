@extends('layout')

@section('content')
<div class="container">
    <h1>Post Details</h1>
    <p><strong>Title:</strong> {{ $post->title }}</p>
    <p><strong>Description:</strong> {{ $post->description }}</p>
    <p><strong>Image:</strong><br>
        <img src="{{ asset('storage/' . $post->image) }}" width="200">
    </p>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to List</a>
</div>
@endsection
