<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="{{asset('../css/index.css')}}">
    <link rel="stylesheet" href="{{asset('../css/medicines.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='{{asset('../index.htm')}}'"> <span>Live</span>MedKZ </a>
        </div>

        <nav class="menu">
            <ul>
                <li class="menu-item">
                    <a href="#" onclick="window.location.href='{{asset('../index.htm')}}'">Главная</a>
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
            <i class="fas fa-shopping-bag"></i>
            <a href="{{asset('medicines.htm')}}"><h2>A list of medicines</h2></a></div>
    </div>

</section>
            <form action="{{ route('medicines.search') }}" class="price-form">
                <input type="number" class="price-input" name="atx" id="" placeholder="CODE_ATX">
                <button class="button" type="submit">search</button>
            </form>

<section class="recepts">
    <div class="container">
        <div class="recepts-lists">
            <table class="table table-striped">
                <tr>
                    <th> Product Name </th>
                    <th> Code ATX </th>
                    <th> Product Level </th>
                    <th> Release Form </th>
                </tr>
            @foreach($data as $drugs)
                <tr>
                    <td>{{ $drugs->product_name }}</td>
                    <td>{{ $drugs->code_atx }}</td>
                    <td>{{ $drugs->product_level }}</td>
                    <td>{{ $drugs->release_form}}</td>
                </tr>

            @endforeach
        </table>

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
