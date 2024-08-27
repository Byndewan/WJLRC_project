<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Submit</title>
    @include('layout.logo')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist_front/registration_to_login/style.css') }}">
</head>
<body>
    <div class="container">
    @csrf
        <form method="POST" action="{{ route('registration_submit') }}">
            <p class="instruction">Please click this button to proceed to the login page</p>
            <a href="{{ route('user_login') }}" class="login-btn">Login</a>
        </form>
    </div>
</body>
</html>
