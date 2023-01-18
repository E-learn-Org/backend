<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('authCss/style3.css') }}">
    {{-- material icons --}}
    {{-- <link rel="stylesheet" href="{{ url() }}"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Material+Icons+Sharp" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">
</head>
    <body>
        <div class="container">

            {{-- begin aside section --}}
            <aside class="aside_info">
                <div class="top">
                    <div class="logo">
                        <img class="image" src="{{ asset('images/logo.png') }}" alt="">
                        <h2 class="title_logo">SME<span class="danger">Learn</span></h2>
                    </div>

                    <div class="close_btn" onclick="unCheckBtn()" id="close_btn">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>

                <div class="sidebar">
                    <a href="#" class="active">
                        <i class="fa-solid fa-house"></i>
                        <h3>Dashboard</h3>
                    </a>

                    <a href="#">
                        <i class="fa-regular fa-user"></i>
                        <h3>My Learn</h3>
                    </a>

                    <a href="#">
                        <i class="fa-regular fa-envelope"></i>
                        <h3>Message</h3>
                        <span class="message_count">26</span>
                    </a>

                    <a href="#">
                        <i class="fa-solid fa-exclamation"></i>
                        <h3>Report</h3>
                    </a>

                    <a href="#">
                        <i class="fa-solid fa-chart-simple"></i>
                        <h3>Analysis</h3>
                    </a>

                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <h3>Setting</h3>
                    </a>

                    <a href="#">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <h3>Logout</h3>
                    </a>
                </div>
            </aside>
            {{-- end of aside section --}}
            {{-- begin of main section --}}
            <main>
                <h1>Workspace</h1>

                <div class="date">
                    <input type="date">
                </div>

                {{-- begin insights --}}
                <div class="insights">
                    {{-- total student --}}
                    <div class="student_total">
                        <i class="fa-sharp fa-solid fa-chart-pie"></i>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Students</h3>
                                <h1>83</h1>
                            </div>

                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>54%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text_muted">Last 24 Hours</small>
                    </div>
                    {{-- end student total --}}

                    {{-- total courses --}}
                    <div class="courses">
                        <i class="fa-solid fa-note-sticky"></i>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Courses</h3>
                                <h1>5</h1>
                            </div>

                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>87%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text_muted">Last 24 Hours</small>
                    </div>
                    {{-- end total course --}}

                    {{-- begin income --}}
                    <div class="income">
                        <i class="fa-solid fa-money-bill"></i>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Fees</h3>
                                <h1>150,000 FCFA</h1>
                            </div>

                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                    <p>50%</p>
                                </div>
                            </div>
                        </div>
                        <small class="text_muted">Last 24 Hours</small>
                    </div>
                    {{-- end income --}}
                </div>
                {{-- end insights --}}

                <div class="enrolled_courses">
                    <h2>Enrolled Courses</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Course Name</th>
                                <th>Course Instructor</th>
                                <th>Enrollment Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>ICT301</td>
                                <td>Mr Monthe</td>
                                <td>02-11-2022</td>
                                <td class="success">Completed</td>
                                <td><a href="#" class="danger">Delete</a></td>
                            </tr>

                            <tr>
                                <td>ICT305</td>
                                <td>Mr Ojong Will</td>
                                <td>05-11-2022</td>
                                <td class="success">Completed</td>
                                <td><a href="#" class="danger">Delete</a></td>
                            </tr>

                            <tr>
                                <td>ICT300</td>
                                <td>Mr Messi</td>
                                <td>07-11-2022</td>
                                <td class="success">Completed</td>
                                <td><a href="#" class="danger">Delete</a></td>
                            </tr>

                            <tr>
                                <td>ICT303</td>
                                <td>Mr Habib Mahamat</td>
                                <td>11-11-2022</td>
                                <td class="success">Completed</td>
                                <td><a href="#" class="danger">Delete</a></td>
                            </tr>

                            <tr>
                                <td>ICT307</td>
                                <td>Mr Habib Mahamat</td>
                                <td>02-11-2022</td>
                                <td class="success">Completed</td>
                                <td><a href="#" class="danger">Delete</a></td>
                            </tr>

                            <tr>
                                <td>ICT317</td>
                                <td>Mr Abessolo</td>
                                <td>02-11-2022</td>
                                <td class="success">Completed</td>
                                <td><a href="#" class="danger">Delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="show_more" href="#">Show more</a>
                </div>
            </main>
            {{-- end main section --}}
            {{-- begin of right section --}}
            <div class="right">
                <div class="top">
                    <button onclick="checkBtn()" class="menu_btn" id="menu_btn">
                        <i class="fa-solid fa-bars"></i>
                    </button>

                    <div class="theme_toggler" onclick="checkTheme()">
                        <i class="fa-solid fa-sun active"></i>
                        <i class="fa-solid fa-moon"></i>
                    </div>

                    <div class="profile">
                        <div class="info">
                            <p>Holla, <b>Chi Samuel</b></p>
                        </div>
                    </div>

                    <div class="profile_photo1">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>

                {{-- notifications --}}
                <div class="recent_notification">
                    <h2>Notifications</h2>
                    <div class="update_notif">
                        <div class="update">
                            <div class="profile_photo1">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="message">
                                <p><b>Ojong Will</b> You can check on stack overflow!</p>
                                <small class="text_muted">2 minutes</small>
                            </div>
                        </div>


                        <div class="update">
                            <div class="profile_photo1">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="message">
                                <p><b>Ojong Will</b> You can check on stack overflow!</p>
                                <small class="text_muted">2 minutes</small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="profile_photo1">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="message">
                                <p><b>Ojong Will</b> You can check on stack overflow!</p>
                                <small class="text_muted">2 minutes</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="course_analytics">
                    <h2>Course Analytics</h2>
                    <div class="item online">
                        <div class="icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>

                        <div class="right">
                            <div class="info">
                                <h3>COURSE CART</h3>
                                <small class="text_muted">Last 24 hours</small>
                            </div>
                            <h5 class="success">3</h5>
                            <a href="#">SHOW</a>
                        </div>
                    </div>

                    <div class="item offline">
                        <div class="icon">
                            <i class="fa-solid fa-book"></i>
                        </div>

                        <div class="right">
                            <div class="info">
                                <h3>MY LEARNING</h3>
                                <small class="text_muted">Last 24 hours</small>
                            </div>
                            <h5 class="warning">8</h5>
                            <a href="#">SHOW</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end right section --}}
        </div>
        <script src="{{ asset('authJs/script.js') }}"></script>
    </body>
</html>
