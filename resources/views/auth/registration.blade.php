<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link rel="stylesheet" href="{{ asset('authCss/style.css') }}">
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="wrapper">
                <div class="sign_up">
                    <div class="content_heading">
                        <div class="y_style">
                            <div class="logo">
                                <a href="#">.SME<span>Learn</span></a>
                            </div>

                            <div class="welcome">
                                <h2>Create An <br>Account Now</h2>
                                <p>move across the plateform</p>
                            </div>
                        </div>
                    </div>

                    <div class="content_form">
                        <div class="y_style">
                            <form action="{{ route('register_student') }}" method="POST">

                                @if(Session::has('success'))
                                <span class="success">{{ Session::get('success') }}</span>
                                @endif

                                @if(Session::has('fail'))
                                <span class="error">{{ Session::get('fail') }}</span>
                                @endif
                                {{-- verifies the student is the person making the request!!!! --}}
                                @csrf
                                <p>
                                    <label>Full name</label>
                                    <input class="item" type="text" placeholder="Enter Fullname" name="fullname" id="" value="{{ old('fullname') }}">
                                    <span class="error">@error('fullname') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Email</label>
                                    <input class="item" type="email" placeholder="Enter Email" name="email" id="" value="{{ old('email') }}">
                                    <span class="error">@error('email') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Phone Number</label>
                                    <input class="item" type="number" placeholder="Enter Phone number" name="phone" id="" value="{{ old('phone') }}">
                                    <span class="error">@error('phone') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Matricule</label>
                                    <input class="item" type="text" placeholder="Enter Matricule" name="matricule" id="" value="{{ old('matricule') }}">
                                    <span class="error">@error('matricule') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Date Of Birth</label>
                                    <input class="item" type="date" placeholder="Enter Date of birth" name="dob" id="" value="{{ old('dob') }}">
                                    <span class="error">@error('dob') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Password</label>
                                    <input class="item" type="password" placeholder="Enter Password" name="password" id="">
                                    <span class="error">@error('password') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Confirm Password</label>
                                    <input class="item" type="password" placeholder="Confirm Password" name="cpassword" id="">
                                    <span class="error">@error('cpassword') {{ $message }} @enderror</span>
                                </p>

                                <p class="check">
                                    <input class="item" type="checkbox" id="term">
                                    <label for="term">I agree to all the <a href="#">terms and conditions</a> </label>
                                </p>

                                <p>
                                    <input type="submit" class="button" value="Register">
                                </p>
                            </form>

                            <div class="after_form">
                                <p>Already have an account?</p>
                                <a href="login" class="t_login">Login</a>
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
