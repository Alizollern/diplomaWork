@extends('doctorINT.doctorLayout')

@section('content')
<section class="recepts">
    <div class="container">
        <div class="back_fone">


            <form action="" class="recept-form">
                <h2 class="sub-title">Receipt</h2>

                <label>
                    <input type="text" class="title_inp" id="" placeholder="Receipt title" required />
                </label>
                <label>
                    <textarea name="sms" cols="30" rows="10" placeholder="Your message"></textarea>
                </label>
                <a href="{{ route('setMedicines') }}"><button class="button" type="button" id="price-action">Next</button></a>
            </form>

        </div>
    </div>
</section>

@endsection
