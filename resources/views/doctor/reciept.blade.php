<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/give_recept.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">

</head>
<body>
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="#" id="logo" class="logo" onclick="window.location.href='../index.html'"> <span>Live</span>MedKZ </a>
        </div>

    </div>
</header>

<section class="recepts">
    <div class="container">
        <div class="back_fone">

        	<form action="{{ route('doctor.addReciept') }}" method="POST" class="recept-form">
        		
        		@csrf

                <h2 class="sub-title">Receipt</h2>

                <label>
                    <input type="text" class="title_inp" name="receipt_title" placeholder="Receipt title" required />
                </label>
                <label>
                    <textarea name="receipt_comments" cols="30" rows="10" placeholder="Your message"></textarea>
                </label>
                <label>
                	<input type="hidden" name="patient" class="form-control" value="{{$id}}" ><br>
                </label>
                <label>
                	<input type="date" name="expired_date" class="form-control" placeholder="expired_date"><br>
                </label>
                <label>
					<input type="hidden" name="doctor" class="form-control" value="{{$doctor}}"><br>
				</label>
                	<button class="button" type="submit" id="price-action">Next</button>
            </form>

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
</body>
</html>