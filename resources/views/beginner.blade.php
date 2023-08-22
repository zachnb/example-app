@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Welcome to the Beginner Level</h1>
    @if ($englishLevel === 'beginner')
        <!-- Display content specific to beginner level -->
    @else
        <!-- Display a message or redirect if the user's level doesn't match -->
    @endif
</div>
@endsection