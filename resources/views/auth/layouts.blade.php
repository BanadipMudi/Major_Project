<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Registration & Login </title>
    <link rel="stylesheet" href="{{asset('nancy_css\style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
</head>

<body style="height:100vh">

    <nav class="navbar navbar-expand-lg " style="background-color:orange;">


        <div class="text-center navbar-brand-wrapper mx-5 d-flex align-items-center justify-content-start"
            style="background-color:orange;">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <a class="navbar-brand brand-logo me-5" href="index.html"><img
                            src="{{asset('nancy_css\images/logo.png') }}" class="me-2"
                            alt="logo" /></a>
               
            </div>
        </div>
        
        <a class="navbar-brand " href="{{ URL('/') }}">
            <h4 class="text-center" style="font-family: 'Times New Roman', Times, serif;">Admin Login Register</h4>
        </a>
        
        
        

        <div class="collapse navbar-collapse me-5" id="navbarNavDropdown" style="font-family: 'Times New Roman', Times, serif;">
            <ul class="navbar-nav ms-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">
                        <button type="button" class="btn btn-dark btn-outline-white  me-2">Login</button>

                    </a>
                </li>
                <li class="nav-item d-none">
                    <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}"
                        href="{{ route('register') }}"> <button type="button"
                            class="btn btn-warning  me-3">Register</button></a>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <button type="button" class="btn btn-dark btn-outline-white  me-2">Logout</button>
                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>

        </div>


    </nav>


    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>