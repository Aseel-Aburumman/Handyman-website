<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('auth/css/app.css') }}">
</head>

<body>
    <div class="content">
        <div class="auth-container"
            style="background-image: url('{{ asset('assets/img/login/1.jpg') }}'); background-size: cover;">
            <div class="auth-box">
                <div class="auth-box-inner">
                    <img class="loginlogo" src="{{ asset('assets/img/logoHorizantal.png') }}" alt="Rakar">
                    <h2>Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p>Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
