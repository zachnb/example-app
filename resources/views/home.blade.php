<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to the Language App!</h1>
            <p class="lead">Enhance your language skills with our interactive lessons.</p>
        <hr class="my-4">
            <p>Sign up now to get started!</p>
                <a class="btn btn-primary btn-lg" href="/signup" role="button">Sign Up</a>
    </div>
@endsection