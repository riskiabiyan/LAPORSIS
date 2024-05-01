@extends('master')

@section('title', 'Home')
    
@section('content')

<div class="row justify-content-center">
    <div class="col-lg-8">
        <h1>INi adalah Halaman Home</h1>
        <h2>Kamu adalah {{Auth::user()->username}}</h2>
    <form action="/logout" method="POST">
    
        @csrf
       <button class="btn btn-danger">Logout</button>
    </form>

    </div>
</div>
    
@endsection