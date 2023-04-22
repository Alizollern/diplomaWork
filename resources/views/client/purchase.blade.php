<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../../../resources/css/index.css">
    <link rel="stylesheet" href="../../../resources/css/purchase.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='../index.html'"> <span>Live</span>MedKZ </a>
        </div>

        <nav class="menu">
            <ul>
                <li class="menu-item">
                    <a href="#" onclick="window.location.href='../index.html'">Главная</a>
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
            <i class="fas fa-align-center"></i>
            <a href="purchase.htm"><h2>My purchases</h2></a>
        </div>
    </div>
</section>

<section class="recepts">
    <div class="container">
        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left"> <a href="purchase_page.blade.php">Purchase <span>№4</span></a></h3>
                <h3 style="float: right">04.04.2023</h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left"> <a href="purchase_page.blade.php">Purchase <span>№3</span></a></h3>
                <h3 style="float: right">03.04.2023</h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left"> <a href="purchase_page.blade.php">Purchase <span>№2</span></a></h3>
                <h3 style="float: right">02.04.2023</h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
            </div>
        </div>

        <div class="recepts-lists">
            <div class="left">
                <h3 style="float: left"> <a href="purchase_page.blade.php">Purchase <span>№1</span></a></h3>
                <h3 style="float: right">01.04.2023</h3>
            </div>
            <div class="right">
                <h3>The name</h3>
                <h3>Dosage</h3>
                <h3>Type of medication</h3>
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
<script src="../../../resources/js/logo.js"></script></body>
</html>
