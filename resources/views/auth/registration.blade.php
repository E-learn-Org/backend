<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link rel="stylesheet" href="{{ asset('authCss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('authCss/style1.css') }}">
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
                            <form onsubmit="return checkPassword()" action="{{ route('register_student') }}" method="POST">
                            {{-- <form onsubmit="return checkPassword()" action=""> --}}

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
                                    <input class="item" type="text" placeholder="Enter Fullname" name="fullname" value="{{ old('fullname') }}">
                                    <span class="error">@error('fullname') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Email</label>
                                    <input class="item" type="email" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                                    <span class="error">@error('email') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Phone Number</label>
                                    <input class="item" type="number" placeholder="Enter Phone number" name="phone" value="{{ old('phone') }}">
                                    <span class="error">@error('phone') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Matricule</label>
                                    <input class="item" type="text" placeholder="Enter Matricule" name="matricule" value="{{ old('matricule') }}">
                                    <span class="error">@error('matricule') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Date Of Birth</label>
                                    <input class="item" type="date" placeholder="Enter Date of birth" name="dob" value="{{ old('dob') }}">
                                    <span class="error">@error('dob') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label for="password">Password</label>
                                    <input class="item" type="password" placeholder="Enter Password" name="password" id="password">
                                    <span class="error">@error('password') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label for="cpassword">Confirm Password</label>
                                    <input class="item" type="password" placeholder="Confirm Password" name="cpassword" id="cpassword">
                                    <span class="error">@error('cpassword') {{ $message }} @enderror</span>
                                </p>

                                <span id="message" class="message"></span>

                                <p>
                                    <label>Specialty</label>
                                    {{-- <div class="dropdown"> --}}
                                        {{-- <input type="text" class="textBox" placeholder="Select Specialty" value="{{ old('specialty_id') }}" name="specialty_id"> --}}
                                        <select name="specialty_id">
                                            <?php for ($i=0; $i < count($data1) ; $i++) {?>
                                                <option value="<?php echo $data1[$i]->id; ?>">{{ $data1[$i]->specialty }}</option>
                                            <?php } ?>
                                        </select>
                                        {{-- <div class="option"> --}}
                                            {{-- var_dump($data1); --}}


                                            {{-- <div>Network</div>
                                            <div>Security</div> --}}
                                        {{-- </div> --}}
                                    {{-- </div> --}}
                                    <span class="error">@error('specialty_id') {{ $message }} @enderror</span>
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

