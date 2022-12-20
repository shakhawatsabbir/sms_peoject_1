<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/style.css">
</head>
<body>
    <nav>
        <div class="navbar navbar-expand-md navbar-dark bg-dark  shadow">
            <div class="container">
                <a href="" class="navbar-brand">LOGO</a>
                <ul class="navbar-nav">
                    <li><a href="{{route('home')}}" class="nav-link">Home</a> </li>
                    <li><a href="" class="nav-link">All Course</a> </li>
                    @if(Session::get('student_id'))
                        <li class="dropdown">
                            <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                {{Session::get('student_name')}}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('student.dashboard')}}" class="dropdown-item">Dashboard</a></li>
                                <li><a href="" class="dropdown-item" onclick="event.preventDefault();document.getElementById('studentLogoutForm').submit();">Logout</a></li>
                                <form action="{{route('student.logout')}}" method="post" id="studentLogoutForm">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{route('user.login')}}" class="nav-link">Login</a> </li>
                        <li><a href="{{route('user.register')}}" class="nav-link">Registration</a> </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <section class=" bg-dark pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row pt-4 pb-2 ">
                        <div class="col-md-4  px-2">
                            <div class=" bg-white p-3">
                                <h4>About Institute</h4>
                                <hr/>
                                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias asperiores, cum error modi necessitatibus non perspiciatis quae quasi sequi vel vero, vitae voluptate. Accusantium ipsum non quidem. Iste, nihil.</p>
                            </div>
                        </div>
                        <div class="col-md-4  px-2">
                            <div class=" bg-white p-3">
                                <h4>Popular link</h4>
                                <hr/>
                                <ul>
                                    <li><a href="">Popular Course One</a></li>
                                    <li><a href="">Popular Course Two</a></li>
                                    <li><a href="">Popular Course Three</a></li>
                                    <li><a href="">Popular Course Four</a></li>
                                    <li><a href="">Popular Course Four</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4  px-2">
                            <div class=" bg-white p-3">
                                <h4>Follow Us On</h4>
                                <hr/>
                                <ul>
                                    <li><a href="">Popular Course One</a></li>
                                    <li><a href="">Popular Course Two</a></li>
                                    <li><a href="">Popular Course Three</a></li>
                                    <li><a href="">Popular Course Four</a></li>
                                    <li><a href="">Popular Course Four</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="text-white"/>
                    <div class="row">
                        <div class="col-md-12 text-white text-center">
                            <p>Copyright@2022,All right received by Shakhawat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('/')}}/js/bootstrap.bundle.min.js"></script>
</body>
</html>
