@extends('doctorINT.doctorLayout')

@section('content')

<section class="receipt-title5">
    <div class="container">
        <div class="title5" id="hv" style="display: flex; align-items: center;">
            <i class="fas fa-scroll"></i>
            <a href="{{ route('getReceipts') }}}"><h4>My receipts</h4></a>
        </div>
        <div class="title5">
            <h4>Receipt <span>№4</span></h4>
            <h4>04.04.2023</h4>
        </div>
    </div>
</section>

<section class="receipts5">
    <div class="container">
        <div class="doctor5">
            <h4>Doctor:</h4>
            <h4>Kadyrov Kunaysh</h4>
        </div>
        <div class="back_fone5">
            <h3>The name of product</h3>
            <div class="receipts-lists5">
                <div class="left">
                    <h5>Citramon</h5>
                    <h5>Status:bought</h5>
                </div>

                <div class="left">
                    <h5>Antigripin</h5>
                    <h5>Status:bought</h5>
                </div>

                <div class="left">
                    <h5>Mukaltin</h5>
                    <h5>Status:canceled</h5>
                </div>

                <div class="pharm_qr5">
                    <img src="{{ asset('../photo/qr_code.png') }}" alt="QR">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
