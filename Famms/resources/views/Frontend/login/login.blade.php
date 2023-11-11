<!DOCTYPE html>
<html lang="en">

@if (session('message'))
    {{-- anathi jyare login karse tyare session 1 time vakhat success or failed option batavse // a connceted authcontroller jode che --}}
    <div class="alert alert-danger" role="alert">
        {{ session('message') }}
    </div>
@endif

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <form action="" method="POST">
            @csrf
            <h1>Login </h1>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="remember-forgot">
                <a href="#">Forgot password?</a>
            </div>
            <button>Login</button>

            <div class="d-flex justify-content-between">
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ url('authorized/google') }}">
                        <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                            style="margin-left: 3em;">
                    </a>
                </div>

                <div class="register-link">
                    <p>Don't have an account?<a href="register"> Register</a></p>
                </div>
        </form>
    </div>
</body>

</html>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: url(https://images.unsplash.com/Ys-DBJeX0nE.JPG?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80) no-repeat;
        background-size: cover;
        background-position: center;
    }

    .wrapper {
        width: 420px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(20px);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: #fff;
        border-radius: 10px;
        padding: 30px 40px;
    }

    .wrapper h1 {
        font-size: 36px;
        text-align: center;
    }

    .wrapper .input-box {
        width: 100%;
        height: 60px;
        position: relative;
        margin-top: 20px;
    }

    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 40px;
        font-size: 16px;
        color: #fff;
        padding: 20px 40px 20px 20px;
    }

    .input-box input::placeholder {
        color: #fff;

    }

    .wrapper .remember-forgot {
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: 15px 5px 15px;
    }

    .remember-forgot label input {
        accent-color: #fff;
        margin-right: 3px;
    }

    .remember-forgot a {
        color: #fff;
        text-decoration: none;
    }

    .remember-forgot a:hover {
        text-decoration: none;
        color: black;
    }

    .wrapper .btn {
        width: 100%;
        height: 45px;
        background: #fff;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        color: #333;
        font-weight: 700;
    }

    .wrapper .register-link {
        font-size: 14.5px;
        text-align: center;
        margin: 20px 0 15px;

    }

    .register-link p a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }

    .register-link p a:hover {
        text-decoration: none;
        color: black;
    }
</style>
