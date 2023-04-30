@extends('doctor.doctorLayout')

@section('content')
<section class="receipt-title7">
    <div class="container">
        <div class="title7">
            <i class="fa fa-bell"></i>
            <a href="#">
                <h3>All notifications</h3>
            </a>
        </div>
    </div>
</section>

<section class="receipts">
    <div class="container">
        <div class="receipts-lists">
            @foreach($users as $people)
            <div class="left">
                <h3><a href="{{ route('getUserProfile',['id' => $people->id]) }}">{{$people->full_name}}</a></h3>
                <h5>{{$people->date_of_birth}}</h5>
            </div>
            @endforeach
            <div class="right">
                <h3>11:00:00</h3>
            </div>
        </div>
    </div>
</section>

@endsection
