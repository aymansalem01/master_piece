<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url({{asset('assets/images/background.png')}}) no-repeat center center/cover;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.97);
            padding: 60px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
            transition: transform 0.3s ease-in-out;
        }

        .login-container:hover {
            transform: scale(1.05);
        }

        .login-container h1 {
            font-size: 2.4rem;
            margin-bottom: 25px;
            color: #7a6ad8;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            text-align: left;
        }

        .input-group label {
            font-size: 1.1rem;
            margin-bottom: 7px;
            font-weight: bold;
            color: #7a6ad8;
        }

        .input-group input {
            width: 100%;
            padding: 14px;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 1.1rem;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #7a6ad8;
            outline: none;
            box-shadow: 0 0 10px rgba(145, 23, 189, 0.5);
        }

        button {
            width: 100%;
            padding: 14px;
            background: #7a6ad8;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #7a6ad8;
            transform: scale(1.05);
        }

        .login-container p {
            margin-top: 20px;
            font-size: 1rem;
        }

        .login-container a {
            color: #7a6ad8;
            text-decoration: none;
            font-weight: bold;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="login-container">
        <h1>Log In</h1>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Enter your email"
                    value="{{ old('email') }}" required>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit">Log In</button>
        </form>
        <p>Don't have an account? <a href="{{ route('sign') }}">Sign Up</a></p>
    </div>
</body>

</html>
