<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="{{asset('../css/index.css')}}">
    <link rel="stylesheet" href="{{asset('../css/pharmacy_page.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='{{route('main')}}'"> <span>Live</span>MedKZ </a>
        </div>

        <nav class="menu">
            <ul>
                <li class="menu-item">
                    <a href="#" onclick="window.location.href='{{route('main')}}'">Главная</a>
                </li>

                <li class="menu-item">
                    <a href="#">Запись</a>
                </li>

                <li class="menu-item">
                    <a href="#">Получить рецепт</a>
                </li>
                <li class="menu-item">
                    <a href="#">City</a>
                </li>
            </ul>
        </nav>

        <!--        <div class="cities">-->
        <!--            <button class="btn">City</button>-->
        <!--        </div>-->
        <!--        <div id="login-btn">-->
        <!--            <button class="btn">login</button>-->
        <!--        </div>-->


    </div>
</header>

<section class="recept-title">
    <div class="container">
        <div class="title">
            <i class="fas fa-globe-americas"></i>
            <a href="{{asset('pharmacies.blade.php')}}"><h2>A list of pharmacy </h2></a>
        </div>
    </div>
</section>
@foreach($data as $ph)
<section class="recepts">
    <div class="container">
        <div class="back_fone">
            <div class="pharm_title">
                <h1>{{$ph->pharmacy_name}}</h1>
                <a href="#">{{$ph->pharmacy_address}}<i class="fas fa-map-marker-alt"></i></a>
            </div>
            <div class="pharm_title">
                <h1>Contacts <i class="fas fa-phone" style="margin-left: 10px"></i></h1>
                <p>{{$ph->pharmacy_phone}}</p>
            </div>
            <div class="pharm_title">
                <h1>Email <i class="far fa-calendar" style="margin-left: 10px"></i></h1>
                <p>{{$ph->email}} </p>
            </div>
            <div class="pharm_title">
                <h1>Graphic of works <i class="far fa-calendar" style="margin-left: 10px"></i></h1>
                <p>Пн-Вс, с 09:00 - 23:00 </p>
            </div>

        </div>
    </div>
</section>
@endforeach




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
</body>
</html>
