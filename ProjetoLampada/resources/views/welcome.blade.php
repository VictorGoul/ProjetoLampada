<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container-login">
        <div class="left-login">
            <h1>Welcome back!</h1>
            <p>You can sign in to access with your existing account.</p>
        </div>
        <div class="right-login">
            <h2>Sign In</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="text" name="email" placeholder="Username or email" required>
                <input type="password" name="password" placeholder="Password" required>
                <div class="options-login">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                    <a href="{{ route('password') }}">Forgot password?</a>
                </div>
                <button type="submit">Sign In</button>
            </form>
            <div class="create-account">
                New here? <a href="{{ route('register') }}">Create an Account</a>
            </div>
        </div>
    </div>
</body>
</html>
