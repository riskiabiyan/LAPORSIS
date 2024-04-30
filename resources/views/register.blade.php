@extends('master')

@section('title', 'register')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-8 col-sm-8">

            <div class="card mt-4">
                <div class="card-header">
                    <h4>Register</h4>
                    </div>
                <div class="card-body">
                    <form action="/simpanuser" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="{{ old('username') }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Daftar</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection