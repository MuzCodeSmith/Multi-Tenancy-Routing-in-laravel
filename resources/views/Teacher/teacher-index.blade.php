<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Signup</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        .container h2 {
            margin-bottom: 20px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-btn {
            background-color: #04AA6D;
            color: white;
        }

        .signup-btn {
            background-color: #007BFF;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, Teacher</h2>
        <p>Please login or sign up to continue.</p>
        <a href="{{route('teacher.login')}}" class="btn login-btn">Login</a>
        <a href="{{route('teacher.register')}}" class="btn signup-btn">Sign Up</a>
    </div>
</body>
</html>
