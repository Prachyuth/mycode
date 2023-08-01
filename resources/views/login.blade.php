<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div id="container">
        <div class="form-wrap">
            <h1>LOGIN</h1>

            <form method="POST" action="/login">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="">
                    <i class="fa-solid fa-eye" id="eye"></i>
                </div>

                <center><button type="submit">Sign in</button></center>

            </form>
        </div>
    </div>
</body>
</html>
