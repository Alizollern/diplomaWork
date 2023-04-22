<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="{{asset('../css/index.css')}}">
    <link rel="stylesheet" href="{{asset('../css/recepts.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='{{asset('../index.blade.php')}}'"> <span>Live</span>MedKZ </a>
        </div>

        <nav class="menu">
            <ul>
                <li class="menu-item">
                    <a href="#" onclick="window.location.href='{{asset('../index.blade.php')}}'">Главная</a>
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
            <i class="fas fa-scroll"></i>
            <a href="{{asset('receipts.blade.htm')}}"><h2>My receipts</h2></a>
        </div>
    </div>
</section>
@foreach($data as $receipt)

<section class="recepts">
    <div class="container">
        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left">Receipt <span>№{{$receipt->id}}</span></h3>
                <h3 style="float: right">{{$receipt->receipt_date}}</h3>
                <h3><a href="{{asset('recept_page.blade.php')}}">More Information</a></h3>
            </div>
            <div class="right">
                <h3>{{$receipt->receipt_title}}</h3>
                <h3>{{$receipt->receipt_comments}}</h3>
                <h3>{{$receipt->status}}</h3>
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
