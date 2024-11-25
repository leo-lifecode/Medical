<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/auth.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>Sign Up Medical</title>
</head>

<body>
    <section class="home">

        <div class="form_container">
            <div class="form signup_form">
                <form action="/signup" method="POST">
                    @csrf
                    <h2>Signup</h2>
                    <div class="input_box">
                        <input name="email" type="email" placeholder="Enter your email" required value="{{ old('email') }}" />
                        <i class="uil uil-envelope-alt email"></i>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input_box">
                        <input name="name" type="text" placeholder="Enter your name" required value="{{ old('name') }}" />
                        <i class="uil uil-user user"></i>
                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input_box">
                        <input name="password" type="password" placeholder="Create password" required />
                        <i class="uil uil-lock password"></i>
                        @error('password')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="button">Signup Now</button>
                    <div class="login_signup">Already have an account? <a href="/login">Login</a></div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>