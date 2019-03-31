@extends('layouts.app')

@section('content')

<div class="row mt-3">
    <div class="col-md-12">
        <img src="{{ asset($blog->image) }}" alt="" class = "card-img-top mb-3" height="50%"/>
        <h3>{{ $blog->title }}</h3>
        <hr />
        <p class="lead">{{ $blog->content }}</p>
        <a href="{{ route('edit_blog_path', ['blog' => $blog->id]) }}" class="btn btn-outline-info">Edit</a>
        <a href="{{ route('blogs_path') }}" class="btn btn-outline-secondary">Back</a>
        
    <form action="{{ route('delete_blog_path', ['blog' => $blog->id] ) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-outline-danger mt-3">Delete</button>
    </form>
    </div>
    
</div>

@endsection