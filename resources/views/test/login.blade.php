@extends('test.testlayout')

@section('content')

<section class="login" id="#">
    <div class="container">
        <form action="{{ route('login.post') }}" class="login-form" method="POST">
            @csrf
            <h2 class="sub-title">User </h2>
            <label><input type="email" name="email" class="login-input" id="email" placeholder="Ваше email" required /></label>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif

            <label><input type="password" name="password" class="login-input" id="password" placeholder="Ваш password" required /></label>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <button class="button" type="submit" id="price-action">Login</button>
        </form>
        <img src="{{asset('photo/iphone2.png')}}" alt="Rolls" class="login-image">
    </div>
</section>



<section class="new" id="new">
    <div class="container">
        <div class="news">
            <h2 class="sub-title">Новости LiveMedKZ !</h2>
            <div class="news-text">Будьте в курсе новостей с LiveMedKZ</div>
            <button class="btn" type="button" style="max-width: 250px;">Начать -></button>
            <div class="circ"></div>
            <div class="circ2"></div>
        </div>
    </div>
</section>


@endsection
