@extends('partails.main')

@section('titel')
    Login
@endsection

@section('body')
    <div class="col-lg-4 mx-auto mt-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="box">
            <h1>Login</h1>
            <p class="lead">Already our customer?</p>
            <hr>
            <form action="{{route('post_login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" type="text" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" type="password" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" name="button" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
