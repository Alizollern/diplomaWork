@extends('doctor.doctorLayout')

@section('content')


<section class="receipt-title8">
    <div class="container">
        <div class="title2">
            <i class="fas fa-user"></i>
            <a href="#"><h3>Doctor profile</h3></a>
        </div>
    </div>
</section>

<section class="receipts">
    <div class="container">
        <div class="pharm_img1">
            <img src="{{asset('../photo/user.png')}}" alt="UserImage">
        </div>
        <div class="pharm_info1">
            <h3>Name: {{$name}}</h3>
            <h3>Specialist:  {{$specialist}}</h3>
            <h3>Email: {{$email}}</h3>
            <h3>Phone Number: {{$doctor_phone}}</h3>
        </div>

        <div class="back_fone_qr1">
            <button class="button">Forgot password</button>
            <div class="pharm_qr1">
                <img src="{{asset('../photo/qr_code.png')}}" alt="QR">
            </div>
        </div>
    </div>
</section>

@endsection
