@extends('partails.main')

@section('titel')
    Register
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
            <h1>New account</h1>
            <p class="lead">Not our registered customer yet?</p>
            <hr>
            <form action="{{ route('post_register') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" type="text" class="form-control" value=" {{ old('name') }} ">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" type="text" class="form-control" value="{{ old('email') }} ">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password confirmation</label>
                    <input type="password" name="password_confirmation" type="password" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" name="button" class="btn btn-primary"><i
                            class="fa fa-user-md"></i>Register</button>
                </div>
            </form>
        </div>
    </div>

@endsection

