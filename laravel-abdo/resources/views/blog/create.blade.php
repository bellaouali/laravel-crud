@extends('partails.main')

@section('title')
    Blog
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
        <form action="{{ route('blog.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="title"></input>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" rows="8" cols="80" value="{{ old('body') }}" class="form-control" placeholder="body"></textarea>
            </div>
            <button type="submit" name="button" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
