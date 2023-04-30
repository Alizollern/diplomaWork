@extends('doctorINT.doctorLayout')

@section('content')
<section class="recept-title2">
    <div class="container">
        <div class="title3">
            <i class="fas fa-phone"></i>
            <a href="#"><h3>The tech support </h3></a>
        </div>
        <div class="sup">
            <i class="fas fa-comments" style="font-size: 100px"></i>
        </div>
    </div>
</section>

<section class="recepts2">
    <div class="container">
        <div class="back_fone">
            <div class="pharm_title2">
                <form action="#" class="price-form2" >
                    <input type="text" placeholder="Your Email" class="price-input2">
                    <textarea name="sms" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                    <button class="button">Send</button>
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

@endsection
