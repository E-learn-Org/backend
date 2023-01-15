<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('authCss/style.css') }}">
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="wrapper">
                <div class="login">
                    <div class="content_heading">
                        <div class="y_style">
                            <div class="logo">
                                <a href="#">.SME<span>Learn</span></a>
                            </div>

                            <div class="welcome">
                                <h2>Welcome <br>Back!</h2>
                                <p>move across the plateform and enjoy!</p>
                            </div>
                        </div>
                    </div>

                    <div class="content_form">
                        <div class="y_style">
                            <form action="{{ route('login_user') }}" method="POST">

                                @if(Session::has('success'))
                                <span class="success">{{ Session::get('success') }}</span>
                                @endif

                                @if(Session::has('fail'))
                                <span class="error">{{ Session::get('fail') }}</span>
                                @endif

                                @csrf
                                <p>
                                    <label>Matricule</label>
                                    <input class="item" type="text" placeholder="Enter Matricule" name="matricule" id="" value="{{ old('matricule') }}">
                                    <span class="error">@error('matricule') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Password</label>
                                    <input class="item" type="password" placeholder="Enter Password" name="password" id="">
                                    <span class="error">@error('password') {{ $message }} @enderror</span>
                                </p>

                                <p class="check">
                                    <input class="item" type="checkbox" id="remember">
                                    <label for="remember">Remember me</label>
                                </p>

                                <p>
                                    <a href="#" class="forgot">Forgot Password</a>
                                </p>

                                <p>
                                    <input type="submit" class="button" value="Login">
                                </p>
                            </form>

                            <div class="after_form">
                                <p>Don't have an account?</p>
                                <a href="register" class="t_signup">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('authJs/script.js') }}"></script>
</body>
</html>
