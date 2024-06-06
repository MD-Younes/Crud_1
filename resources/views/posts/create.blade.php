@extends('layout')

@section('content')
<div class="container">
    <h1>Create Post</h1>
    @include('posts._form', ['post' => new App\Models\Post, 'route' => ['posts.store'], 'method' => 'POST'])
</div>
@endsection
