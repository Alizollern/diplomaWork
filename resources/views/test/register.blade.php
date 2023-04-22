
@extends('test.testlayout')

@section('content')


<section class="price" id="#">
    <div class="container">
        <form action="{{ route('register.post') }}" class="price-form" method="POST">
            @csrf
            <h2 class="sub-title">Registration</h2>
            <label> <input type="text" name="full_name" class="price-input" id="full_name" placeholder="Full name" required /></label>
            @if ($errors->has('full_name'))
                <span class="text-danger">{{ $errors->first('full_name') }}</span>
            @endif
            <label> <input type="number" name="user_phone" class="price-input" id="user_phone" placeholder="Phone number" required> </label>
            @if ($errors->has('user_phone'))
                <span class="text-danger">{{ $errors->first('user_phone') }}</span>
            @endif
            <label> <input type="date" name="date_of_birth" class="price-input" id="date_of_birth" placeholder="Birth date" min="1980-01-01" max="2005-12-31"></label>
            @if ($errors->has('date_of_birth'))
                <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
            @endif
            <label> <input type="number" name="IIN" class="price-input" id="IIN" placeholder="IIN"> </label>
            @if ($errors->has('IIN'))
                <span class="text-danger">{{ $errors->first('IIN') }}</span>
            @endif
            <label>  <input type="email" name="email" class="price-input" id="email" placeholder="Ваше email"> </label>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <label> <input type="password" name="password" class="price-input" id="password" placeholder="Ваш password"> </label>
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <label> <input type="password" name="password_confirmation"  class="price-input" id="password_confirmation"  value="{{ old('password_confirmation') }}" placeholder="Password confirmation"> </label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
            @endif
            <label> <button class="button" type="submit" id="price-action" style="width: 344px">Register</button> </label>
        </form>
        <img src="{{asset('photo/iphone2.png')}}" alt="Rolls" class="price-image">
    </div>
</section>


@endsection