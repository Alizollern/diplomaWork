@extends('client.testlayout')

@section('content')

    <section class="price" id="#">
        <div class="container">
            <form action="{{ route('doctor.register.post') }}" class="price-form" method="POST">
                @csrf
                <h2 class="sub-title">Registration</h2>
                <label> <input type="text" name="doctor_name" class="price-input" id="doctor_name"
                               placeholder="Full name" required/></label>
                @if ($errors->has('doctor_name'))
                    <span class="text-danger">{{ $errors->first('doctor_name') }}</span>
                @endif
                <label> <input type="number" name="doctor_phone" class="price-input" id="doctor_phone"
                               placeholder="Phone number" required> </label>
                @if ($errors->has('doctor_phone'))
                    <span class="text-danger">{{ $errors->first('doctor_phone') }}</span>
                @endif
                <label> <input type="text" name="doctor_specialist" class="price-input" id="doctor_specialist"
                               placeholder="doctor specialist"></label>
                @if ($errors->has('doctor_specialist'))
                    <span class="text-danger">{{ $errors->first('doctor_specialist') }}</span>
                @endif
                <label> <input type="email" name="email" class="price-input" id="email" placeholder="Ваше email">
                </label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <label> <input type="password" name="password" class="price-input" id="password"
                               placeholder="Ваш password"> </label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <label> <input type="password" name="password_confirmation" class="price-input"
                               id="password_confirmation" value="{{ old('password_confirmation') }}"
                               placeholder="Password confirmation"> </label>
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
                <label>
                    <button class="button" type="submit" id="price-action" style="width: 344px">Register</button>
                </label>
            </form>
            <img src="{{asset('photo/iphone2.png')}}" alt="Rolls" class="price-image">
        </div>
    </section>

@endsection
