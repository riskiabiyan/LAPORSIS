@extends('master')

@section('title','login')

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
    <div class="col-lg-4 col-md-8 col-sm-8 mt-4">
        <div class="card">
            <div class="card-header"><h4>Login</h4></div>
            <div class="card-body">
                <form action="/ceklogin" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
    
