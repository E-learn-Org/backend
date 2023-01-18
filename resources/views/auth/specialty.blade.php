<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Specialty</title>
    <link rel="stylesheet" href="{{ asset('authCss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('authCss/style1.css') }}">
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="wrapper wrapper1">
                <div class="login">
                    <div class="content_heading">
                        <div class="y_style">
                            <div class="logo">
                                <a href="#">.SME<span>Learn</span></a>
                            </div>

                            <div class="welcome">
                                <h2>Create New <br>Specialty</h2>
                                <p>Access this page and create new specialty</p>
                            </div>
                        </div>
                    </div>

                    <div class="content_form">
                        <div class="y_style">
                            <form action="{{ route('insert-specialty') }}" method="POST">

                                {{-- @if(Session::has('success'))
                                <span class="success">{{ Session::get('success') }}</span>
                                @endif

                                @if(Session::has('fail'))
                                <span class="error">{{ Session::get('fail') }}</span>
                                @endif --}}

                                @csrf

                                <p>
                                    <label>Specialty</label>
                                    <div class="dropdown">
                                        <input type="text" class="textBox" placeholder="Select Specialty" value="{{ old('specialty') }}" name="specialty">
                                        <div class="option">
                                            <div onclick="show('Software engineering')">Software engineering</div>
                                            <div onclick="show('Network')">Network</div>
                                            <div onclick="show('Security')">Security</div>
                                        </div>
                                    </div>
                                    <span class="error">@error('specialty') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Semester</label>
                                    <div class="dropdown" id="dropdown2">
                                        <input type="text" class="textBox1" placeholder="Select Semester" value="{{ old('semester') }}" name="semester">
                                        <div class="option">
                                            <div onclick="display('1')">1</div>
                                            <div onclick="display('2')">2</div>
                                        </div>
                                    </div>
                                    <span class="error">@error('semester') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <label>Level</label>
                                    <div class="dropdown" id="dropdown3">
                                        <input type="text" class="textBox2" placeholder="Select Level" value="{{ old('level') }}" name="level">
                                        <div class="option">
                                            <div onclick="level('1')">1</div>
                                            <div onclick="level('2')">2</div>
                                            <div onclick="level('3')">3</div>
                                        </div>
                                    </div>
                                    <span class="error">@error('level') {{ $message }} @enderror</span>
                                </p>

                                <p>
                                    <input type="submit" class="button" value="Insert Specialty">
                                </p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('authJs/script.js') }}"></script>
</body>
</html>
