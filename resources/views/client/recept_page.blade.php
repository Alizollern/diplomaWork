<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="{{asset('../css/index.css')}}">
    <link rel="stylesheet" href="{{asset('../css/recept_page.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>-->
<!--        <script>-->
<!--            $(document).ready(function(){-->
<!--                $("#logo").hover(function(){-->
<!--                    $(this).css("font-size", "2.0rem");-->
<!--                }, function(){-->
<!--                    $(this).css("font-size", "1.8rem");-->
<!--                });-->
<!--            });-->
<!--        </script>-->

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
        <div class="title" id="hv" style="display: flex; align-items: center;">
            <i class="fas fa-scroll"></i>
            <a href="{{asset('receipts.blade.php')}}"><h2>My receipts</h2></a>
        </div>
        <div class="title">
            <h2>Receipt <span>{{$receipt->id}}</span></h2>
            <h2>{{$receipt->receipt_date}}</h2>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="doctor">
            <h2>Doctor:</h2>
            <h2>{{$doctor->doctor_name}}</h2>
        </div>
        <div class="back_fone">
            <h1>The name of product</h1>
            <div class="recepts-lists">
                @foreach($med as $medicines)
                <div class="left">
                    <h3>{{$medicines->product_name}}</h3>
                    <h3>Status:{{$medicines->code_atx}}</h3>
                </div>
                @endforeach
                <div class="pharm_qr">
                    <img src="{{ QrCode::size(300)->generate(route('recipes.show.qr', $receipt->id)) }}">
                </div>
            </div>
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

</body>
</html>
