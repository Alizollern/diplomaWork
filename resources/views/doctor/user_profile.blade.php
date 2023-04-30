<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="{{asset('../css/index.css')}}">
    <link rel="stylesheet" href="{{asset('../css/user_profile.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='{{asset('search.htm')}}'"> <span>Live</span>MedKZ </a>
        </div>

    </div>
</header>

<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-pen"></i>
            <h2><a href="{{route('doctor.reciept',['employee_id' => $user->id,'full_name' => $user->full_name,'IIN' => $user->IIN, 'avatar' => $user->avatar])}}">Give new recept</a></h2>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="user">
            <div class="pharm_info">
                <h1>Name: {{$user->full_name}}</h1>
                <h1>IIN: {{$user->IIN}}</h1>
                <h1>DOB: {{$user->date_of_birth}}</h1>
                <h1>Email: {{$user->email}}</h1>
            </div>
            <div class="pharm_img">
                <img src="{{asset('../photo/user.png')}}" alt="UserImage">
            </div>
        </div>
        <div class="recepts">
            @foreach($data as $receipt)
            <div class="recepts-lists">
                <div class="left">
                    <h3 style="float: left">Receipt <span>{{$receipt->id}}</span></h3>
                    <h3 style="float: right">{{$receipt->receipt_date}}</h3>
                    <h3><a href="#">More Information</a></h3>
                </div>
                <div class="right">
                    <h3>The name: {{$receipt->receipt_title}}</h3>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section>





<footer class="footer">
    <div class="container">
        <div class="logo">
            <a href="#" class="logo"> @ 2023 LiveMedKZ </a>
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
<script src="{{asset('../js/logo.js')}}"></script>
</html>
