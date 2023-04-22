<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

    <link rel="stylesheet" href="{{asset('../css/search.css')}}">
    <link rel="stylesheet" href="{{asset('../css/index.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='{{asset('search.htm')}}'"> <span>Live</span>MedKZ </a>
        </div>

        <div class="login-btn">
            <button class="button" onclick="window.location.href='{{asset('loginDoctor.htm')}}'">login</button>
        </div>


    </div>
</header>

<section class="search">
    <div class="container">
        <div class="poisk">
            <form action="{{ route('doctor.medicines.search') }}" class="price-form">
                <input type="text" class="price-input" name="search" id="" placeholder="Product Name" min="3">
                <button class="button" type="submit">search</button>
            </form>
        </div>

        <div class="res">
            <table class="table table-striped">
                <tr>
                    <th>Product Name</th>
                    <th>Code ATX</th>
                    <th>Product Level</th>
                    <th>Release Form</th>
                </tr>
            @foreach($data as $medicine)
                <tr>
                    <td>{{ $medicine->product_name }}</td>
                    <td>{{ $medicine->code_atx }}</td>
                    <td>{{ $medicine->product_level }}</td>
                    <td>{{ $medicine->release_form }}</td> 
                    <td></td>
                    <td>
                        <form method="POST" action="{{route('doctor.receipt.add')}}">
                            @csrf
                            <input  type="hidden" name ="medicine_id" value="{{ $medicine->id}}">
                            <input type="hidden" name = "reciept_id" value="{{$receipt_id}}">
                            <input type="submit" value="TAKE">
                    </td>
                        </form>
                </tr>

            @endforeach
            </table>
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
<script src="{{asset('../js/logo.js')}}"></script>
</body>
</html>
