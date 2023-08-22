<!-- resources/views/signup.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="/signup">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="english_proficiency">Proficiency Level</label>
                <select name="english_proficiency" class="form-control" required>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
            </div>
            <h4>Availability</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Availability</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'] as $day)
                    <tr>
                        <td>{{ $day }}</td>
                        <td>
                            <label><input type="radio" name="{{ strtolower($day) }}_availability" value="am"> A.M.</label>
                            <label><input type="radio" name="{{ strtolower($day) }}_availability" value="pm"> P.M.</label>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
@endsection



