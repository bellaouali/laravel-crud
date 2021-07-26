@extends('partails.main')

@section('title')
    Blog
@endsection

@section('body')

    <div class="card text-center mx-auto mt-5" style="width: 40rem;">
        <button type="button" class="btn btn-light"><a href="{{ route('blog_create') }}">Create</a></button>

        @foreach ($blogs as $blog)
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->body }}.</p>
                <hr>
            </div>
        <div>
            <a href="{{ route('blog_edit',$blog->id) }}">Edit</a>
            <a href="{{ route('blog.delete', $blog->id) }}">Delete</a>
        </div>
        @endforeach
    </div>
@endsection
