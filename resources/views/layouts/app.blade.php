<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cyan-theme.css') }}">
</head>
<body>
    <div class="header text-center">
        <h1>Welcome to the Language App!</h1>
        <p>Enhance your language skills with our interactive lessons.</p>
        <p>Sign up now to get started!</p>
    </div>
    <div class="navbar-container">    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/signup">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container center-container">
        @yield('content') <!-- Place the content here -->
    </div>
</body>
</html>