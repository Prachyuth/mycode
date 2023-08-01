<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
</head>
<body>
    <div id="container">
        <!-- Form Wrap Start -->
        <div class="form-wrap">
            <h1>Sign Up</h1>
            <p>Register for free</p>
            <!-- Form Start -->
            <form action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label for="first-name">Full Name</label>
                    <input type="text" name="name" id="first-name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="country">Role</label>
                    <select id="country" name="role_id" required>
                        <option value="">Select your Role</option>
                        <option value="2">Manager</option>
                        <option value="3">Client</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required>
                </div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <!-- Form Wrap End -->
        <footer>
            <!-- Add footer content here if needed -->
        </footer>
    </div>
</body>
</html>
