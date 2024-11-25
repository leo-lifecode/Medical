<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/auth.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>Login Medical</title>
</head>

<body>
    <section class="home">
        <div class="form_container">
            <div class="form login_form">
                <form action="/signin" method="POST">
                    @csrf
                    <h2>Login</h2>
                    @session('loginError')
                        <div class="error" style="text-align: center">{{ session('loginError') }}</div>
                    @endsession
                    <div class="input_box">
                        <input name="email" type="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>
                    <div class="input_box">
                        <input name="password" type="password" placeholder="Enter your password" required />
                        <i class="uil uil-lock password"></i>
                    </div>
                    <button type="submit" class="button">Login Now</button>
                    <div class="login_signup">Don't have an account? <a href="/register">Signup</a></div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>