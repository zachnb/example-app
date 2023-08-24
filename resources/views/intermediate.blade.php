@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('sidebar') <!-- Include the sidebar navigation -->
        </div>
        <div class="col-md-9">
            <h1>Welcome to the Intermediate Level</h1>
            @if ($englishLevel === 'intermediate')
                <!-- Display content specific to beginner level -->
            @else
                <!-- Display a message or redirect if the user's level doesn't match -->
            @endif
        </div>
    </div>
</div>
@endsection