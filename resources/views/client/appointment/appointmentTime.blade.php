<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <link rel="stylesheet" href="../css/appoTime.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.reload()"> <span>Live</span>MedKZ </a>
        </div>

        <div class="login-btn">
            <button class="button" onclick="window.location.href='../login.htm'">login</button>
        </div>


    </div>
</header>

<section class="time">
    <div class="container">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">book up a time</button>
            <div id="myDropdown" class="dropdown-content">
            @foreach($times as $time)
                <a href="{{route('appointment.time',['id' => $time->id, 'name' => $name])}}">{{$time->start_interval_time}} - {{$time->end_interval_time}}</a>
            @endforeach
            </div>
        </div>
    </div>
</section>



<section class="search">
    <div class="container">
        <div class="doctors">
            <!---Doctor 1---->
            @foreach($data as $doctor)
            <div class="doctor">
                <div class="image">
                    <img src="../photo/user.png" alt="user">
                    <div class="image2">
                        <h1><a href="#">{{$doctor->doctor_name}}</a></h1>
                        <h3>{{$name}}</h3>
                        <h4><span>39</span> yea r work experience</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            ostrum obcaecati<br> perferendis quis quos reiciendis repellendus
                            voluptas  voluptate.</p>
                    </div>
                    <div class="image3">
                        <h2><i class="fas fa-calendar" style=" color: #009379; margin-right: 10px"></i> 09:00:00</h2>
                        <h2><i class="fas fa-phone" style=" color: #009379; margin-right: 10px"></i>{{$doctor->doctor_phone}}</h2>
                        <h2><i class="fas fa-map-marker-alt" style=" color: #009379; margin-right: 10px"></i> Almaty Bostandyk region, 43</h2>
                        <h2><i class="fas fa-hospital" style=" color: #009379; margin-right: 10px"></i> Astana Vision </h2>
                            <form action="{{ route('users.post.appointment') }}" method="POST">
                                @csrf

                                <button class="btn" type="submit">record</button>
                                @foreach($times as $time)
                                <input type="hidden" name="time" value="{{$time->id}}">
                                <input type="hidden" name="day" value="{{$time->day_id}}">
                                <input type="hidden" name="doctor" value="{{$doctor->id}}">
                                <input type="hidden" name="user" value="{{$user}}">
                                @endforeach
                            </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



<section class="new" id="new">
    <div class="container">
        <div class="news">
            <h2 class="sub-title">Новости LiveMedKZ !</h2>
            <div class="news-text">Будьте в курсе новостей с LiveMedKZ</div>
            <button class="button" type="button" id="price-action" style="max-width: 250px;">Начать -></button>
            <div class="circ"></div>
            <div class="circ2"></div>
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
<script src="../js/logo.js"></script>
<script src="../js/time.js"></script>


</body>
</html>