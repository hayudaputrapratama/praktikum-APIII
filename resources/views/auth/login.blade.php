<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #ddecffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            width: 900px;
            height: 530px;
            border-radius: 15px;
            display: flex;
            overflow: hidden;
            box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
        }

        /* LEFT - LOGIN FORM */
        .left {
            width: 50%;
            padding: 50px 60px;
        }

        .left h2 {
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .left form input {
            width: 100%;
            padding: 13px;
            border: 1px solid #060606ff;
            border-radius: 10px;
            margin: 10px 0;
            outline: none;
        }

        .remember {
            display: flex;
            justify-content: space-between;
            
            margin: 5px 0 15px 0;
            font-size: 14px;
        }

        .remember-right {
            display: flex;
            align-items: center;
            gap: 5px;
        }


        .left .btn-login {
            width: 100%;
            background: 0af7e3ff;
            border: none;
            padding: 12px;
            color: white;
            font-size: 15px;
            font-weight: bold;
            border-radius: 25px;
            cursor: pointer;
            transition: .3s;
        }

        .left .btn-login:hover {
            background: 0af7e3ff;
        }

        .or {
            text-align: center;
            margin: 15px 0;
            font-size: 14px;
            color: #0f0e0eff;
        }

        .social {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .social a {
            width: 38px;
            height: 38px;
            border: 1px solid #070707ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0c0c0cff;
            transition: .3s;
        }

        .social a:hover {
            background: #020202ff;
            border-color: transparent;
            color: white;
        }

        /* RIGHT - ORANGE PANEL */
        .right {
            width: 50%;
            background: linear-gradient(135deg, #0af7e3ff, #0af7e3ff);
            color: white;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;

            padding: 20px 40px;
        }

        .right i {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .right h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .right p {
            font-size: 15px;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .right .btn-register {
            padding: 12px 40px;
            border-radius: 25px;
            border: 2px solid white;
            background: transparent;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: .3s;
        }

        .right .btn-register:hover {
            background: white;
            color: #161616ff;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- LEFT (LOGIN FORM) -->
    <div class="left">
        <h2>Log In</h2>

        <form method="POST" action="{{ route('form.login') }}">
            @csrf

            <input type="email" name="email" placeholder="email" required>
            @error('email') <small style="color:red">{{ $message }}</small> @enderror

            <input type="password" name="password" placeholder="password" required>
            @error('password') <small style="color:red">{{ $message }}</small> @enderror

            <div class="remember">
                <label class="remember-right">
                    <input type="checkbox">Remember Me
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn-login">LOG IN</button>
        </form>
    </div>

    <!-- RIGHT (WELCOME PANEL) -->
    <div class="right">
        <i class="fa-solid fa-user-plus"></i>
        <h2>Login Di Halaman Hayuda</h2>
        <p>Silahkan Masukan email dan password </p>

        <a href="{{ route('register') }}">
            <button class="btn-register">REGISTER</button>
        </a>
    </div>

</div>

</body>
</html>