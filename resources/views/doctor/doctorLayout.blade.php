<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/loginDoctor.css')}}">
    <link rel="stylesheet" href="{{asset('css/search.css')}}">
    <link rel="stylesheet" href="{{asset('css/indexDoctor.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <link rel="stylesheet" href="{{asset('css/doctorProfile.css')}}">
    <link rel="stylesheet" href="{{asset('css/give_recept.css')}}">
    <link rel="stylesheet" href="{{asset('css/medicinesDoctor.css')}}">
    <link rel="stylesheet" href="{{asset('css/notification.css')}}">
    <link rel="stylesheet" href="{{asset('css/user_profile.css')}}">
    <link rel="stylesheet" href="{{asset('css/contactDoctor.css')}}">
    <link rel="stylesheet" href="{{asset('css/receiptsDoctor.css')}}">
    <link rel="stylesheet" href="{{asset('css/receipt_pageDoctor.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">--}}
{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">--}}

    <style type="text/css">
        body{
            font-family: sans-serif, Monteserat;
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .container{
            max-width: 1200px;
            margin: 0 auto;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .logo ,.nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .nav-item{
            font-size: 20px;
        }

        .container .logo{
            font-size: 1.8rem;
            color:#130f40;
            font-weight: bold;
            position: absolute;
            margin-bottom: 35px;
        }
        .container .logo span{
            color:#009379;
        }

        .container .logo{
            text-decoration: none;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }

    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <div class="logo">
                <a class="logo" id="logo"href="{{route('mainPage')}}"><span>Live</span>MedKZ</a>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('doctor.login') }}">Login</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('register') }}">Register</a>--}}
{{--                        </li>--}}
                    @else
                        <li class="nav-item" style="display: flex">
                            @if(Auth::check())
                                <a class="nav-link" href="">{{ Auth::user()->doctor_name }}</a>
                            @endif
                            <a class="nav-link" href="{{ route('doctor.logout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>
</header>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="logo2">
            <a href="#" class="logo2"> @ 2023 LiveMedKZ </a>
        </div>

        <div class="rights">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-github"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </div>

    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/logo.js')}}"></script>
<script src="{{asset('js/time.js')}}"></script>

</body>
</html>
