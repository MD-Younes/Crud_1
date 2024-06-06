@extends('layout')

@section('content')
<div class="container">
    <h1>Edit Post</h1>
    @include('posts._form', ['post' => $post, 'route' => ['posts.update', $post->id], 'method' => 'PUT'])
</div>
@endsection
