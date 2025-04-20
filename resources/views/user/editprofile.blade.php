<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

        .signup-container {
            background: rgba(255, 255, 255, 0.97);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
            transition: transform 0.3s ease-in-out;
            box-sizing: border-box;
        }

        .signup-container * {
            max-width: 100%;
            box-sizing: border-box;
            word-wrap: break-word;
        }



        .signup-container:hover {
            transform: scale(1.05);
        }

        .signup-container h1 {
            font-size: 2.4rem;
            margin-bottom: 25px;
            color: #7a6ad8;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
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

        .error {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
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

        .signup-container p {
            margin-top: 20px;
            font-size: 1rem;
        }

        .signup-container a {
            color: #7a6ad8;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="signup-container">
        <h1>edit profile</h1>
        <form method="post" action="{{ route('edit', Auth::user()->id) }}">
            @csrf
            @method('PUT')

            <div class="input-group">
                <input type="text" id="name" name="name" placeholder="Enter your full name"
                    value="{{ old('name', Auth::user()->name) }}" required>
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group">
                <input type="email" id="email" name="email" placeholder="Enter your email"
                    value="{{ old('email', Auth::user()->email) }}" required>
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group">
                <input type="password" id="password" name="password" placeholder="Enter New password">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <div class="input-group">
                <input type="tel" id="phone_number" name="phone_number" placeholder="Enter your phone number"
                    value="{{ old('phone_number', Auth::user()->phone_number) }}" required>
                @error('phone_number')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Edit</button>
        </form>

    </div>
</body>

</html>
