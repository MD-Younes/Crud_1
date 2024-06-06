<form action="{{ isset($post->id) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($post->id))
        @method('PUT')
    @endif

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" required>{{ old('description', $post->description) }}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image">
        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" width="100" class="mt-2">
        @endif
    </div>

    <button type="submit" class="btn btn-success">Submit</button>
</form>
