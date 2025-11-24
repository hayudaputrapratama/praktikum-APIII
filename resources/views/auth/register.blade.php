<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>

    
    <!-- Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: #dfe9f5;
        }

        .container {
            position: relative;
            background: #fff;
            width: 900px;
            height: 520px;
            border-radius: 15px;
            overflow: hidden;
            display: flex;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
            animation: fadein .9s ease-in-out;
        }

        @keyframes fadein {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .left {
            width: 55%;
            background: linear-gradient(135deg, #0af7e3ff, #0af7e3ff);
            color: white;

            /* Pusatkan seluruh isi */
            display: flex;
            flex-direction: column;
            justify-content: center;   /* center vertikal */
            align-items: center;       /* center horizontal */
            text-align: center;

            padding: 0 40px;           /* hilangkan padding atas-bawah */
        }


        .left h2 {
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .left p {
            font-size: 15px;
            opacity: .9;
        }

        .left button {
            margin-top: 25px;
            padding: 12px 35px;
            border-radius: 25px;
            background: white;
            border: none;
            color: 0af7e3ff;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .left button:hover {
            transform: scale(1.05);
        }

        .right {
            width: 55%;
            padding: 45px 60px;
        }

        .right h2 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 18px;
        }

        form input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #bbb;
            border-radius: 10px;
            margin: 8px 0;
            outline: none;
        }

        .terms {
            margin: 6px 0 15px 0;
            font-size: 14px;
        }

        .terms input { margin-right: 5px; }

        .btn-register {
            width: 100%;
            padding: 12px;
            background: 0af7e3ff;
            border: none;
            border-radius: 25px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .btn-register:hover {
            background: 0af7e3ff;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Left Panel -->
    <div class="left">
        <i class="fa-solid fa-right-to-bracket fa-3x"></i>
        <h2>Welcome Back!</h2>
        <p>To keep connected with us please login with your personal info</p>
        <a href="{{ route('login') }}">
            <button>Log In</button>
        </a>
    </div>

    <!-- Right Panel -->
    <div class="right">
        <h2>Sign Up</h2>

        <p style="text-align:center; font-size:13px; margin-bottom:12px;">or use your email for registration</p>

        <form method="POST" action="{{ route('form.register') }}">
            @csrf

            <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}" required>
            @error('name') <small style="color:red">{{ $message }}</small> @enderror

            <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required>
            @error('email') <small style="color:red">{{ $message }}</small> @enderror

            <input type="password" name="password" placeholder="Password (min 8 characters)" required>
            @error('password') <small style="color:red">{{ $message }}</small> @enderror


            <button type="submit" class="btn-register">REGISTER</button>
        </form>
    </div>

</div>

</body>
</html>