<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="{{asset('../css/index.css')}}">
    <link rel="stylesheet" href="{{asset('../css/contact.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


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
            <i class="fas fa-phone"></i>
            <a href="{{asset('contact.blade.php')}}"><h2>The tech support </h2></a>
        </div>
        <div class="sup">
            <i class="fas fa-comments" style="font-size: 100px"></i>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="back_fone">
            <div class="pharm_title">
                <form action="{{route('client.post.contact')}}" class="price-form" >
                    <input type="text" name="email" placeholder="Your Email" class="price-input">
                    <textarea name="sms" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                    <button class="button" type="submit">Send</button>
                </form>
            </div>
            <div class="contact">
                <h1>Contacts <i class="fas fa-phone" style="margin-left: 10px"></i></h1>
                <p>livemed@gmail.kz</p>
                <p>8777-999-98-09</p>
                <p>8777-999-98-10</p>
                <p>Almaty, Baykonur 178</p>
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
