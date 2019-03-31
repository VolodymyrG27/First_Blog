@extends('layouts.app')

@section('content')
    <div class="row mt-3">
        @foreach ($blogs as $blog)
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <a href="{{ route('blog_path', ['blog'=> $blog->id])}}">{{ $blog->title }}</a>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('blog_path', ['blog' => $blog->id] ) }}">
                            <img src="{{ asset($blog->image) }}" alt="" class="card-img-top"/>
                        </a>
                        <p class="lead mt-5">
                            Posted
                            {{ $blog->created_at->diffForHumans() }}
                        </p>
                    <a href="{{ route('blog_path', ['blog' => $blog->id] ) }}" class="btn btn-outline-primary">View Post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
