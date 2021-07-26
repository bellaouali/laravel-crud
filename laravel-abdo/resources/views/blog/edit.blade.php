@extends('partails.main')

@section('title')
  Edit  Blog
@endsection

@section('body')
    <div class="mx-auto mt-5" style="width: 37.5rem;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('blog_edit',$blog->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" name="title" value="{{ $blog->title }}" class="form-control"></input>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" rows="8" cols="80">{{ $blog->body }}</textarea>
            </div>
            <button type="submit" name="button" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection