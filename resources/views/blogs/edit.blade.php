@extends('layouts.app')

@section('content')
<form action="{{ route('update_blog_path', ['blog' => $blog->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
    <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
    </div>

    <div class="form-group">
        <label for="content">Content</label>
    <textarea name="content" rows="10" class="form-control">{{ $blog->content }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary">Edit blog post</button>
    </div>
</form>
@endsection

